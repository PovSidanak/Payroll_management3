<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\department;

class DepartmentController extends Controller
{
    //
    public function register_department(Request $req){
        $name = $req -> name;


        #createmodelsavedatabase
        $new_department = new department([
            'name' => $name,
        ]);

        $new_department -> save();
        return response()->json($new_department);
        dd($new_department);

    }
     public function get_department (Request $req){
         $department = department::all();
        return response() -> json(['new_department' => $department], 200);
        dd($department);
     }
}
