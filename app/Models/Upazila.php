<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upazila extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'division_id',
        'district_id',
        'slug',
    ];

    public function division(){
        return $this->belongsTo(Division::class, 'division_id','id');
    }
    public function district(){
        return $this->belongsTo(District::class, 'district_id','id');
    }
}
