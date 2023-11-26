<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class Searchcont extends Controller
{
    public function search(Request $request)
    { 
    try {
        
        $query = $request->input('query', '');

      
        session(['search_query' => $query]);
      
            
        $results = Course::where('name', 'LIKE', '%' . $query . '%')->paginate(10);
        
        $courses = Course::all();
       
    } catch (\Exception $e) {
       
        $results = collect(); 
    }


    return view('course', compact('results', 'query'));
    }
}

