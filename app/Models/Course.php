<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function _trainers(){
        return $this->hasMany(course_trainers::class,'course_id','id');
    }

    public function trainers(){
        return $this->belongsToMany(Trainer::class,course_trainers::class, 'course_id','trainer_id');
    }
}
