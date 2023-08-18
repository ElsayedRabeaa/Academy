<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{

       public function updateProfile(Request $request){

        $user=User::where('id', auth('student')->user()->id);
         // update password
        if(!empty($request->name)){
        $user->update([
        'name'=>$request->name,
        ]);
          return response()->json([
            'result'=>'Name Student Updated Successfully'
        ]);
        }
        // update email
        if(!empty($request->email)){
         $user->update([
        'email'=>$request->email,
        ]);
        return response()->json([
                'result'=>'Email Student Updated Successfully'
            ]);

        }

         // update email
         if(!empty($request->password)){
                $user->update([
               'password'=>$request->password,
               ]);
               return response()->json([
                       'result'=>'Password Student Updated Successfully'
                   ]);
       
               }

        if(!empty($request->name) && !empty($request->email) && !empty($request->password) ){
        $user->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>\Hash::make($request->password),
        ]);
        return response()->json([
                'result'=>'Personal Data  Student Updated Successfully'
            ]);


        }
       




        }

}
