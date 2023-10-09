<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class EmployeeController extends Controller
{
    //

    public function homepage(){
        $http = new \GuzzleHttp\Client();


        // $response = $http -> get('http://127.0.0.1:8000/api/employee_route/get_emps');

        // if($response -> getStatusCode() != 200){
        //     return view('homepage');


        // }
        // $result = json_decode((string)$response -> getBody(), true);
       // dd($result["new_employee"]);
       return view('homepage');


    }



    public function employee_page(){

        $http = new \GuzzleHttp\Client();

        $response = $http -> get('http://127.0.0.1:8000/api/employee_route/get_employee');
        $result = json_decode((string)$response -> getBody(), true)['new_employee'];
        // dd($result);
        return view('Employee', ['employees' => $result]);
    }

    public function create_employee(Request $req){

        $department_id = 0;
        $position_id = 0;
        $course_id = 0;
        $degree_id =0;
        $main_salary_id=0;
        $hour_salary_id=0;



        $http = new \GuzzleHttp\Client();

       //  department

        $response = $http -> get('http://127.0.0.1:8000/api/dept_route/gets_dept');
        $results = json_decode((string)$response -> getBody(), true)['new_department'];

        foreach($results as $result){
            if($result['name']== $req -> dept){
                $department_id = $result['id'];

            }

        }
        if($department_id == 0){
            $body = [
                'name' => $req -> dept


            ];

            $response = $http -> post('http://127.0.0.1:8000/api/dept_route/input_dept', ['form_params' => $body]);
            $result = json_decode((string)$response -> getBody(), true);
            $department_id = $result['id'];
        }

        // position
        $response1 = $http -> get('http://127.0.0.1:8000/api/position_route/gets_position');
        $results1 = json_decode((string)$response1 -> getBody(), true)['new_position'];

        foreach($results1 as $result){
           if($result['type']== $req -> position){
           $position_id = $result['id'];
         }
        }
        if($position_id==0 ){
            $body = [
                'status' => 'Full Time',
                'type' => $req ->position
            ];

            $response = $http -> post('http://127.0.0.1:8000/api/position_route/input_position', ['form_params' => $body]);
            $result = json_decode((string)$response -> getBody(), true);
            $position_id = $result['id'];

        }

        //Course
        $response2 = $http -> get('http://127.0.0.1:8000/api/course_route/gets_course');
        $results2 = json_decode((string)$response2 -> getBody(), true)['new_course'];

        foreach($results2 as $result){
           if($result['name']== $req -> course){
           $course_id = $result['id'];
         }

        }
        if($course_id==0 ){
            $body = [

                'name' => $req -> course
            ];

            $response = $http -> post('http://127.0.0.1:8000/api/course_route/input_course', ['form_params' => $body]);
            $result = json_decode((string)$response -> getBody(), true);
            $course_id = $result['id'];

        }

         //degree
         $response5 = $http -> get('http://127.0.0.1:8000/api/degree_route/gets_degree');
         $results5 = json_decode((string)$response5 -> getBody(), true)['new_degree'];

         foreach($results5 as $result){
            if($result['degree']== $req -> degree){
            $degree_id = $result['id'];
          }

         }
         if($degree_id==0 ){
             $body = [

                 'degree' => $req -> degree
             ];

             $response = $http -> post('http://127.0.0.1:8000/api/degree_route/input_degree', ['form_params' => $body]);
             $result = json_decode((string)$response -> getBody(), true);
             $degree_id = $result['id'];

         }

         //main_salary
         $response3 = $http -> get('http://127.0.0.1:8000/api/Main_salary_route/gets_salary');
         $results3 = json_decode((string)$response3 -> getBody(), true)['new_salary'];


         foreach($results3 as $result){
             if($result['amount']== $req -> main_salary){
             $main_salary_id = $result['id'];
           }

          }
          if($main_salary_id==0 ){
              $body = [


                'position_id' =>$req ->position_id,
                'amount' => '250$'

              ];

              $response = $http -> post('http://127.0.0.1:8000/api/Main_salary_route/create_salary', ['form_params' => $body]);
              $result = json_decode((string)$response -> getBody(), true);
              $main_salary_id = $result['id'];

          }
           //hour_salary
        $response4 = $http -> get('http://127.0.0.1:8000/api/hourSalary_route/get_allhourSalary');
        $results4 = json_decode((string)$response4 -> getBody(), true)['new_hour_salary'];


        foreach($results4 as $result){
            if($result['amount']== $req -> hour_salary){
            $hour_salary_id = $result['id'];
          }

         }
         if($hour_salary_id==0 ){
             $body = [

                'degree_id'=>$req -> degree_id(1),
                'position_id'=> $req ->position_id(1),
                'amount'=>'250$'
             ];

             $response = $http -> post('http://127.0.0.1:8000/api/hourSalary_route/create_hourSalary', ['form_params' => $body]);
             $result = json_decode((string)$response -> getBody(), true);
             $hour_salary_id = $result['id'];

         }



        $employeebody = [

            "name" => $req ->firstname.' '.$req ->lastname,
            "gender" => $req->gender,
            "email" => $req->email,
            "phone"=> $req->phone,
            "position_id" => $position_id,
            "department_id"=> $department_id,
            "course_id"=> $course_id,
            "degree_id"=>$degree_id,
            "start_date"=>$req ->start_date,
            "main_salary_id"=> $main_salary_id,
            "hour_salary_id" => $hour_salary_id
        ];


        $response3 = $http -> post('http://127.0.0.1:8000/api/employee_route/input_emp', ['form_params' => $employeebody]);
        $result3 = json_decode((string)$response3 -> getBody(), true);



        return back();
    }



}
