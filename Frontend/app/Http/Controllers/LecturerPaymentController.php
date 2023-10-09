<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LecturerPaymentController extends Controller
{
    //
    public function lecturerPayment(){
        $http = new \GuzzleHttp\Client();
        $response = $http -> get('http://127.0.0.1:8000/api/employee_route/get_employee');
        $result = json_decode((string)$response -> getBody(), true)['new_employee'];
        //dd($result);

        return view('LecturerPayment', ['employees' => $result]);

    }

    public function create_lecturerPayment(Request $req){
        $course_id = 0;
        $main_salary_id=0;
        $hour_salary_id=0;



        $http = new \GuzzleHttp\Client();

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

         //main_salary
        $response3 = $http -> get('http://127.0.0.1:8000/api/Main_salary_route/gets_salary');
        $results3 = json_decode((string)$response3 -> getBody(), true)['new_salary'];


        foreach($results3 as $result){
            if($result['name']== $req -> main_salary){
            $main_salary_id = $result['id'];
          }

         }
         if($main_salary_id==0 ){
             $body = [

                 'name' => $req -> main_salary
             ];

             $response = $http -> post('http://127.0.0.1:8000/api/Main_salary_route/create_salary', ['form_params' => $body]);
             $result = json_decode((string)$response -> getBody(), true);
             $main_salary_id = $result['id'];

         }

         //hour_salary
        $response4 = $http -> get('http://127.0.0.1:8000/api/hourSalary_route/get_allhourSalary');
        $results4 = json_decode((string)$response4 -> getBody(), true)['new_hour_salary'];


        foreach($results4 as $result){
            if($result['name']== $req -> main_hour_salary){
            $hour_salary_id = $result['id'];
          }

         }
         if($hour_salary_id==0 ){
             $body = [

                 'name' => $req -> hour_salary
             ];

             $response = $http -> post('http://127.0.0.1:8000/api/Main_salary_route/create_salary', ['form_params' => $body]);
             $result = json_decode((string)$response -> getBody(), true);
             $main_salary_id = $result['id'];

         }



         $payrollbody = [

            "name" => $req ->firstname.' '.$req ->lastname,
            "course_id"=> $course_id,
            "main_salary_id" =>$main_salary_id,
            "hour_salary_id"=>$hour_salary_id,
            "payroll_date" =>$req ->date


        ];

        $response3 = $http -> post('http://127.0.0.1:8000/api/emp_payroll/input_emppayroll', ['form_params' => $payrollbody]);
        $result3 = json_decode((string)$response3 -> getBody(), true);



        return back();


    }

}
