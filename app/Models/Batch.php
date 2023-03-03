<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'batch', 'image',
    ];

    public function alumni()
    {
        return $this->hasMany(Alumni::class);
    }
}
