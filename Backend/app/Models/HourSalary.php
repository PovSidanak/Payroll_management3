<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HourSalary extends Model
{
    use HasFactory;

    protected $table = "hour_salary";

    protected $fillable = [
        'degree_id',
        'position_id',
        'amount'
    ];
}
