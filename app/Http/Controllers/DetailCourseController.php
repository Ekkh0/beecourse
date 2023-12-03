<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Course;

class DetailCourseController extends Controller
{

    public function index(){
        $datas = Course::all();
        return view("pythoncourse",compact("datas"));
    }

    public function showContent($id){
        $content = Course::where('id', $id)->get();
        // $content = Course::paginate(9);
        return view("pythoncourse",compact("content"));

    }

    public function showDetail($id){
        $course =  Course::where('id', $id)->get();
        return view("pythoncourse",  ["course"=>$course]);
    }

    // public function pagecontents(){
    //     $content = Content::paginate(9);
    //     return view("pythoncourse", ["content"=>$content]);
    // }
}
