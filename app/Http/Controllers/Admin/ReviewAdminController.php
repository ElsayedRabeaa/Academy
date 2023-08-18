<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
class ReviewAdminController extends Controller
{
    public function index(){
        $reviews=Review::all();

        return response()->json([
            'reviews'=>$reviews 
        ]);  
    }
   
}
