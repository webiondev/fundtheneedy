<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Giver
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

      if(Auth::check()==true and auth()->user()->type=='giver')
               return $next($request);
        return redirect(404);
    }
}
