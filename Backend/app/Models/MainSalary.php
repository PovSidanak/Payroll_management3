<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainSalary extends Model
{
    use HasFactory;

    protected $table = "main_salary";

    protected $fillable = [
        'position_id',
        'amount'
    ];
}
