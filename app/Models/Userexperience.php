<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userexperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company',
        'company_type',
        'designation',
        'responsibilities',
        'duration',
        'department',
        'location'
    ];
}
