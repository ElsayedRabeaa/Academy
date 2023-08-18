<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function postMessage(MessageRequest $request){

        Message::create([
        'first_name'=>$request->first_name,
        'last_name'=>$request->last_name,
        'number'=>$request->number,
        'content'=>$request->content,
        'email'=>$request->email,
        ]);
        return response()->json([
            'result'=>'Message Student Sended Successfully'
        ]);
        }
   
}
// php artisan make:request MessageRequest
// php artisan make:request ProfileRequest