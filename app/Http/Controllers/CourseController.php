<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::paginate(2);
        return view("home", ["courses"=>$courses]);
    }

    public function pagecourses(){
        $courses = Course::paginate(9);
        return view("course", ["courses"=>$courses]);
    }

    public function about(){
        $courses = Course::paginate(9);
        return view("about");
    }
}
