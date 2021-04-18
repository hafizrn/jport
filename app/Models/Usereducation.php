<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usereducation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'exam_name',
        'result',
        'institute',
        'marks',
        'year',
        'subject',
        'duration',
        'university'
        
    ];
}
