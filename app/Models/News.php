<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'image', 'headline', 'tagline', 'reported_by', 'article', 'release_date',
    ];

    protected $casts = [
        'release_date' => 'datetime:Y-m-d',
    ];
}
