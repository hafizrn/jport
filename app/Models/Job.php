<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'type_id',
        'level_id',
        'location',
        'title',
        'company',
        'company_info',
        'vacancy',
        'age',
        'gender',
        'experiences',
        'salary',
        'educational_qualification',
        'additional_requirements',
        'responsibilities',
        'instruction',
        'email',
        'deadline',
        'contactperson'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function type(){
        return $this->belongsTo(Type::class,'type_id','id');
    }

    public function level(){
        return $this->belongsTo('App\Models\Level');
    }
    public function employers(){
        return $this->belongsTo(Jobapply::class, 'user_id','employer_id');
    }
}
