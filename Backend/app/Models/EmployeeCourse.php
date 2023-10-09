<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeCourse extends Model
{
    use HasFactory;
    protected $table = "employee_course";

    protected $fillable = [
        'course_id',
        'employee_id'
    ];
}
