<?php

namespace App\Http\Controllers\Student;

use App\Models\Course;
use App\Models\Vidoe;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
   public function getCourses(){
    // course student
     $course_ids=Course::where('student_id',auth()->user()->id)->get(); 
     foreach ($course_ids as $course_id) {
         //course vidoe 
     $vidoes=Vidoe::where('course_id',$course_id->id)->get();
     if( $vidoes===true){    
     return response()->json([
     'vidoes'=>$vidoes 
     ]);  
    }
    else{
        return response()->json([
            'result'=>'غير متاح لك هده الدورة' 
            ]);  
    }

      } 
      
   
    }



    
}
