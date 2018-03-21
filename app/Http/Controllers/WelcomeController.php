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

            $message->sender($request->email, $request->name);
            $message->subject($request->subject);
            $message->to('support@fundtheneedy.com', 'fundtheneedy');

        });

        return redirect()->back()->with('message', 'message send success');
    }

    public function sitemap(){

        return view('sitemap');
            }
}
