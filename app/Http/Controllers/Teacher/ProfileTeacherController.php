<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Http\Requests\ProfileRequest;

class ProfileTeacherController extends Controller
{

       public function updateProfile(Request $request){

        $teacher=Teacher::where('id', auth('teacher')->user()->id);
         // update password
        if(!empty($request->name)){
        $teacher->update([
        'name'=>$request->name,
        ]);
          return response()->json([
            'result'=>'Name Teacher Updated Successfully'
        ]);
        }
        // update email
        if(!empty($request->email)){
         $teacher->update([
        'email'=>$request->email,
        ]);
        return response()->json([
                'result'=>'Email Teacher Updated Successfully'
            ]);

        }

         // update email
         if(!empty($request->password)){
                $teacher->update([
               'password'=>$request->password,
               ]);
               return response()->json([
                       'result'=>'Password Teacher Updated Successfully'
                   ]);
       
               }

        if(!empty($request->name) && !empty($request->email) && !empty($request->password) ){
        $teacher->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>\Hash::make($request->password),
        ]);
        return response()->json([
                'result'=>'Personal Data  Teacher Updated Successfully'
            ]);


        }
       




        }

}
