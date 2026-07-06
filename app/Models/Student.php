<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'roll_number',
        'email',
        'phone',
        'address',
        'gender',
        'course',
        'enrollment_date',
    ];
}