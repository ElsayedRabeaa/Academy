<?php

namespace App\Http\Controllers\Auth;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller 
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
        if (!$token = auth()->guard('admin')->attempt(["email" => $request->email, "password" => $request->password])) {
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
        $admin_data= auth()->guard('admin')->user();
       return response()->json([
            "status" => 1,
            "message" => "Admin profile data",
            "data" => $admin_data
        ]);
    }
// USER LOGOUT API - GET
    public function logout()
    {
        auth()->guard('admin')->logout();
       return response()->json([
            "status" => 1,
            "message" => "Admin logged out"
        ]);
    }
}
