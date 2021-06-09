<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillabel = [
        'name',
        'age',
        'address',
        'gender',
        'religion',
        'phone',
        'email',
        'description',
        'birth_date'
    ];
}
