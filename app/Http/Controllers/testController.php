<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Trainer;
use Illuminate\Http\Request;

class testController extends Controller
{
    //

    public function course(){

        $data = Course::where('id', '=', 1)->get();
        $new = $data->load('trainers');
        return $new;
    }
    
    
    public function trainer(){
    
        $data = Trainer::where('id', '=', 2)->get();
        $new = $data->load('courses');
        return $new;
    }

}
