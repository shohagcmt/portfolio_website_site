<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectModel;
class ProjectController extends Controller
{
    function ProjectPage(){
        $projectData=json_decode(ProjectModel::orderBy('id','desc')->get());
        return view('Projects',['projectData'=>$projectData]);
    }
}
