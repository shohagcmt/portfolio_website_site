<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoursModel;
class CourseController extends Controller
{
    function CoursePage(){
        $CoursesData=json_decode(CoursModel::orderBy('id','desc')->get());
        return view('Course',['CoursesData'=>$CoursesData]);
    }
}
