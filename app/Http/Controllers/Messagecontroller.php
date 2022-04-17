<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class Messagecontroller extends Controller
{

    public function contactus()
    {
        return view ("contactus");
    }

    public function getmessage( Request $request)
    {
        $num= (int) session('LoggedUser');
        $message = new Message;
        $message ->content=$request->content;
        $message ->u_id=$num;
        $saved=$message->save();

        if($saved)
        {
            return redirect('/home');
        }
        else
        {
            return back();
        }
    }
}
