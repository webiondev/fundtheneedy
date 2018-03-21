<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\User;

class WelcomeController extends Controller
{
    public function exabout(){

    	
        return view('exabout');
    }

     public function exvision(){

    	
        return view('exvision');
    }
     public function excontact(){

    	
        return view('excontact');
    }

    public function exterm(){

        
        return view('exterms');
    }

    public function exreport(){

        
        return view('exreport');
    }
    public function sendexreport(Request $request){



        Mail::send('email', ['title' => 'Complaint', 'content' => $request->complaint], function ($message)  use ($request)
        {

            $message->from('support@fundtheneedy.com','fundtheneedy');
            $message->subject($request->subject);
            $message->to($request->email, $request->name);

        });

        return redirect()->back()->with('message', 'message send success');
    }
}
