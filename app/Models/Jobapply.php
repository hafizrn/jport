<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobapply extends Model
{
    use HasFactory;

    protected $fillable = [
        'jobseeker_id',
        'job_id',
        'employer_id',
        'expected_salary',

    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
    public function jobs(){
        return $this->belongsTo(Job::class, 'job_id','id');
    }
    public function resume(){
        return $this->belongsTo(Userresume::class, 'jobseeker_id','user_id');
    }
    public function employer(){
        return $this->belongsTo(User::class, 'employer_id','id');
    }
}
