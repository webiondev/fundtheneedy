<?php

namespace App\Http\Controllers;

use App\Corroborate;
use App\Need;
use App\User;
use App\Message;
use App\Donation;
use App\Favorite;
use App\Stat;
use App\iplogs;
use URL;
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
use Illuminate\Support\Facades\Mail;
use App\Notifications\NewMessage;
use App\Notifications\NewDonation;
use Khill\Lavacharts\Lavacharts;

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
public function about(){


        return view('welcome');

            }



      public function vision(){


          return view('welcome');
    }
     public function contact(){


          return view('welcome');
    }

    public function term(){


         return view('welcome');
    }
    Public function index(){


        if(Auth::check()==true and auth()->user()->type=='seeker')
            return view('seekfund');
        elseif (Auth::check()==true and auth()->user()->type=='giver')
            return view('profile_me');

    }




    public function profile_me()
    {

        $user=User::where('id', '=', auth()->user()->id)->get();
        return view('profile_me')->with('user', $user);
    }

    public function searchneed(Request $request){

      //  $data=Need::search($request->top_search)->paginate(10);
        $data=User::join('need', 'users.id', '=', 'need.user_id')

           ->select('users.id','users.name','users.email','users.city','users.country','users.occupation', 'need.*')->whereNull('need.deleted_at')->where('need.category', '=', $request->top_search)->orderBy('need.created_at', 'DESC')->paginate(10);



        return view('seeker2')->with('data', $data);
    }

     public function searchmessage(Request $request){


             $data=Message::search($request->top_search)->Where('from', auth()->user()->id)->get();

             if (count($data)==0){
                $data=Message::search($request->top_search)->Where('to_', auth()->user()->id)->get();
                 return view('search_result')->with('data', $data);
             }

              return view('search_result')->with('data', $data);

        }




    public function displaythissearched($id){


          $messages=User::join('message', 'users.id', '=', 'message.from')

            ->select('users.id','users.file','users.name','users.email','users.city','users.country','users.occupation', 'message.*')->whereNull('message.deleted_at')->where('message.id', '=', $id)->get();

             if($messages[0]->to_==auth()->user()->id)
                return view('message')->with('data', $messages);

            else
                 return view('sent')->with('data', $messages);

    }

    public function editprofile(Request $request)
    {


if(($request->email==auth()->user()->email)){
        $validated=$request->validate( [
            'name' => 'sometimes|nullable|string|max:255',
            //'email' => 'sometimes|nullable|string|email|max:255|unique:users',
            'password' => 'required|string|max:12',
            'city' => 'sometimes|nullable|string|max:50',
            'country' => 'sometimes|nullable|string|max:20',
            'occupation'=>'sometimes|nullable|string|max:100',
            //'file' => 'sometimes|nullable|image|max:1000',


        ]);;

    }

    else {

           $validated=$request->validate( [
            'name' => 'sometimes|nullable|string|max:255',
            'email' => 'sometimes|nullable|string|email|max:255|unique:users',
            'password' => 'sometimes|nullable|string|max:12',
            'city' => 'sometimes|nullable|string|max:50',
            'country' => 'sometimes|nullable|string|max:20',
            'occupation'=>'sometimes|nullable|string|max:100',
            //'file' => 'sometimes|nullable|image|max:1000',


        ]);;


    }


        if(empty($request->city)){
            $validated['city']=auth()->user()->city;

        }

        if(empty($request->country)){
            $validated['country']=auth()->user()->country;

        }

        if(empty($request->occupation)){
            $validated['occupation']=auth()->user()->occupation;

        }



        try {


            if(($request->email!=auth()->user()->email) and DB::table('users')->where('id', '=', auth()->user()->id)
                ->update(array('name' => $validated['name'],'email' => $validated['email'],'password' => Hash::make($validated['password']),'city' => $validated['city'],'country' => $validated['country'],'occupation' => $validated['occupation'],
                   ))){
                $user=User::find(auth()->user()->id);
                return redirect::to('profile_me')->with('message', 'profile updated');

            }

            elseif(($request->email==auth()->user()->email) and DB::table('users')->where('id', '=', auth()->user()->id)
                ->update(array('name' => $validated['name'],'password' => Hash::make($validated['password']),'city' => $validated['city'],'country' => $validated['country'],'occupation' => $validated['occupation'],
                   ))){
                $user=User::find(auth()->user()->id);
                return redirect::to('profile_me')->with('message', 'profile updated');

            {

                    $user=User::find(auth()->user()->id);
                return redirect::to('profile_me')->with('message', 'profile updated');
            }

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




    public function editprofilepic(Request $request){

         $validated=$request->validate( [

            'file' => 'sometimes|nullable|image|max:1000',

        ]);;


            $file = $request->file('file');


            $filename = time() . '.' . $file->getClientOriginalExtension();
            $location = public_path('img/'. $filename);
            $file=Image::make($file)->resize(128,128)->save($location);

            $file->file = $filename;

            if(DB::table('users')->where('id', '=', auth()->user()->id)
                ->update(array('file'=>$file->file
                   ))){
                $user=User::find(auth()->user()->id);
                return redirect::to('profile_me')->with('message', 'profile pic updated');
            }




    }
    public function deleteProfile(Request $request, $id){

        $user=User::find($id);
        $user['email']=str_random(30);;
        $user->save();

        if ($request->isMethod('POST')){

            if($user->delete()){

                Auth::logout();
                //return Redirect::to('/');
                return response()->json(['msg' => 'Account deleted']);

            }}
        // return response()->json(['msg' => 'Account delete fail, Contact Fundtheneedy']);

    }

    public function addFav ($id1,$id2){

        $data=new Favorite;

        $data->favorite_to=auth()->user()->id;
        $data->isfavorite=$id1;
        $data->need_id=$id2;


        if(!(DB::table('favorite')->where('need_id', $id2)->where('favorite_to', auth()->user()->id)->first())) {
            if ($data->save()) {

                return redirect()->back()->with('message', __('global.added_to_fav'));

            }
        }

        else
            return redirect()->back()->with('message', __('global.already_added'));


    }

    public function listfav()
    {


        $data=DB::table('users')
            ->join('need', 'users.id', '=', 'need.user_id')
            ->join('favorite', 'favorite.need_id', '=', 'need.id')->select('users.name','users.email','users.city','users.country','users.occupation','users.type','need.*', 'favorite.created_at')->
            where('favorite.favorite_to', auth()->user()->id)->whereNull('favorite.deleted_at')
            ->paginate(10);


        return view('fav')->with('data',$data);
    }

    public function remfav ($id){

         $data=Favorite::where('need_id', $id);

          if ($data->delete())

             return  redirect()->back()->with('message', 'removed from favorite!');

    }

    public function listmessage()
    {
        $messages=User::join('message', 'users.id', '=', 'message.from')

            ->select('users.id','users.file','users.name','users.email','users.city','users.country','users.occupation', 'message.*')->whereNull('message.deleted_at')->where('to_', '=', auth()->user()->id)->orwhere('from', '=', auth()->user()->id)->orderBy('created_at','DESC')
            ->get();
        return view('message')->with('data', $messages);

    }

    public function listsent()
    {
        $messages=User::join('message', 'users.id', '=', 'message.from')

            ->select('users.id','users.file','users.name','users.email','users.city','users.country','users.occupation', 'message.*')->whereNull('message.deleted_at')->where('message.from', '=', auth()->user()->id)->orderBy('created_at', 'DESC')
            ->get();
        return view('sent')->with('data', $messages);

    }


    public function deletemessage($id){

        $msg=Message::find($id);

        if($msg->delete()){
        $count=Message::where('to_', "=", auth()->user()->id)->whereNull('message.deleted_at')->where('status', '=', '0')->count();
        if($count>0)
            Session::put('count', ($count-1));
        return redirect()->back()->with('message', 'message deleted');

        }

    }

    public function reply($id1,$id2,$id4,$id3)//id, from, created_at

    {
        //reduce count by 1
        $update=Message::find($id1);

        $update->status='1';

        if( $update->save()){
            $count=Message::where('to_', "=", auth()->user()->id)->where('status', '=', '0')->count();


            Session::put('count', $count);
        }

        $root=DB::table('message')->where('created_at', '=',$id3)->where('id', '=', $id1)->get();

        $message=User::join('message', 'users.id', '=', 'message.from')

            ->select('users.id','users.file','users.name','users.email','users.city','users.country','users.occupation', 'message.*')->Where('message_root', '=', $root[0]->message_root)->orderBy('created_at','DESC')->get();
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
                'need_id'=>$request->need_id,
                'message_root'=>$request->root]
        );

        $user=User::find($to_);


        if($message->save()){
             $lastInsertedId = $message->id;
            $message_new=Message::find($lastInsertedId);

            $user->notify(new NewMessage($message_new));
            return redirect()->back()->with('message', 'message sent');

    }}

    public function seeker()

    {

        $count=Message::where('to_', "=", auth()->user()->id)->whereNull('message.deleted_at')->where('status', '=', '0')->count();
        Session::put('count', $count);



        $data = User::join('need', 'users.id', '=', 'need.user_id')

            ->select('users.id','users.name','users.email','users.city','users.country','users.occupation', 'need.*')->whereNull('need.deleted_at')->orderBy('need.created_at', 'DESC')->where('amount','>',0)->orwhere('goods','>','0')->paginate(10);




        return view('seeker2')->with('data',$data) ;
    }

    public function otherseekers()

    {

        $count=Message::where('to_', "=", auth()->user()->id)->whereNull('message.deleted_at')->where('status', '=', '0')->count();
        Session::put('count', $count);



        $data = User::join('need', 'users.id', '=', 'need.user_id')

            ->select('users.id','users.name','users.email','users.city','users.country','users.occupation', 'need.*')->whereNull('need.deleted_at')->orderBy('need.created_at', 'DESC')->where('amount','>',0)->orwhere('goods','>','0')->paginate(10);




        return view('seeker2')->with('data',$data) ;
    }

    public function profileThis($id){



        $data=DB::table('users')
            ->join('need', function($join) use ($id)
            {
                $join->on('users.id', '=', 'need.user_id')
                    ->where('need.id', '=', $id);
            })
            ->get();

        $count_corroboration=DB::table('corroborate')->where('need_id', $id)->groupBy('need_id')->count();

        return view('profile_this')->with('data', array($data, $count_corroboration));

    }

    public function seeker_profile_this($id){



        $data=DB::table('users')
            ->join('need', function($join) use ($id)
            {
                $join->on('users.id', '=', 'need.user_id')
                    ->where('need.id', '=', $id);
            })
            ->get();

        $count_corroboration=DB::table('corroborate')->where('need_id', $id)->groupBy('need_id')->count();

        return view('seeker_profile_this')->with('data', array($data, $count_corroboration));

    }
    public function askseekeracc($id1,$id2){


        $message=new Message;


        $message->fill(['from'=>auth()->user()->id,
            'to_'=>$id1,
            'message'=>__('global.ask_bank_message'),
            'need_id'=>$id2
        ]);
        $message->save();
        $lastInsertedId = $message->id;
        $message->message_root=$lastInsertedId;
        //  $user=User::find($id1);




        if($message->save()){


             $user=User::find($id1);
            $message_new=Message::find($lastInsertedId);

            $user->notify(new NewMessage($message_new));
            return redirect()->back()->with('message', 'message sent');
        }
    }

    public function askseekerinfo($id1,$id2){


        $message=new Message;


        $message->fill(['from'=>auth()->user()->id,
            'to_'=>$id1,
            'message'=>__('global.ask_info'),
            'need_id'=>$id2
        ]);
        $message->save();
        $lastInsertedId = $message->id;
        $message->message_root=$lastInsertedId;
        if($message->save()){
             $user=User::find($id1);
            $message_new=Message::find($lastInsertedId);

            $user->notify(new NewMessage($message_new));
            return redirect()->back()->with('message', 'message sent');
        }

    }

    public function askseekerver($id1,$id2){


        $message=new Message;


        $message->fill(['from'=>auth()->user()->id,
                'to_'=>$id1,
                'message'=>__('global.verify_msg').auth()->user()->email,
                'need_id'=>$id2,]
        );
        $message->save();
        $lastInsertedId = $message->id;
        $message->message_root=$lastInsertedId;
        if($message->save()){

             $user=User::find($id1);
            $message_new=Message::find($lastInsertedId);

            $user->notify(new NewMessage($message_new));
            return redirect()->back()->with('message', 'message sent');
}

    }

    public function confirmdonation($id){



        $data=DB::table('users')
            ->join('need', function($join) use ($id)
            {
                $join->on('users.id', '=', 'need.user_id')
                    ->where('need.id', '=', $id);
            })
            ->get();




        return view('confirmed_donation')->with('data', $data);



    }



    public function confirmingdonation(Request $request){


        $validated=$request->validate( [
            'amount' => 'Numeric',
            'quantity' => 'Integer',
            'date' => 'required|date',
            'file' => 'required|image|max:1000',


        ]);



        $file = $request->file('file');


        $filename = time() . '.' . $file->getClientOriginalExtension();
        $location = public_path('img/'. $filename);
        $file=Image::make($file)->resize(350,350)->save($location);

        $file->file = $filename;

        //get amount
        if(!empty($validated['quantity'])) {
            $q=DB::table('need')->select('goods')->where('id', '=',$request->need_id)->get();
            if($q[0]->goods<$validated['quantity']){

                $update=DB::table('need')->where('id', '=', $request->need_id)
                    ->update(array('goods' => '0'));
            }
            else

                $update=DB::table('need')->where('id', '=', $request->need_id)
                    ->update(array('goods' => (($q[0]->goods)-$validated['quantity'])));
        }

        elseif(!empty($validated['amount'])){
            $q=DB::table('need')->select('amount')->where('id', '=',$request->need_id)->get();
            if($q[0]->amount<$validated['amount']){

                $update=DB::table('need')->where('id', '=', $request->need_id)
                    ->update(array('amount' => '0'));
            }
            else


                $update=DB::table('need')->where('id', '=', $request->need_id)
                    ->update(array('amount' => (($q[0]->amount)-$validated['amount'])));
        }

        $donation=new Donation;


        $donation->fill($validated);
        $donation->fill(['donated_by'=> \Auth::user()->id]);
        $donation->fill(['donated_for'=>$request->user_id]);
        $donation->fill(['need_id'=>$request->need_id]);
        $donation->fill(['file'=>$file->file]);

        $donated_id=$request->user_id;
         $user=User::find($donated_id);
        if($donation->save()) {

            $lastInsertedId = $donation->id;
            $donation_new=Donation::find($lastInsertedId);

            $user->notify(new NewDonation($donation_new));

            return redirect()->back()->with('message', 'Confirmed!');

        }

        else{

            return redirect()->back()->with('message', 'something went wrong!! Enter correct fields.');
        }


    }

    public function corroborate($id1,$id2){

        $data=new Corroborate;

        $data->corroborate_by=auth()->user()->id;
        $data->corroborate_for=$id1;
        $data->need_id=$id2;
        $data->date=date("Y-m-d");



        if(!(DB::table('corroborate')->where('need_id', $id2)->where('corroborate_by', auth()->user()->id)->first())) {
            if ($data->save()) {


            $user=User::find($id1);

        Mail::send('email', ['title' => 'Verification', 'content' => 'You have been verified by a user'], function ($message)  use ($user)
        {

            $message->from('support@fundtheneedy.com', 'Fundtheneedy');
            $message->subject('You have been verified');
            $message->to($user['email']);

        });

                return redirect()->back()->with('message', 'You have corroborated this claim');

            }
        }

        else
            return redirect()->back()->with('message', 'You have already corroborated this claim');


    }

    public function corroborate_count($id){


        $data=User::join('corroborate', 'users.id', '=', 'corroborate_by')

            ->select('users.name','users.city','users.country','users.file', 'users.email','users.type', 'users.occupation', 'corroborate.date')->where('need_id', '=', $id)->get();

        return view('listcorroboration')->with('data', $data);

    }

    public function corroborate_count_seeker($id){


        $data=User::join('corroborate', 'users.id', '=', 'corroborate_by')

            ->select('users.name','users.city','users.country','users.file', 'users.email','users.type', 'users.occupation', 'corroborate.date')->where('need_id', '=', $id)->get();

        return view('listcorroboration')->with('data', $data);

    }

    public function showlocal(Request $request)

    {

        $data = User::join('need', 'users.id', '=', 'need.user_id')

            ->select('users.id','users.name','users.email','users.city','users.country','users.occupation', 'need.*') ->where('country', '=', $request->country)->whereNull('need.deleted_at')->orderBy('need.created_at', 'DESC')->where('amount','>',0)->orwhere('goods','>','0')
            ->get();



        if(empty($data[0]))
           return  redirect()->back()->with('message', __('global.no_seekers_found').' '.$request->country);

        else
             //return  redirect()->back()->with('data',$data);
            return view('showlocal')->with('data',$data) ;
    }

    public function showlocalseeker(Request $request)

    {

        $data = User::join('need', 'users.id', '=', 'need.user_id')

            ->select('users.id','users.name','users.email','users.city','users.country','users.occupation', 'need.*') ->where('country', '=', $request->country)->whereNull('need.deleted_at')->orderBy('need.created_at', 'DESC')->where('amount','>',0)->orwhere('goods','>','0')
            ->get();

//dd($data);

        if(empty($data[0]))
           return  redirect()->back()->with('message', __('global.no_seekers_found').' '.$request->country);

        else
             //return  redirect()->back()->with('data',$data);
            return view('showlocalseeker')->with('data',$data) ;
    }

    public function showcategoryseeker(Request $request)

    {

        $data = User::join('need', 'users.id', '=', 'need.user_id')

            ->select('users.id','users.name','users.email','users.city','users.country','users.occupation', 'need.*') ->where('category', '=', $request->category)->whereNull('need.deleted_at')->orderBy('need.created_at', 'DESC')->where('amount','>',0)->orwhere('goods','>','0')
            ->get();



        if(empty($data[0]))
           return  redirect()->back()->with('message', __('global.no_category_found').' '.$request->category);

        else
             //return  redirect()->back()->with('data',$data);
            return view('showcategoryseeker')->with('data',$data) ;
    }

    public function showcategory(Request $request)

    {

        $data = User::join('need', 'users.id', '=', 'need.user_id')

            ->select('users.id','users.name','users.email','users.city','users.country','users.occupation', 'need.*') ->where('category', '=', $request->category)->whereNull('need.deleted_at')->orderBy('need.created_at', 'DESC')->where('amount','>',0)->orwhere('goods','>','0')
            ->get();



        if(empty($data[0]))
           return  redirect()->back()->with('message', __('global.no_category_found').' '.$request->category);

        else
             //return  redirect()->back()->with('data',$data);
            return view('showcategory')->with('data',$data) ;
    }


      public function showfavlocal(Request $request)

    {

         $data=DB::table('users')
            ->join('need', 'users.id', '=', 'need.user_id')
            ->join('favorite', 'favorite.need_id', '=', 'need.id')->select('users.name','users.email','users.city','users.country','users.occupation','users.type','need.*', 'favorite.created_at')->
            where('favorite.favorite_to', auth()->user()->id)->whereNull('favorite.deleted_at')->where('country', '=', $request->country)
            ->paginate(10);



        if(empty($data[0]))
           return  redirect()->back()->with('message', 'No seekers found in'.' '.$request->country);

        else
             //return  redirect()->back()->with('data',$data);
            return view('fav')->with('data',$data) ;
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
            'amount'=>'Numeric|min:1',
            'currency'=>'string',
            'goods'=>'Integer|min:1',
            'file' => 'required |image|max:1024',


        ]);

        $search=DB::table('need')->where('user_id', auth()->user()->id)->Where('category', $validated['category'])->where('deleted_at',NULL)->get();


        $file = $request->file('file');

      if(!empty($search[0]))
          return redirect()->back()->with('message', 'You have already added a similar plea! Try selecting a different category with different description');



      else{
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






    }

    public function listplea(){//once seeker adds his plea

    $data=Need::where('user_id', '=', auth()->user()->id)->whereNull('need.deleted_at')->paginate(3);

        return view ('myplea')->with('data', $data);
    }

    public function givecorroboratecount($id){


        Session::put('seeker_corroborate_count', 5);
        return redirect()->back();
}

    public function listdonor(){

         $data=DB::table('users')
            //->join('need', 'users.id', '=', 'need.user_id')
            ->join('donation', 'donation.donated_by', '=', 'users.id')->select('users.*', 'donation.donated_by','donation.amount', 'donation.quantity','donation.file as proof' , 'donation.date', 'donation.need_id')->
            where('donation.donated_for', auth()->user()->id)
            ->paginate(10);

        return view('mydonor')->with('data',$data);

    }

    public function thisdonationdetails($id){


        $data=DB::table('users')
            ->join('need', function($join) use ($id)
            {
                $join->on('users.id', '=', 'need.user_id')
                    ->where('need.id', '=', $id);
            })
            ->get();

        $count_corroboration=DB::table('corroborate')->where('need_id', $id)->groupBy('need_id')->count();



        return view('listthisdonation')->with('data', array($data, $count_corroboration));
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






    public function listgiverdonation()

    {


        $data=DB::table('users')
            ->join('need', 'users.id', '=', 'need.user_id')
            ->join('donation', 'donation.need_id', '=', 'need.id')->select('users.*','need.*', 'donation.donated_for','donation.amount', 'donation.quantity','need.currency', 'donation.date')->
            where('donation.donated_by', auth()->user()->id)
            ->get();
        return view('mydonation')->with('data',$data);
    }



    // public function test(Request $request){


    //     return view('test')->with('data', $data);
    // }

      public function report(){


        return view('report');
    }
      public function sendreport(Request $request){



        Mail::send('email', ['title' => 'Complaint', 'content' => $request->complaint], function ($message)  use ($request)
        {


            $message->replyTo($request->email, $request->name);
            $message->subject($request->subject);
            $message->to('support@fundtheneedy.com', 'fundtheneedy');

        });

        return redirect()->back()->with('message', 'message send success');
    }

    public function stat(){


       $data = DB::table('need')
   ->select(DB::raw('count(distinct(user_id)), category'))

   ->groupBy('category')
   ->get();
   // $data=User::select("country as 0", "id as 1")->get()->toArray();
   //  $lava=new Lavacharts;
   //  $needstat=$lava->DataTable();
   //  $needstat->addStringColumn("Need")
   //            ->addNumberColumn("Category1")
   //            ->addNumberColumn("Category2")
   //            ->addRows($data);
   //            $lava->GeoChart("National Need Stat", $needstat);


            return view('needstat')->with('data',$data);
     }

   public function pay_card($id){


         $data = User::join('need', 'users.id', '=', 'need.user_id')

            ->select('users.id','users.name','users.email','users.file','users.city','users.country','users.occupation', 'need.*')->where('need.id', $id)->get();

        return view('payment')->with('data', $data);
                   }


    public function log_out(Request $request){
      $ip=  $request->getClientIp();
      $iplog=new iplogs();
      $refer= URL::previous();
      $iplog->fill(['logged_in'=>0,'ipaddress'=>$ip, 'refer'=>$refer,'user_id'=>Auth::user()->id ]);

        $iplog->save();
         Auth::guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        // $this->performLogout($request);


       return redirect('/');
    }
}
