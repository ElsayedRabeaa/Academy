<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
class MessageAdminController extends Controller
{
 
    public function index()
    {
        $messages=Message::get();
        return response()->json([
        'Messages'=>$Messages 
        ]);  
    }

    
    
    public function destroy(int $id)
    {
        $messages= Message::destroy($id);

        if($messages){
            return response()->json([
                'result'=>'Messages Deleted Successfully'
            ]);

        }
        else{
            return response()->json([
                'result'=>'Messages Deleted Failed'
            ]);

        }
}
}