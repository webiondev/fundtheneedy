<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Closure;
use Redirect;
// use Session;
// use Config;
// use App;
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



        if($request->is('seeker') and auth()->user()->type=='seeker')

              return Redirect::to('404');

        elseif($request->is('seekfund') and auth()->user()->type=='giver')


           return Redirect::to('404');

        elseif($request->is('thisdonationdetails') and auth()->user()->type=='giver')


           return Redirect::to('404');

         elseif($request->is('mydonations') and auth()->user()->type=='seeker')


           return Redirect::to('404');

        elseif($request->is('myplea') and auth()->user()->type=='giver')


           return Redirect::to('404');

         elseif($request->is('donorall') and auth()->user()->type=='giver')


           return Redirect::to('404');



        return $next($request);
    }
}
