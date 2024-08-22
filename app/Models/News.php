<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class News extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    public function news_contents(): HasMany
    {
        return $this->hasMany(NewsContent::class, "news_id", 'id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'news_category');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'news_tag');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(NewsComment::class, "news_id", 'id');
    }
}
