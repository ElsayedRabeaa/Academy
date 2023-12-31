<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vidoe extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'item',
        'course_id',
        
    ];

    public function course(){

        return $this->belongsTo(App\Models\Course::class,'course_id');

    }
}
