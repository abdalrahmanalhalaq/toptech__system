<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    //Appended Model Attribute 
    public function fullMobile(): Attribute
    {
        return new Attribute(get: fn () => $this->mobile != "" ? "+00" . $this->mobile : "No Mobile");
    }

    public function _courses(){
        return $this->hasMany(course_trainers::class,'trainer_id','id');
    }

    public function courses(){
        return $this->belongsToMany(course::class,course_trainers::class, 'trainer_id','course_id');
    }
}
