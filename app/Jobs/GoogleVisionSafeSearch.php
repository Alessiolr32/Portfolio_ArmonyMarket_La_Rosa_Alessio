<?php

namespace App\Jobs;

use App\Models\Image as ModelsImage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

use Google\Cloud\Vision\V1\Client\ImageAnnotatorClient as ClientImageAnnotatorClient;
use Google\Cloud\Vision\V1\Image;
use Google\Cloud\Vision\V1\Feature;
use Google\Cloud\Vision\V1\AnnotateImageRequest;
use Google\Cloud\Vision\V1\BatchAnnotateImagesRequest;

class GoogleVisionSafeSearch implements ShouldQueue
{
    use Queueable;
    
    private $article_image_id;
    
    public function __construct($article_image_id)
    {
        $this->article_image_id = $article_image_id;
    }
    
    public function handle(): void
    {
        $i = ModelsImage::find($this->article_image_id);
        if (!$i) return;
        
        $bytes = file_get_contents(storage_path('/app/public/' . $i->path));
        if ($bytes === false) return;

        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));
        
        $client = new ClientImageAnnotatorClient();
        
        $visionImage = (new Image())->setContent($bytes);

        $feature = (new Feature())->setType(Feature\Type::SAFE_SEARCH_DETECTION);

        $annotateReq = (new AnnotateImageRequest())
        ->setImage($visionImage)
        ->setFeatures([$feature]);

        $batchReq = (new BatchAnnotateImagesRequest())
        ->setRequests([$annotateReq]);

        $batchRes = $client->batchAnnotateImages($batchReq);
        $client->close();

        $resp = $batchRes->getResponses()[0] ?? null;

        $safe = $resp->getSafeSearchAnnotation();
        if (!$safe) return;

        $likelihoodName = [
            0 => 'text-secondary bi bi-circle-fill',
            1 => 'text-success bi bi-check-circle',
            2 => 'text-success bi bi-check-circle-fill',
            3 => 'text-warning bi bi-exclamation-circle',
            4 => 'text-warning bi bi-exclamation-circle-fill',
            5 => 'text-danger bi bi-dash-circle-fill',
        ];

        $i->adult    = $likelihoodName[$safe->getAdult()]; 
        $i->spoof    = $likelihoodName[$safe->getSpoof()];
        $i->racy     = $likelihoodName[$safe->getRacy()];
        $i->medical  = $likelihoodName[$safe->getMedical()];
        $i->violence = $likelihoodName[$safe->getViolence()];
        $i->save();
    }
}
