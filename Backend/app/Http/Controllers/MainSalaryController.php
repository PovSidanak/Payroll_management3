<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainSalary;

class MainSalaryController extends Controller
{
    //
    public function register_salary(Request $req){
        $position_id = $req -> position_id;
        $amount= $req -> amount;


        #createmodelsavedatabase
        $new_salary = new MainSalary([
            'position_id' => $position_id,
            'amount' => $amount
        ]);

        $new_salary -> save();
        return response()->json($new_salary);
        //dd($new_salary);

    }
     public function get_salary (Request $req){
         $salary = MainSalary::all();
        return response() -> json(['new_salary' => $salary], 200);
        //dd($salary);
     }
}
