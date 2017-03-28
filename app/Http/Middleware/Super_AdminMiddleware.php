<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class Super_AdminMiddleware
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
        //1. user(super admin) should be authenticated
        //2. authenticated user should be super admin.
        if(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug =='super_admin')
        return $next($request);
        else
            return redirect('/');
    }
}
