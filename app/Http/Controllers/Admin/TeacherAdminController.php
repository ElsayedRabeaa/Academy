<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
class TeacherAdminController extends Controller
{

    public function index(){
        $teachers=Teacher::all();

        return response()->json([
            'teachers'=>$teachers 
        ]);  
    }
   

}
