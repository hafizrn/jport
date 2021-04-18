<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userresume extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'fathers_name',
        'mothers_name',
        'gender',
        'religion',
        'marital_status',
        'national_id',
        'birthdate',
        'nationality',
        'mobile_no',
        'email',
        'present_address',
        'permanent_address',
        'objective',
        'present_salary',
        'expected_salary',
        'preferred_categories',
        'career_summary',
        'special_qualification',
        'skills',
        'about',
        'photo'
        
    ];
}
