<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'gender',
        'institution',
        'institution_reg_no',
        'image',
        'nid',
        'location',
        'dist_id',
        'reg_type',
        'level'
    ];
}
