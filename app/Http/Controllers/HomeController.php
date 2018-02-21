<?php

namespace App\Http\Controllers;

use App\Need;
use App\User;
use App\Message;
use Validator;
use Input;
use Redirect;
use Auth;
use Hash;
use Session;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

   
    public function index()
    {
        $count=Message::where('to_', "=", auth()->user()->id)->where('status', '=', '0')->count();
        Session::put('count', $count);
        return view('update')->with('count_',$count);
    }

    public function seekerthis($id)//same as listplea but return with user name and need table data
    {


        //  DB::table('need')
        //             ->select('users.id','users.name','users.email')
        //             ->leftJoin('students','users.id','=','students.user_id')
        //             ->where('students.course_id','=',$id)
        //             ->get();

        // return view('seekerthis')->with();
    }
     public function profile_me()
    {

        $user=User::where('id', '=', auth()->user()->id)->get();
        return view('profile_me')->with('user', $user);
    }

     public function editprofile(Request $request)
    {

     $validated=$request->validate( [
        'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|max:12',
            'city' => 'required|string|max:20',
            'country' => 'required|string|max:20',
            'occupation'=>'required|string|max:20',
            'file' => 'required|image',


        ]);;

         $file = $request->file('file');
           // $file=explode("/", $file);


             $filename = time() . '.' . $file->getClientOriginalExtension();
            $location = public_path('img/'. $filename);
            $file=Image::make($file)->resize(128,128)->save($location);

            $file->file = $filename;
         
            try {
            if(DB::table('users')->where('id', '=', auth()->user()->id)
    ->update(array('name' => $validated['name'],'email' => $validated['email'],'password' => Hash::make($validated['password']),'city' => $validated['city'],'country' => $validated['country'],'occupation' => $validated['occupation'],
     'file' => $file->file))){
                   $user=User::find(auth()->user()->id); 
                  return redirect::to('profile_me')->with('user', $user);
              }
          }

        catch (\Illuminate\Database\QueryException $e) {
            
           $notification = array(
            'message' => 'Email already exists!', 
            'alert-type' => 'error'
        );  

           return Redirect::to('profile_me')->with($notification);

}
        }



      public function fav()
    {
        return view('fav');
    }
      public function listmessage()
    {
        $messages=Message::where('to_', "=", auth()->user()->id)->count();
        return view('message')->with('data', $messages);

    }

     public function seeker()

    {
        

       $data = User::join('need', 'users.id', '=', 'need.user_id')
       
        ->select('users.id','users.name','users.email','users.city','users.country','users.occupation', 'need.*')
        ->paginate(3);
         return view('seeker')->with('data',$data) ;
    }

    public function profileThis($id){

     

        $data=DB::table('users')
        ->join('need', function($join) use ($id)
        {   
            $join->on('users.id', '=', 'need.user_id')
                 ->where('need.id', '=', $id);
        })
        ->get();

        return view('profile_this')->with('data', $data);

    }
     public function askseekeracc($id){


        $message=new Message;

       
         $message->fill(['from'=>auth()->user()->id,
            'to_'=>$id,
            'message'=>'I am interested in helping you. please give me your bank account',
            'date'=>date('Y-m-d')]);
         if($message->save())
           return redirect()->back()->with('message', 'message sent');

    }

    public function askseekerinfo($id){


        $message=new Message;

       
         $message->fill(['from'=>auth()->user()->id,
            'to_'=>$id,
            'message'=>'I am interested in helping you. please give me your contact info',
            'date'=>date('Y-m-d')]);
         if($message->save())
           return redirect()->back()->with('message', 'message sent');

    }

     public function askseekerver($id){


        $message=new Message;

       
         $message->fill(['from'=>auth()->user()->id,
            'to_'=>$id,
            'message'=>'I am interested in helping you. please give me your claim\'s verification. You can email me '.auth()->user()->email,
            'date'=>date('Y-m-d')]);
         if($message->save())
           return redirect()->back()->with('message', 'message sent');


    }
    

    public function showlocal()
    
    {

         // $data=DB::table();   
         return view('seeker')->with('data','HHHH') ;
    }

     public function seekfund()
    {
        return view('seekfund');
    }

    public function addplea(Request $request){

        //load the messages for this user because this is the first landing page for user
         $count=Message::where('to_', "=", auth()->user()->id)->where('status', '=', '0')->count();
        Session::put('count', $count);

        //add new plea

         
            $validated=$request->validate( [
            'description' => 'required|string|max:1000',
            'category' => 'required',
            'deadline' => 'required|date',
            'verify'=>'required',
            'file' => 'required | image',


        ]);

            $file = $request->file('file');
           // $file=explode("/", $file);


             $filename = time() . '.' . $file->getClientOriginalExtension();
            $location = public_path('img/'. $filename);
            $file=Image::make($file)->resize(350,350)->save($location);

            $file->file = $filename;
           $need=new Need;
           $need->fill($validated);
           $need->fill(['user_id'=> \Auth::user()->id]);
           $need->fill(['file'=>$file->file]);
           
           if($need->save()) {

            return redirect()->back()->with('message', 'plea added!');

      }


        

    }

    public function listplea(){//once seeker adds his plea

        $data=Need::where('user_id', '=', auth()->user()->id)->paginate(3);

        return view ('myplea')->with('data', $data);
    }

    public function editthis($data){


        $data=User::join('need', 'users.id', '=', 'need.user_id')
       
        ->select('users.id','users.name','users.email','users.city','users.country','users.occupation', 'need.*')->where('category', '=', $data)->first();

         return view('editthis')->with('data',$data) ;

    }

     public function deleteplea($id){

           
            $need=Need::find($id);

            if($need->delete())

                return redirect()->back()->with('message', 'deleted');

      }


        



    public function mygift()
    
    {
        return view('mygift');
    }

        public function stat()
    {
        return view('stat');
    }
}
