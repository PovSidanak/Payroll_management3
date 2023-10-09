<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeDegree;

class EmployeeDegreeController extends Controller
{
    //
    public function register_empdegree(Request $req){
        $degree_id = $req -> degree_id;
        $employee_id = $req -> employee_id;


        #createmodelsavedatabase
        $new_empdegree = new EmployeeDegree([
            'degree_id' => $degree_id,
            'employee_id' => $employee_id
        ]);

        $new_empdegree -> save();
        return response()->json($new_empdegree);
        dd($new_empdegree);

    }
     public function get_empdegree (Request $req){
         $empdegree = Employeedegree::all();
        return response() -> json(['new_employeedegree' => $empdegree], 200);
        dd($empdegree);
     }
}
