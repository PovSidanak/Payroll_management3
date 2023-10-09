<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDepartment extends Model
{
    use HasFactory;

    protected $table = "employee_department";

    protected $fillable = [
        'department_id',
        'employee_id'
    ];
}
