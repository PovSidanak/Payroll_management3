<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDegree extends Model
{
    use HasFactory;

    protected $table = "employee_degree";

    protected $fillable = [
        'degree_id',
        'employee_id'
    ];
}
