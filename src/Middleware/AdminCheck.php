<?php

namespace shukaljasmin\jessadmin\Middleware;

use \Illuminate\Http\Request;
use Illuminate\Session\Middleware\StartSession;
use Closure;

class AdminCheck
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
        $request->session()->has('_admin_session');
        $cheack=$request->session()->has('_admin_session');
        
        $email="";
        if(isset($cheack))
        {
            $email=$request->session()->all()['_admin_session']['email'];

        }
        if ($email =="") 
        {
            return redirect('admin/');
        }

        return $next($request);
    }
}