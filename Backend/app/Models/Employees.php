<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $table = "employee";

    protected $fillable = [
        'name',
        'gender',
        'email',
        'phone',
        'position_id',
        'academic_year_id',
        'degree_id',
        'start_date',
        'department_id',
        'course_id',
        'main_salary_id',
        'hour_salary_id'
    ];

}
