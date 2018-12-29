<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\iplogs;
use URL;
//use Location;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

      public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login (Request $request){

        $ip=  $request->getClientIp();
        $iplog=new iplogs();
         $refer= URL::previous();



        if (Auth::attempt(['name' => $request->username, 'password' => $request->password])) {


        echo "success with username!";
}

elseif (Auth::attempt(['email'=> $request->username, 'password' => $request->password])) {
                    //set login status
$iplog->fill(['logged_in'=>1,'ipaddress'=>$ip, 'refer'=>$refer,'user_id'=>Auth::user()->id ]);

        $iplog->save();


        if(auth()->user()->type=='seeker'){


            return redirect()->route('seekfund');
        }
        else if(auth()->user()->type=='giver'){//giver

            return redirect()->route('seeker');
}

        else if(auth()->user()->type=='admin'){

          return redirect()->route('welcome_Admin');
        }

}


else {
       // \Session::flash('message', "email/password wrong");
       //  return redirect()->route;

    return redirect('login')->with('message', __('validation.credentials'));

}
    }

    //getIP




}
