<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Requests\ProfileRequest;

class ProfileAdminController extends Controller
{

       public function updateProfile(Request $request){

        $user=Admin::where('id', auth('admin')->user()->id);
         // update password
        if(!empty($request->name)){
        $user->update([
        'name'=>$request->name,
        ]);
          return response()->json([
            'result'=>'Name Admin Updated Successfully'
        ]);
        }
        // update email
        if(!empty($request->email)){
         $user->update([
        'email'=>$request->email,
        ]);
        return response()->json([
                'result'=>'Email Admin Updated Successfully'
            ]);

        }

         // update email
         if(!empty($request->password)){
                $user->update([
               'password'=>$request->password,
               ]);
               return response()->json([
                       'result'=>'Password Admin Updated Successfully'
                   ]);
       
               }

        if(!empty($request->name) && !empty($request->email) && !empty($request->password) ){
        $user->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>\Hash::make($request->password),
        ]);
        return response()->json([
                'result'=>'Personal Data  Admin Updated Successfully'
            ]);


        }
       




        }

}
