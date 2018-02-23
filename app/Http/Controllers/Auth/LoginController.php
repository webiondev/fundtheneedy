<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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

        if (Auth::attempt(['name' => $request->username, 'password' => $request->password])) {

        echo "success with username!";
} 

elseif (Auth::attempt(['email'=> $request->username, 'password' => $request->password])) {

        if(auth()->user()->type=='seeker')
            return redirect()->route('seekfund');
        else

            return redirect()->route('seeker');

} 


else {
       // \Session::flash('message', "email/password wrong");
       //  return redirect()->route;

    return redirect('login')->with('message', 'Email/Password Wrong!');

}
    }

}
