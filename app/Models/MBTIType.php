<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MBTIType extends Model
{
    use HasFactory;

    protected $table = 'mbti_types';

    protected $fillable = [
        'type_code',
        'description',
    ];
}
