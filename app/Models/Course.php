<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'student_id',
        'teacher_id',
        'price',
        'discount',
    
    ];

    public function student(){

        return $this->hasMany(App\Models\User::class,'student_id');

    }

    public function teacher(){

        return $this->hasMany(App\Models\Teacher::class,'teacher_id');

    }
}
