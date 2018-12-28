<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

use App\User;
use Config;
use Session;
class WelcomeController extends Controller
{

  public function arabic(){

      \App::setLocale('ar');
      return view('/welcome');
  }

  public function english(){

      \App::setLocale('en');
      return view('/welcome');
  }
    public function exabout(){


        return view('exabout');
    }

     public function welcome_v1(){


        return view('welcome_v1');
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


        return view('welcome');
    }

       public function exhowto(){


        return view('exhowto');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:1000',
            'email' => 'required|string|email|max:255',
            'subject' => 'required|string|min:6|max:20',

            'complaint'=>'required|string|max:500',

        ]);
    }
    public function sendexreport(Request $request){
          $this->validator($request->all())->validate();
        //
        //
        // Mail::send('email', ['title' => 'Complaint', 'content' => $request->complaint], function ($message)  use ($request)
        // {
        //
        //
        //     $message->replyTo($request->email, $request->name);
        //     $message->subject($request->subject);
        //     $message->to('support@fundtheneedy.com', 'fundtheneedy');
        //
        // });

        return redirect()->back()->with('message', 'message send success');
    }

         //}


}
