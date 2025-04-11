<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Usermanagement\App\Models\Member;

class MemberController extends Controller
{
    

    public function ValidateDetails(Request $request)
    {
         $data=$request->all();
         if(isset($data['PayrollNum']))
         {
             try{
                 $model=Member::where(['PayrollNum'=>$data['PayrollNum']])->first();
             if(!$model)
             {
                $data=array();
                $code=404;
                $message="Provided PayrollNum Is Not Registered As Member Of The Sacco";
             }else{
                 if(empty($model->UserId))
                 {
                    $data=array(
                        "PayrollNum"=>$model->PayrollNum,
                        "Name"=>$model->MemberName,
                        "EmailAddress"=>$model->MemberEmail,
                        "Telephone"=>$model->MemberTelephone,



                    );
                    $code="200";
                     $message="Member Details Validated Successfully";
                    

                 }else{
                     $data=array();
                    $code="406";
                     $message="Member Already Has User Account";


                 }



             }


             }catch(\Exception $e)
             {
                 $data=array();
                    $code="400";
                     $message="System Error ".$e->getMessage();

             }
           



         }else{
            $data=array();
            $code=403;
            $message="PayrollNum Missing";
         }
         $response=array();
         $response['Code']=$code;
         $response['Message']=$message;
         $response['Data']=$data;
         return $response;

    }
}
