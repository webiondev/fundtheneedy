<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Notifications\NewMessage;
use Intervention\Image\Facades\Image;

use Illuminate\Auth\Events\Registered;

use App\Mail\EmailVerification;
use App\Jobs\SendVerificationEmail;
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


          $request= Request::capture();  // This gives you the current

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
            'email_token' => base64_encode($data['email']),
            //'file'=>$file[1],
            'file'=>$file,

        ]);




        Mail::send(['html'=>'email'], ['title' => __('global.welcome'), 'content' => __('global.welcome_to')], function ($message)  use($data)
        {

            $message->from('support@fundtheneedy.com', 'Fundtheneedy');
            $message->subject(__('global.reg_success'));
            $message->to($data['email']);

        });
        //
        


      //   if ($data['type'] == 'Seeker') {
      //
      //   $user = User::where("type","giver")->whereNull('deleted_at')->get();
      //
      //
      //
      //   foreach($user as $user_)
      //   {
      //   //
      //   //
      //
      //     Mail::send('email', ['title' => __('global.new_seeker'), 'content' => __('global.new_seeker2')], function ($message)  use($user_)
      //      {
      //
      //          $message->from('support@fundtheneedy.com', 'Fundtheneedy');
      //          $message->subject(__('global.new_seeker'));
      //          $message->to($user_->email); //myemail@gmail.com
      //
      //
      //   });
      //
      //  }
      // }


    Mail::send('email', ['title' => 'New Registration', 'content' => 'You have a new registration'], function ($message)  use($data)
        {

            //$message->from('support@fundtheneedy.com', 'Fundtheneedy');
            $message->subject('Fundtheneedy Registration Success');
            $message->to('support@fundtheneedy.com');

        });





           return $newUser;
    }


    public function register(Request $request)
{
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        dispatch(new SendVerificationEmail($user));
        return view('verification');
        }
        /**
        * Handle a registration request for the application.
        *
        * @param $token
        * @return \Illuminate\Http\Response
        */
        public function verify($token)
        {
        $user = User::where('email_token',$token)->first();
        $user->verified = 1;
        if($user->save()){


        return view('emailconfirmed',['user'=>$user]);
        }




}
}
