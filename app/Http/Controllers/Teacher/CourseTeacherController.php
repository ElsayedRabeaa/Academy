<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Course;
use App\Models\Vidoe;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseTeacherController extends Controller
{
   public function getCourses(){
    // course student
    $course_ids=Course::where('teacher_id',auth('teacher')->user()->id)->get();
     foreach ($course_ids as $course_id) {


        //course vidoe 
     $vidoes=Vidoe::where('course_id',$course_id->id)->get();
     return response()->json([
     'vidoes'=>$vidoes 
     ]);   
   
      } 
      
    }

    
}
