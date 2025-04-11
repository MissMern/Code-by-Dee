<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Helpers\Helper;
use Modules\Usermanagement\App\Models\Member;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'PayrollNum'=>['required','string','unique:users,username','exists:members,PayrollNum'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

      DB::beginTransaction();
        $user=User::create([
            'name' => $data['name'],
            'username'=>$data['PayrollNum'],
            'telephone'=>$data['Telephone'],
            'role_id'=>"Member",
            'org_id'=>'10307',
            'verification_code'=>Helper::generatePin(11),
            'user_type'=>'External',
            'email' => $data['email'],
            'password' =>$data['password'],
        ]);
         $user->assignRole('Member');
          $member=Member::where(['PayrollNum'=>$user->username])->first();
            if($member)
            {
               
                $member->UserId=$user->id;
                $member->UserAccountStatus="Verified";
                $member->UserAccountCreatedAt=date("Y-m-d H:i:s");
                $member->save();
                
            }
         DB::commit();

         return $user;

    }
}
