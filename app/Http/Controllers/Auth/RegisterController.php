<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Request;
use Request as Req;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Notifications\NewMessage;
use Intervention\Image\Facades\Image;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:1000',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'city'=>'required|string|max:255',
            'country'=>'required|string|max:255',
            'type'=>'required',
            'occupation'=>'required|string|max:255',
            'file' => 'required | image|max:1000',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    public function uploadfile(){

        
          $request= Req::capture();  // This gives you the current 

         //    //get file
            // $file =  $request->file('file')->store("public"); 
          
            // return $file;

         $file =$request->file('file');      
    
            $filename = time() . '.' . $file->getClientOriginalExtension();
                $location = public_path('img/'. $filename);
                $file=Image::make($file)->resize(128,128)->save($location);

                $file->file = $filename;
                //$file->save();  
                return $file->file;
        }
 
    protected function create(array $data)
    {
        $file=$this->uploadfile();
           
          
        //$file=explode("/", $file);
        $newUser= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'city'=> $data['city'],
            'country'=>$data['country'],
            'type'=>$data['type'],
            'occupation'=>$data['occupation'],
            //'file'=>$file[1],
            'file'=>$file,
            
        ]);

        Mail::send('emails', ['title' => 'Welcome', 'content' => 'Welcome to Fundtheneedy!', function ($message)
        {

            $message->from('support@fundtheneedy.com', 'Fundtheneedy');

            $message->to($newUser['email']);

        });
    //     $message="Welcome to Fundtheneedy!";
    //        Mail::send('newUser', function($message){
    //     $message->from('support@fundtheneedy.com');
    //     $message->subject('welcome');
    //     $message->to($newUser['email']);
    // });


           return $newUser;
    }

}
