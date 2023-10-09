<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcademicYear;

class AcademicYearController extends Controller
{
    //
    public function register_academicYear(Request $req){
        $academic_year = $req -> academic_year;
        $name= $req -> name;



        #createmodelsavedatabase
        $new_AcademicYear = new AcademicYear([
            'academic_year' => $academic_year,
            'name'=> $name

        ]);

        $new_AcademicYear -> save();
        return response()->json($academic_year);
        dd($new_AcademicYear);

    }
    public function get_Academicyear (Request $req){
       $Academicyear = AcademicYear::all();
       return response() -> json(['new_academic_year' => $Academicyear], 200);
       dd($Academicyear);
    }
}
