<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Add this line:
    protected $fillable = [
        'title',
        'instructor',
        'image',
        'rating',
        'reviews'
    ];
}
