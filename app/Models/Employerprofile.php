<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employerprofile extends Model
{
    use HasFactory;

    protected $fillable = [
        'employer_id',
        'company',
        'email',
        'phone',
        'address',
        'location',
        'category',
        'about',
        'photo',
        'website',
        'companylogo',
    ];
}
