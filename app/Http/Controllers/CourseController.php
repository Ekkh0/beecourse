<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Content;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::orderBy('rating', 'DESC')->paginate(6);
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

    public function detail($id){
        $course = Course::where('id', '=', $id)->first();
        $chapters = Content::where('course_id', '=', $course->id)->paginate(6);
        return view("detail", ["course"=>$course, "chapters"=>$chapters]);
    }

}
