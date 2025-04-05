<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'github_url',
        'description',
        'body',
        'cover',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
        ];
    }

    public function coverUrl(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => $attributes['cover'] ?
                asset('storage/'.$attributes['cover']) :
                asset('images/article-placeholder.jpg'),
        );
    }
}
