<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class StudentController extends Controller
{
   // USER LOGIN API - POST
   public function login(Request $request)
   {
       // validation
       $request->validate([
           "email" => "required|email",
           "password" => "required"
       ]);
// verify user + token
       if (!$token = auth()->guard('student')->attempt(["email" => $request->email, "password" => $request->password])) {
         return response()->json([
               "status" => 0,
               "message" => "Invalid credentials"
           ]);
       }
// send response
       return response()->json([
           "status" => 1,
           "message" => "Logged in successfully",
           "access_token" => $token
       ]);
   }
// USER PROFILE API - GET
   public function profile()
   {
       $student_data= auth()->guard('student')->user();
      return response()->json([
           "status" => 1,
           "message" => "student profile data",
           "data" => $student_data
       ]);
   }
// USER LOGOUT API - GET
   public function logout()
   {
       auth()->guard('student')->logout();
      return response()->json([
           "status" => 1,
           "message" => "Student logged out"
       ]);
   }
}
