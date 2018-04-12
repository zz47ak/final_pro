<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'name' => 'required|alpha',
            'email' => 'required|email',
            'regno' => 'required|numeric|digits:8',
            'mob'  => 'required|numeric|digits:10',
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
    public function getMessages(){
        $messages = Message::all();
        return view('registrations')->with('messages',$messages);
    }
}
