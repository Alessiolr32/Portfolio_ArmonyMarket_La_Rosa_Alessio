<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

use Google\Cloud\Vision\V1\Client\ImageAnnotatorClient as ClientImageAnnotatorClient;
use Google\Cloud\Vision\V1\Image as VisionImage;
use Google\Cloud\Vision\V1\Feature;
use Google\Cloud\Vision\V1\AnnotateImageRequest;
use Google\Cloud\Vision\V1\BatchAnnotateImagesRequest;

class GoogleVisionLabelImage implements ShouldQueue
{
    use Queueable;
    
    private $article_image_id, $filePath, $w, $h;
    
    public function __construct($article_image_id, $filePath, $w, $h)
    {
        $this->article_image_id = $article_image_id;
        $this->filePath = $filePath;
        $this->w = $w;
        $this->h = $h;
    }
    
    public function handle(): void
    {
        $i = Image::find($this->article_image_id);
        if (!$i) return;
        
        $bytes = file_get_contents(storage_path('app/public/' . $this->filePath));
        if ($bytes === false) return;
        
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));
        
        $client = new ClientImageAnnotatorClient();
        
        $visionImage = (new VisionImage())->setContent($bytes);
        
        $feature = (new Feature())->setType(Feature\Type::LABEL_DETECTION);
        
        $annotateReq = (new AnnotateImageRequest())
        ->setImage($visionImage)
        ->setFeatures([$feature]);
        
        $batchReq = (new BatchAnnotateImagesRequest())
        ->setRequests([$annotateReq]);
        
        $batchRes = $client->batchAnnotateImages($batchReq);
        $client->close();
        
        $resp = $batchRes->getResponses()[0] ?? null;
        if (!$resp) return;
        
        $labels = $resp->getLabelAnnotations();
        if (!$labels) return;
        
        $result = [];
        foreach ($labels as $label) {
            $result[] = $label->getDescription();
        }
        
        $i->labels = $result;
        $i->save();
    }
}
