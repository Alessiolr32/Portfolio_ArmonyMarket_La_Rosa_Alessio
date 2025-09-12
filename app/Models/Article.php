<?php

namespace App\Models;

use App\Models\Image;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use Searchable;

    protected $fillable = [
        'title',
        'price',
        'description',
        'category_id',
        'user_id',
        'is_accepted'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function setAccepted($value)
    {
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public function toSearchableArray()
    {
        return [
            'id' => (string) $this->id,
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'category' => $this->category,
            'user' => $this->user,
        ];
    }

     public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
