<?php

namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Article extends Model {
        use HasFactory, SoftDeletes;

        protected $fillable = [
        'title',
        'slug',
        'body',
        'published_at',
        ];

        protected function casts(): array
        {
        return [
        'published_at' => 'datetime',
        ];
        }
    }
