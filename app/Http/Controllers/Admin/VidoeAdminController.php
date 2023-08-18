<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vidoe;
class VidoeAdminController extends Controller
{
    public function index()
    {
        $Vidoes=Vidoe::get();
        return response()->json([
        'Vidoes'=>$Vidoes 
        ]);  
    }

    
    
   
}
