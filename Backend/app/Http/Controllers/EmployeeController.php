<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Employees;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    //
    public function register_emp(Request $req){



        $new_emp = $req -> all();
        Employees::create($new_emp);


        return response()->json($new_emp);
        dd($new_emp);

    }
     public function get_emp (Request $req){
        $emp = DB::table('employee') ->
        join('position', 'employee.position_id', '=', 'position.id')->
        join('department','employee.department_id', '=', 'department.id')->
        join('course','employee.course_id', '=', 'course.id')->
        join('degree','employee.degree_id', '=', 'degree.id')->
        join('main_salary','employee.main_salary_id', '=', 'main_salary.id')->
        join('hour_salary', 'employee.hour_salary_id', '=','hour_salary.id')->
        select('employee.*','position.type','position.status','department.name as department_name',
        'course.name as course_name','main_salary.amount as main_salary_amount','hour_salary.amount as hour_salary_amount')->

        get();


        return response() -> json(['new_employee' => $emp], 200);
        dd($emp);
     }

    //  public function get_by_name (Request $req){

    //     $emp = Employees::where('name', 'like', "%".$req -> name."%") -> get();
    //     return response() -> json(['new_employee' => $emp], 200);
    // }

     public function update_emp (Request $req){

        $new_name = $req -> new_name;
        $emps_id = $req -> employee_id;
        $new_gender = $req -> new_gender;
        $new_email = $req -> new_email;
        $new_phone = $req -> new_phone;
        $new_position_id = $req -> new_positon_id;
        $new_department_id = $req -> new_department_id;
        $new_degree_id =$req -> new_degree_id;
        $new_start_date=$req->new_start_date;
        $new_course_id = $req -> new_course_id;
        $new_main_salary_id = $req -> new_main_salary_id;
        $new_hour_salary_id = $req -> new_hour_salary_id;


        $update_query = Employees::where('id', $emps_id)
            -> update([
                'name' => $new_name,
                'gender' => $new_gender,
                'email' => $new_email,
                'phone' => $new_phone,
                'position_id' => $new_position_id,
                'department_id' => $new_department_id,
                'course_id' => $new_course_id,
                'degree_id' => $new_degree_id,
                'start_date'=>$new_start_date,
                'main_salary_id' => $new_main_salary_id,
                'hour_salary_id' => $new_hour_salary_id


            ]);
        if ($update_query == 0){
            return response() -> json(['message' => 'Employee not found'], 200);
        }
        return response() -> json(['message' => $req -> all()], 200);
        //dd('hi');
    }

    // public function delete_emp(Request $req){
    //     $emps_id = $req -> employee_id;
    //    // dd($client_id);

    //    $delete_query = Employees::where('id', $emps_id)->delete();
    //    if ($delete_query == 0){
    //     return response() -> json(['message' => 'Employee not found'], 200);
    //     }
    //    return response() -> json(['message' => 'Delete successful']);

    //    //return response() -> json(['message' => $req -> all()], 200);
    // }


}
