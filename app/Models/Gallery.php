<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ["name", "cover_image", "slug"];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($gallery) {
            $gallery->slug = Str::slug($gallery->name . "-" . str::random());
        });
    }
}
