<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeePayroll extends Model
{
    use HasFactory;
    protected $table = "employee_payroll";

    protected $fillable = [
        'employee_id',
        'total_hour',
        'total_hourpay',
        'project_inc',
        'total_monthly_payroll',

    ];
}
