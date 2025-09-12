<?php

namespace App\Jobs;

use Spatie\Image\Image as SpatieImage;
use Spatie\Image\Enums\Fit;
use Spatie\Image\Enums\Unit;
use App\Models\Image as ModelsImage;
use Spatie\Image\Enums\CropPosition;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResizeImage implements ShouldQueue
{
    use Queueable;
    
    private $w, $h, $fileName, $path;
    
    public function __construct($filePath, $w, $h)
    {
        $this->path = dirname($filePath);
        $this->fileName = basename($filePath);
        $this->w = $w;
        $this->h = $h;
    }
    
    public function handle(): void
    {
        $w = $this->w;
        $h = $this->h;
        $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName;
        $destPath = storage_path() . '/app/public/' . $this->path . "/crop_{$w}x{$h}_" . $this->fileName;
        
        SpatieImage::load($srcPath)
        ->fit(Fit::Max, $w, $h)
        ->watermark(
            base_path('resources/img/watermark.png'),
            width: 200, 
            height: 200,
            alpha: 50,)
            ->save($destPath);
        }
    }