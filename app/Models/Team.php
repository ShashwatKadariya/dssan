<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'image', 'first_name', 'last_name', 'designation', 'position', 'statement', 'linkedin_url',
    ];
}
