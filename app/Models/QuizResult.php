<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'mbti_type',
    ];

    protected $table = 'quiz_result';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
