<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeCourse;

class EmployeeCourseController extends Controller
{
    //
    public function register_empcourse(Request $req){
        $course_id = $req -> course_id;
        $employee_id = $req -> employee_id;


        #createmodelsavedatabase
        $new_empcourse = new EmployeeCourse([
            'course_id' => $course_id,
            'employee_id' => $employee_id
        ]);

        $new_empcourse -> save();
        return response()->json($new_empcourse);
        dd($new_empcourse);

    }
     public function get_empcourse (Request $req){
        $empcourse = EmployeeCourse::all();
        return response() -> json(['new_employee_course' => $empcourse], 200);
        dd($empcourse);
     }

}
