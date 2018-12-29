<?php

namespace App\Http\Controllers;
use App\Corroborate;
use App\Need;
use App\User;
use App\Message;
use App\Donation;
use App\Favorite;
use App\Stat;

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
class AdminController extends Controller
{

    function welcome_Admin(){

      return view ('welcome_Admin');
    }

    function alldonations(){

      $data=DB::table('users')
          ->join('need', 'users.id', '=', 'need.user_id')
          ->join('donation', 'donation.need_id', '=', 'need.id')->select('users.*','need.*', 'donation.donated_for','donation.amount', 'donation.quantity','need.currency', 'donation.date')

          ->get();
      return view('mydonation')->with('data',$data);
    }

    function allmessages(){

      $messages=User::join('message', 'users.id', '=', 'message.from')

          ->select('users.id','users.file','users.name','users.email','users.city','users.country','users.occupation', 'message.*')->whereNull('message.deleted_at')->orderBy('created_at','DESC')
          ->get();
      return view('allmessages')->with('data', $messages);
    }
}
