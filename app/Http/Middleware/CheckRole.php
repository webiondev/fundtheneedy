<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Closure;
use Redirect;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // if($request->route()=='seeker' and auth()->user()->type=='seeker' )
 
        //     return Redirect::to('404');

        if($request->is('seeker') and auth()->user()->type=='seeker')

              return Redirect::to('404');

        elseif($request->is('seekfund') and auth()->user()->type=='giver') 

           
           return Redirect::to('404');
   
        return $next($request);
    }
}
