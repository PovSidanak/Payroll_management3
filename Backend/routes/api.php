<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\MainSalaryController;
use App\Http\Controllers\HourSalaryController;
use App\Http\Controllers\EmployeeDegreeController;
use App\Http\Controllers\EmployeeDeptController;
use App\Http\Controllers\EmployeeCourseController;
use App\Http\Controllers\EmployeePayrollController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Final Product
Route::group([
    'prefix' => 'emp_payroll'

], function(){
    Route::post('input_emppayroll', [EmployeePayrollController::class, 'register_emppayroll']);
    Route::get('get_employeepayroll', [EmployeePayrollController::class, 'get_emppayroll']);
});

Route::group([
    'prefix' => 'empcourse_route'

], function(){
    Route::post('input_empcourse', [EmployeeCourseController::class, 'register_empcourse']);
    Route::get('get_employeecourse', [EmployeeCourseController::class, 'get_empcourse']);
});

Route::group([
    'prefix' => 'empdept_route'

], function(){
    Route::post('input_empdept', [EmployeeDeptController::class, 'register_empdept']);
    Route::get('get_employeedept', [EmployeeDeptController::class, 'get_empdept']);
});

Route::group([
    'prefix' => 'empdegree_route'

], function(){
    Route::post('input_empdeg', [EmployeeDegreeController::class, 'register_empdegree']);
    Route::get('get_employeedeg', [EmployeeDegreeController::class, 'get_empdegree']);
});

Route::group([
    'prefix' => 'employee_route'

], function(){
    Route::post('input_emp', [EmployeeController::class, 'register_emp']);
    Route::get('get_employee', [EmployeeController::class, 'get_emp']);
    Route::put('update_employee', [EmployeeController::class, 'update_emp']);
});

Route::group([
    'prefix' => 'hourSalary_route'

], function(){
    Route::post('create_hourSalary', [HourSalaryController::class, 'register_hoursalary']);
    Route::get('get_allhourSalary', [HourSalaryController::class, 'get_hoursalary']);

});


Route::group([
    'prefix' => 'Main_salary_route'

], function(){
    Route::post('create_salary', [MainSalaryController::class, 'register_salary']);
    Route::get('gets_salary', [MainSalaryController::class, 'get_salary']);

});

Route::group([
    'prefix' => 'academicYear_route'

], function(){
    Route::post('input_academicyear', [AcademicYearController::class, 'register_academicYear']);
    Route::get('get_Academicyear', [AcademicYearController::class, 'get_Academicyear']);
});

Route::group([
    'prefix' => 'position_route'

], function(){
    Route::post('input_position', [PositionController::class, 'register_position']);
    Route::get('gets_position', [PositionController::class, 'get_position']);
});

Route::group([
    'prefix' => 'course_route'

], function(){
    Route::post('input_course', [CourseController::class, 'register_course']);
    Route::get('gets_course', [CourseController::class, 'get_course']);
});

Route::group([
    'prefix' => 'dept_route'

], function(){
    Route::post('input_dept', [DepartmentController::class, 'register_department']);
    Route::get('gets_dept', [DepartmentController::class, 'get_department']);
});

Route::group([
    'prefix' => 'degree_route'

], function(){
    Route::post('input_degree', [DegreeController::class, 'register_degree']);
    Route::get('gets_degree', [DegreeController::class, 'get_degree']);

});

Route::group([
    'prefix' => 'user_route'
], function(){

            //http/localhost/user_route/register
                    //in_insomnie                         //function in controller
        Route::post('register_new_user', [UserController::Class, 'register_user']);

        Route::put('update_user_by_id', [UserController::Class, 'update_user']);
        Route::delete('delete_user_by_id', [UserController::Class, 'delete_user']);
        Route::post('login', [UserController::Class, 'login_user']);

        Route::group(['middleware' => 'auth:sanctum'], function (){
        Route::get('get_all_users', [UserController::Class, 'get_users']);
        });
        Route::get('me', [UserController::Class, 'get_me']);

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// End here



Route::group([
    'prefix' => 'empPayroll_route'

], function(){
    Route::post('create_empPayroll', [EmpPayrollController::class, 'register_empPayroll']);
    Route::get('get_empPayrolls', [EmpPayrollController::class, 'get_all_empPayroll']);

});








