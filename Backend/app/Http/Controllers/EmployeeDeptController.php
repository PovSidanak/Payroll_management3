<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeDepartment;

class EmployeeDeptController extends Controller
{
    //
    public function register_empdept(Request $req){
        $department_id = $req -> department_id;
        $employee_id = $req -> employee_id;


        #createmodelsavedatabase
        $new_empdept = new EmployeeDepartment([
            'department_id' => $department_id,
            'employee_id' => $employee_id
        ]);

        $new_empdept -> save();
        return response()->json($new_empdept);
        dd($new_empdept);

    }
     public function get_empdept (Request $req){
         $empdept = EmployeeDepartment::all();
        return response() -> json(['new_employeedept' => $empdept], 200);
        dd($empdept);
     }
}
