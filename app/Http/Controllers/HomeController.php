<?php

namespace App\Http\Controllers;

use App\Need;
use App\User;
use Validator;
use Input;
use Redirect;
use Auth;
use Hash;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

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
        return view('update');
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
        return view('profile_me');
    }

      public function fav()
    {
        return view('fav');
    }
      public function message()
    {
        return view('message');
    }

     public function seeker()

    {
        

       $data = User::join('need', 'users.id', '=', 'need.user_id')
       
        ->select('users.id','users.name','users.email','users.city','users.country','users.occupation', 'need.*')
        ->get();
         return view('seeker')->with('data',$data) ;
    }

    public function test($id){

        return view('test')->with('id', $id);

    }

    //   public function showall()
    // {

    //      $data=Need::all();   
    //      return view('seeker')->with('data',$data) ;
    // }

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

            $notification = array(
            'message' => 'Plea added success!', 
            'alert-type' => 'success'
        );
            $validated=$request->validate( [
            'description' => 'required|string|max:255',
            'category' => 'required',
            'deadline' => 'required|date',
            'verify'=>'required',
            'file' => 'required | image | min:400|max:1260',


        ]);

           $file = $request->file('file')->store("public");
           $file=explode("/", $file);

           $need=new Need;
           $need->fill($validated);
           $need->fill(['user_id'=> \Auth::user()->id]);
           $need->fill(['file'=>$file[1]]);
           
           if($need->save()) {

           return Redirect::to('listplea')->with($notification);

      }
        

    }

    public function listplea(){//once seeker adds his plea

        $data=Need::where('user_id', '=', auth()->user()->id)->get();

        return view ('myplea')->with('data', $data);
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
