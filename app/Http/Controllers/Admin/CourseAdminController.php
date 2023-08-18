<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
class CourseAdminController extends Controller
{
   
    public function index()
    {
        $courses=Course::select('id','name','price','discount','teacher_id')->get();
        return response()->json([
        'courses'=>$courses 
        ]);   
      
    }

    public function update(Request $request, int $id)
    {
        $course_id=Course::findorfail($id);
        if($course_id){
            if(!empty($request->name)){
                $course_id->update([
                'name'=>$request->name,
                ]);
                  return response()->json([
                    'result'=>' Course Name Updated Successfully'
                ]);
                }

                if(!empty($request->price)){
                    $course_id->update([
                    'price'=>$request->price,
                    ]);
                      return response()->json([
                        'result'=>' Course Price Updated Successfully'
                    ]);
                    }

                    if(!empty($request->discount)){
                        $course_id->update([
                        'discount'=>$request->discount,
                        ]);
                          return response()->json([
                            'result'=>' Course Discount Updated Successfully'
                        ]);
                        }

                    if(!empty($request->teacher_id)){
                    $course_id->update([
                    'teacher_id'=>$request->teacher_id,
                    ]);
                     return response()->json([
                    'result'=>'Course teacher Updated Successfully'
                ]);
                }
        }
      
    }

    
    public function destroy(int $id)
    {
        $course= Course::destroy($id);
        if($course){
            return response()->json([
                'result'=>'Course Deleted Successfully'
            ]);

        }
        else{
            return response()->json([
                'result'=>'Course Deleted Failed'
            ]);

        }
        
    }



}
