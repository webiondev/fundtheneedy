<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Seeker
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
      if (Auth::check()==true and auth()->user()->type=='seeker')
         return $next($request);

    return redirect(404);
    }
}
