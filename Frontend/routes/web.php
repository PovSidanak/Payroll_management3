<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LecturerPaymentController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\HistoryController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[EmployeeController::class, 'homepage']);

Route::get('/History_payroll',[UserController::class, 'History_payroll']);
Route::get('/Payroll',[PayrollController::class, 'payroll']);
Route::get('/addmember',[UserController::class, 'addmember']);
Route::get('/Admindashboard',[UserController::class, 'Admindashboard']);
Route::get('/Employee',[EmployeeController::class, 'employee_page']);
Route::get('/PaymentHomepage',[UserController::class, 'PaymentHomepage']);
//Route::get('/History_payroll',[UserController::class, 'History_payroll']);
// Route::get('/LecturerPayment',[UserController::class, 'LecturerPayment']);
Route::get('/LecturerPayment',[LecturerPaymentController::class, 'lecturerPayment']);



Route::post('/create_employee',[EmployeeController::class, 'create_employee']);
Route::post('/create_payroll',[EmployeeController::class, 'create_payroll']);




Route::get('/login',  [UserController::class, 'loginpage']);
Route::post('/loginuser',  [UserController::class, 'login_handle']);

Route::get('/register', [UserController::class, 'registerpage']);
Route::post('/registeruser', [UserController::class, 'register']);


Route::post('/history', [PayrollController::class, 'history']);


Route::get('/payrolldata', [HistoryController::class, 'payrollhistory']);

