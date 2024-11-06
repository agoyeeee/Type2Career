<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobRecommendation extends Model
{
    use HasFactory;

    protected $table = 'job_recommendations';

    protected $fillable = [
        'mbti_type_id',
        'job_title',
        'job_description',
    ];

    public function mbtiType()
    {
        return $this->belongsTo(MBTIType::class, 'mbti_type_id');
    }
}
