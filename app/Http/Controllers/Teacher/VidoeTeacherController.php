<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Vidoe;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\VidoeRequest;
class VidoeTeacherController extends Controller
{
    public function addVidoe(VidoeRequest $request){

         if($request->hasFile('vidoe')){
            $extention=$request->vidoe->extension();
            $file_name=time().'.'.$extention;
            $request->vidoe->move($file_name,'Vidoes');
          

            $course_ids=Course::where('teacher_id',auth('teacher')->user()->id)->get();
            foreach ($course_ids as $course_id) {
                Vidoe::create([
                    'course_id'=>$course_id->id,
                    'name'=>$request->name,
                    'item'=> $file_name,
                    ]);
             } 
           
        };
            return response()->json([
                'result'=>'Vidoe Created Successfully'
            ]);

            }


            public function destroy(int $id)
            {
               $vidoe= Vidoe::destroy($id);
               if($vidoe){
               return response()->json([
                'result'=>'Vidoe Deleted Successfully'
               ]);

              }
             else{
            return response()->json([
                'result'=>'Vidoe Deleted Failed'
            ]);

        }
            }

}
