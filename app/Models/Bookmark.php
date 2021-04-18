<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'job_id',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
    public function jobs(){
        return $this->belongsTo(Job::class, 'job_id','id');
    }
}
