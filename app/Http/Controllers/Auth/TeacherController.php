<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class TeacherController extends Controller
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
       if (!$token = auth()->guard('teacher')->attempt(["email" => $request->email, "password" => $request->password])) {
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
       $teacher_data= auth()->guard('teacher')->user();
      return response()->json([
           "status" => 1,
           "message" => "teacher profile data",
           "data" => $teacher_data
       ]);
   }
// USER LOGOUT API - GET
   public function logout()
   {
       auth()->guard('teacher')->logout();
      return response()->json([
           "status" => 1,
           "message" => "Teacher logged out"
       ]);
   }
}