<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //
    public function register_course(Request $req){
        $name = $req -> name;


        #createmodelsavedatabase
        $new_course = new Course([
            'name' => $name,
        ]);

        $new_course -> save();
        return response()->json($new_course);
        dd($new_course);

    }
     public function get_course (Request $req){
         $course = Course::all();
        return response() -> json(['new_course' => $course], 200);
        dd($course);
     }
}
