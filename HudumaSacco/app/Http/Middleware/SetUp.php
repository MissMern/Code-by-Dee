<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Support\Facades\Session;
class SetUp
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
           

         
       if(Auth::User()->status=="Blocked")
       {
              Auth::logout();
              Session::flash('danger_msg','Your Account has been blocked');
                 return redirect('/login');//->withErrors('Your Account has been blocked');;

               }


            if(Auth::User()->confirmed_at==null)
          {  Auth::logout();
             Session::flash('danger_msg','Your Account has not been Confirmed');
                 return redirect('/login');
          }


             if(Auth::User() && Auth::User()->hasRole(['Economist']) && (Auth::User()->profile->Process_stage== "Basic Details Entry" ) )
              {
                 
                  if(Auth::User()->hasRole(['Economist']))
                  {
                     return redirect('Economist/UserAccount/BasicDetails');
                  }
                 
                 
              }
              if(Auth::user()->HasPassword==1)
                {
                  return redirect('Admin/Password/Reset');
                }

              

         
        return $next($request);
    }
}
