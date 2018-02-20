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
      public function message()
    {
        return view('message');
    }

     public function seeker()

    {
        

       $data = User::join('need', 'users.id', '=', 'need.user_id')
       
        ->select('users.id','users.name','users.email','users.city','users.country','users.occupation', 'need.*')
        ->paginate(3);
         return view('seeker')->with('data',$data) ;
    }

    public function profileThis($id){

       

        // $data= User::join('need', 'users.id', '=', 'need.user_id')->select('users.id','users.name','users.email','users.city','users.country','users.occupation', 'need.*')->where('users.id','=', $id)->get();

        $data=DB::table('users')
        ->join('need', function($join)
        {   
            $join->on('users.id', '=', 'need.user_id')
                 ->where('need.id', '=', $id);
        })
        ->get();
        return view('profile_this')->with('data', $data);

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

           return Redirect::to('listplea')->with($notification);

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

            $notification = array(
            'message' => 'Plea delete success!', 
            'alert-type' => 'success'
        );
           
            $need=Need::find($id);

            if($need->delete())

                return Redirect::to('listplea')->with($notification);

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
