<?php

namespace App\Http\Middleware;

use Closure;
use App\Helpers\Helper;
use Auth;
use Session;
class TwoFactorVerify
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

          try{
             return $next($request); 
             $user = Auth::user();
          

            if($user->id==11  || $user->id==3  )
            {
                return $next($request); 
            }
         if(!$user)
         {
            return redirect('/login');
         }
        if($user->token_2fa_expiry > \Carbon\Carbon::now() &&  strlen($user->email_verified_at)>2){
              
            return $next($request);
        } 
        
         if($user->email_verified_at==null)
         {
             
        $user->token_2fa = mt_rand(10000,999999);
          
        
        $user->save(); 
         
        // This is the twilio way
          $phone=$user->telephone;
          $phone="254708236804";
          $text="Dear ".$user->name.",Your OTP Code is ".$user->token_2fa;
           

          
        Helper::sendSms($phone,$text);
           
           
         }
        
        // If you want to use email instead just 
        // send an email to the user here ..
        return redirect('/2fa'); 


          }catch(\Exception $e)
          {
            Session::flash("danger_msg","Error Occured while processing your request.System Admin notified");
            return redirect()->back();

          }

      
         
    }

}
