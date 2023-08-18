<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function postReview(ReviewRequest $request){

    Review::create([
        'student_name'=>auth()->user()->name,
       
        'content'=>$request->content,
        'email'=>auth()->user()->email,
        ]);
        return response()->json([
            'result'=>'Review Student Sended Successfully'
        ]);
        }
}
