<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\User;
class StudentAdminController extends Controller
{

    public function create()
    {
        $courses=Course::all();
        $teachers=Teacher::all();
        return response()->json([
            'courses'=>$courses ,
            'teachers'=>$teachers ,

        ]);  
               
    }

    public function store(Request $request)
    {
       
     
        $student=\DB::table('users')->insert([
            'name'=>$request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password)
           ]);
        $student_id=\DB::table('users')->latest('id')->first();
  ////////////////////////////////////////////////////////////////////////////
        // $teachers=Teacher::get();
        // foreach ($teachers as $teacher) {
        //     # code...
        // }
////////////////////////////////////////////////////////////////////////////
        Course::create([
        'name'=>$request->name,
        'teacher_id'=>$request->teacher_id, 
        'student_id'=> $student_id->id,
        'price'=>$request->price,
        'discount'=> 0,
        ]);
  //////////////////////////////////////////////////////////////////////////// 
        return response()->json([
        'result'=>'Student Created Successfully'
        ]);
   
               
    }


}
