<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HourSalary;

class HourSalaryController extends Controller
{
    //
    public function register_hoursalary(Request $req){
        $degree_id = $req -> degree_id;
        $position_id =$req -> position_id;
        $amount= $req -> amount;


        #createmodelsavedatabase
        $new_hoursalary = new HourSalary([
            'degree_id'=> $degree_id,
            'position_id' => $position_id,
            'amount' => $amount
        ]);

        $new_hoursalary -> save();
        return response()->json($new_hoursalary);
        dd($new_hoursalary);

    }
     public function get_hoursalary (Request $req){
         $hoursalary = HourSalary::all();
        return response() -> json(['new_hour_salary' => $hoursalary], 200);
        dd($hoursalary);
     }

}
