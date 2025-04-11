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
class UPNApprovalMessages
{
    public static function getHRPayrollMessageDescription($resultID)
    {
        if($resultID == 1)
        {
            return "Staff Has Been Succesfully Integrated To Staff Register";
        }
        elseif($resultID == 2)
        {
            return "Error Integrating Staff to Staff Register. Confirm that the individual is not in your Staff Register.";
        }
        else
        {
            return "System Processing Error Code: Database ResultID Not Returned";
        }
    }
}