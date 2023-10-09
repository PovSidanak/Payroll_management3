<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HistoryController extends Controller
{
    //
    public function payrollhistory(){
        $http = new \GuzzleHttp\Client();
        $response = $http -> get('http://127.0.0.1:8000/api/emp_payroll/get_employeepayroll');
        $result = json_decode((string)$response -> getBody(), true)['new_employee_payroll'];
        //dd($result);

        return view('History_payroll', ['employees' => $result]);

    }


}


