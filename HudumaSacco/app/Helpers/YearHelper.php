<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;
use Illuminate\Support\Facades\Input;
use Auth;
use Response;
use App\User;
use Session;
use Hash;
use DateTime;
use Mail;
use App\AfricasTalkingGateway;
use App\SystemModule;
use App\ProviderModule;
use Modules\Usermanagement\Entities\WorkFlow;
use Modules\Usermanagement\Entities\Role;
use Validator;
use Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Collection;
use App\Models\Message;
use App\CentralTransaction;
use App\Messaging;
use App\Profile;
use DB;
use Modules\Account\Entities\CentralPayment;
use Modules\Usermanagement\Entities\Region;
class YearHelper
{

  public static function getCurrentYear($VoteCode)
  {
    
      try{
          $procedurename="Proc_ZP_GetYearCurrent";
       
       
      $models= DB::connection("sqlsrv")->select('exec  [dbo].['.$procedurename.']@KVotesite=?',array($VoteCode) );

       return  $models;
    




      }catch(\Exception $e)
      {
       

        //Incase of an error,let it fall gracefully.
        return array();

      }

    


  }

  public static function getWorkSpaceYears($VoteCode)
  {
    try
    {
    
    $procedurename="Proc_ZP_GetYear_Workspace";
    $models= DB::connection("sqlsrv")->select('exec  [dbo].['.$procedurename.']@KVotesite=?',array($VoteCode) );

       return  $models;

    }
    catch(\Exception $e)
    {
      //Incase of an error,let it fall gracefully.
      return array();
    }
  }

}






