<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'regno' => 'required',
            'mob'  => 'required',
            'event' => 'required'
        ]);

        $message = new Message;
        $message->name =Input::get("name");
        $message->email =Input::get("email"); 
        $message->regno =Input::get("regno");
        $message->mob =Input::get("mob"); 
        $message->event =Input::get("event");
        $message->save();

        return redirect('/register')->with('success','Registration successful');
    }
}
