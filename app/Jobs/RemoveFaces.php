<?php

namespace App\Jobs;

use App\Models\Image as ModelsImage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Image as SpatieImage;
use Spatie\Image\Enums\AlignPosition;
use Spatie\Image\Enums\Fit;

// ✅ Nuove API Vision (namespace Client + batch)
use Google\Cloud\Vision\V1\Client\ImageAnnotatorClient;
use Google\Cloud\Vision\V1\AnnotateImageRequest;
use Google\Cloud\Vision\V1\BatchAnnotateImagesRequest;
use Google\Cloud\Vision\V1\Image;
use Google\Cloud\Vision\V1\Feature;

class RemoveFaces implements ShouldQueue
{
    use Queueable, Dispatchable, InteractsWithQueue, SerializesModels;

    private int $article_image_id;

    public function __construct(int $article_image_id)
    {
        $this->article_image_id = $article_image_id;
    }

    public function handle(): void
    {
        $i = ModelsImage::find($this->article_image_id);
        if (!$i) return;

        $fullPath = storage_path('app/public/' . $i->path);
        $bytes = @file_get_contents($fullPath);
        if ($bytes === false) return;

        // Credenziali (oppure mettile in .env come GOOGLE_APPLICATION_CREDENTIALS=...)
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));

        // ---- Vision v2.x: batchAnnotateImages ----
        $client = new ImageAnnotatorClient();

        $image = (new Image())->setContent($bytes);
        $feature = (new Feature())->setType(Feature\Type::FACE_DETECTION);

        $annotateReq = (new AnnotateImageRequest())
            ->setImage($image)
            ->setFeatures([$feature]);

        $batchReq = (new BatchAnnotateImagesRequest())
            ->setRequests([$annotateReq]);

        $batchRes = $client->batchAnnotateImages($batchReq);
        $responses = $batchRes->getResponses();

        $faces = $responses[0]->getFaceAnnotations();

        foreach ($faces as $face) {
            $vertices = $face->getBoundingPoly()->getVertices();

            $bounds = [];
            foreach ($vertices as $v) {
                $bounds[] = [$v->getX(), $v->getY()];
            }
            if (count($bounds) < 3) continue;

            $w = max(1, $bounds[2][0] - $bounds[0][0]);
            $h = max(1, $bounds[2][1] - $bounds[0][1]);

            SpatieImage::load($fullPath)->watermark(
                base_path('resources/img/blur.png'),
                AlignPosition::TopLeft,
                paddingX: $bounds[0][0],
                paddingY: $bounds[0][1],
                width: $w,
                height: $h,
                fit: Fit::Stretch
            )->save();
        }

        $client->close();
    }
}
