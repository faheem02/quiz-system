<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'quiz_id',
        'score',
    ];

    // ✅ Quiz relationship
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    // (optional but good)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
