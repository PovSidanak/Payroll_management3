<?php

namespace App\Http\Controllers;

use App\Models\EmployeePayroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EmployeePayrollController extends Controller
{
    //

    public function register_emppayroll(Request $req){



        $employee_id = $req -> employee_id;
        $total_hour = $req -> total_hour;
        $total_hourpay = $req->total_hourpay;
        $project_inc = $req -> project_inc;
        $total_monthly_payroll=$req -> total_monthly_payroll;


        #createmodelsavedatabase
        $new_emppayroll = new EmployeePayroll([
            'employee_id' => $employee_id,
            'total_hour' => $total_hour,
            'total_hourpay' =>$total_hourpay,
            'project_inc' =>$project_inc,
            'total_monthly_payroll' => $total_monthly_payroll

        ]);

        $new_emppayroll -> save();
        return response()->json($new_emppayroll);
        dd($new_emppayroll);

    }
     public function get_emppayroll (Request $req){
         //$emppayroll = EmployeePayroll::all();
         //return response() -> json(['new_employee_payroll' => $emppayroll], 200);
        // dd($emppayroll);
        $emppayroll = DB::table('employee_payroll')
        ->  join('employee','employee_payroll.employee_id', '=', 'employee.id')
        ->  join('main_salary', 'main_salary.id', '=', 'employee.main_salary_id')
        ->  join('hour_salary', 'hour_salary.id', '=', 'employee.hour_salary_id')
        ->  select( 'main_salary.amount as main_salary_amount','hour_salary.amount as hour_salary_amount','employee_payroll.*','employee.name as employee_name','employee.gender as employee_gender','employee.main_salary_id as employee_main_salary_id')
        ->  get();


        return response() -> json(['new_employee_payroll' => $emppayroll], 200);
       // dd($emppayroll);
     }

}
