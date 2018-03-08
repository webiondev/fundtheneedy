<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function exabout(){

    	
        return view('exabout');
    }

     public function exvision(){

    	
        return view('exvision');
    }
     public function excontact(){

    	
        return view('excontact');
    }

    public function exterm(){

        
        return view('exterms');
    }
}
