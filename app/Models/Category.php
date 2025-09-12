<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasFactory;

class Category extends Model
{
    protected $fillable = 
    [
        'name', 
        'color'
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }    
}
