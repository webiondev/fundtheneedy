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

    // Public function index(){


    //  if(Auth::check()==true and auth()->user()->type=='seeker')
    //         return view('seekfund');
    //  elseif (Auth::check()==true and auth()->user()->type=='giver') 
    //     return view('test');
     
    // }
    // public function seekerthis($id)//same as listplea but return with user name and need table data
    // {


    //     //  DB::table('need')
    //     //             ->select('users.id','users.name','users.email')
    //     //             ->leftJoin('students','users.id','=','students.user_id')
    //     //             ->where('students.course_id','=',$id)
    //     //             ->get();

    //     // return view('seekerthis')->with();
    // }
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
       $messages=User::join('message', 'users.id', '=', 'message.from')
       
        ->select('users.id','users.file','users.name','users.email','users.city','users.country','users.occupation', 'message.*')->where('to_', '=', auth()->user()->id)->orwhere('from', '=', auth()->user()->id)->orderBy('created_at','DESC')
        ->paginate(10);
        return view('message')->with('data', $messages);

    }

       public function listsent()
    {
       $messages=User::join('message', 'users.id', '=', 'message.from')
       
        ->select('users.id','users.file','users.name','users.email','users.city','users.country','users.occupation', 'message.*')->where('message.from', '=', auth()->user()->id)->orderBy('created_at', 'DESC')
        ->paginate(10);
        return view('sent')->with('data', $messages);

    }


    public function deletemessage($id){

        $msg=Message::find($id);

        if($msg->delete()){

             return redirect()->back()->with('message', 'message deleted');

        }

    }

    public function reply($id1,$id2,$id3)

    {
        //reduce count by 1
        $update=Message::find($id1);

        $update->status='1';

        if( $update->save()){
            $count=Message::where('to_', "=", auth()->user()->id)->where('status', '=', '0')->count();
       

                 Session::put('count', $count);
        }
        
        $root=DB::table('message')->where('created_at', '=',$id3)->get();

         $message=User::join('message', 'users.id', '=', 'message.from')
           
            ->select('users.id','users.file','users.name','users.email','users.city','users.country','users.occupation', 'message.*')->Where('message_root', '=', $root[0]->message_root)->get();
            return view('reply')->with('id',$message);
        
    }


    public function replythis(Request $request){

        
        // $status_update=Message::find($request->id);
        // $status_update->status='1';
        // $status_update->save();

        $data=Message::where('id', '=',$request->message_id)->get();

        if(auth()->user()->id==$data[0]->from)
              $to_=$data[0]->to_;
        else 
            $to_=$data[0]->from;


        $message=new Message();
        $message->fill(['from'=>auth()->user()->id,
            'to_'=>$to_,
            'message'=>$request->message,
            
            'status'=>'0',
            'message_root'=>$request->root]
        );
        
        
        if($message->save())
            return redirect()->back()->with('message', 'message sent');

    }

     public function seeker()

    {
        
         $count=Message::where('to_', "=", auth()->user()->id)->where('status', '=', '0')->count();
        Session::put('count', $count);


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
           ]);
         $message->save();
         $lastInsertedId = $message->id;
         $message->message_root=$lastInsertedId;
         if($message->save())
            
           return redirect()->back()->with('message', 'message sent');

    }

    public function askseekerinfo($id){


        $message=new Message;

       
         $message->fill(['from'=>auth()->user()->id,
            'to_'=>$id,
            'message'=>'I am interested in helping you. please give me your contact info'
            ]);
         $message->save();
         $lastInsertedId = $message->id;
         $message->message_root=$lastInsertedId;
         if($message->save())
           return redirect()->back()->with('message', 'message sent');

    }

     public function askseekerver($id){


        $message=new Message;

       
         $message->fill(['from'=>auth()->user()->id,
            'to_'=>$id,
            'message'=>'I am interested in helping you. please give me your claim\'s verification. You can email me '.auth()->user()->email]
            );
         $message->save();
         $lastInsertedId = $message->id;
         $message->message_root=$lastInsertedId;
         if($message->save())
           return redirect()->back()->with('message', 'message sent');


    }
    
    public function confirmdonation(Request $request){


      //    $validated=$request->validate( [
      //       'description' => 'required|string|max:1000',
      //       'category' => 'required',
      //       'deadline' => 'required|date',
      //       'verify'=>'required',
      //       'medium'=>'required',
      //       'amount'=>'Numeric',
      //        'goods'=>'Integer',
      //       'file' => 'required | image',


      //   ]);
            
      //       $file = $request->file('file');


      //        $filename = time() . '.' . $file->getClientOriginalExtension();
      //       $location = public_path('img/'. $filename);
      //       $file=Image::make($file)->resize(350,350)->save($location);

      //       $file->file = $filename;
      //      $need=new Need;
      //      $need->fill($validated);
      //      $need->fill(['user_id'=> \Auth::user()->id]);
      //      $need->fill(['file'=>$file->file]);
           
      //      if($need->save()) {
      //           return redirect()->back()->with('message', 'plea added!');

      // }

      //       else{
                    
      //           return redirect()->back()->with('message', 'something went wrong!! Enter correct fields.');
      //       }


    }

    public function showlocal()
    
    {

         // $data=DB::table();   
         return view('seeker')->with('data','HHHH') ;
    }

     public function seekfund()
    {
             //load the messages for this user because this is the first landing page for user
         $count=Message::where('to_', "=", auth()->user()->id)->where('status', '=', '0')->count();
        Session::put('count', $count);

        return view('seekfund');
    }

    public function addplea(Request $request){

   
        //add new plea
            $validated=$request->validate( [
            'description' => 'required|string|max:1000',
            'category' => 'required',
            'deadline' => 'required|date',
            'verify'=>'required',
            'medium'=>'required',
            'amount'=>'Numeric',
             'goods'=>'Integer',
            'file' => 'required | image',


        ]);
            
            $file = $request->file('file');


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

            else{
                    
                return redirect()->back()->with('message', 'something went wrong!! Enter correct fields.');
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


        



    public function donation_this($id)
    
    {
        return view('donationgiver');
    }

        public function stat()
    {
        return view('stat');
    }

    public function test(Request $request){

        
       return view('test')->with('data', $data);
    }
}
