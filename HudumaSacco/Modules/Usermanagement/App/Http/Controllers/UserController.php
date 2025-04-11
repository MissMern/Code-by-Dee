<?php

namespace Modules\Usermanagement\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;
use App\User;
use DB;
use Input;
use Modules\Usermanagement\Entities\EntityType;
use Spatie\Permission\Models\Role;
use Modules\Usermanagement\Entities\Permission;
 use Modules\Leave\Entities\Department;
use App\Helpers\SystemAudit;
use App\Helpers\Helper;
use App\Helpers\DataProcessor;
use Auth;
use Modules\Usermanagement\App\Models\Approver;

class UserController extends Controller
{
     protected $branchId;
    protected $orgId;

    public function __construct()
    {
        $this->middleware(['auth','history']);
        $this->middleware(function ($request, $next) {
            $this->userID = Auth::user()->username;
            $this->orgId = Auth::user()->org_id;
            $this->branchId = Auth::user()->branch_id;
            return $next($request);
        });
    }




    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['page_title']="Sacco Members User Accounts";
        return view('usermanagement::Adminportal.Users.index',$data);
    }

    public function fetchList()
    {
         $models=DB::select("select id,username,name,created_at,user_status,email,role_id,telephone,lastlogindate from users ");
         return Datatables::of($models)
          ->rawColumns(['action'])
          ->addColumn('action', function ($model) {
              $block_url=url('/AdminModule/ManageMembers/BlockAccount/'.$model->id);
              $password_url=url('/AdminModule/Users/ResetPassword/'.$model->id);

            $restore_url=url('/AdminModule/ManageMembers/RestoreAccount/'.$model->id);

                if($model->user_status=="Blocked")
                {
                    return '<div class="btn-group mb-2 pull-left">
                                                    <button type="button" class="btn btn-xs btn-success" >Actions</button>
                                                    <button type="button" class="btn btn-xs btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                                     <div class="dropdown-menu">
                                                    <a class="dropdown-item large-modal" data-url="'.$restore_url.'" data-title="Reinstate/Restore User Account" style="cursor:pointer;" >Restore Account</a>
                                                        
                                                        
                                                    </div>

                                                </div>
';

                }else{

                    return '<div class="btn-group mb-2 pull-left">
                                                    <button type="button" class="btn btn-xs btn-success" >Actions</button>
                                                    <button type="button" class="btn btn-xs btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                                     <div class="dropdown-menu">
                                                        <a class="dropdown-item large-modal" data-url="'.$block_url.'" data-title="Block /Suspend User Account" style="cursor:pointer;" >Suspend Account</a>

                                                    <div class="dropdown-divider"></div>
                                                         <a class="dropdown-item large-modal" data-title="Reset User Account Password" data-url="'.$password_url.'"  style="cursor:pointer;">Reset Password</a>
                                                        
                                                        
                                                    </div>

                                                </div>
';

                }
              
                        
            })->make(true);

    }



    public function PasswordReset($id,Request $request)
{

    
         if(Auth::user()->can("Reset User Passwords") || Auth::user()->hasRole(["Administrator"]))
         {
             $user=User::find($id);
            $data['url']=url()->current();
             $data['user']=$user;
               if($request->isMethod("post"))
               {
                 $this->validate($request,[
                    'password'=>'required|min:6|confirmed',
                   ]);
                  try{
                 $data=$request->all();
                $user->password=$data['password'];
                $user->password_status=1;
                $user->save();
                
                Session::flash("success_msg","User Password Updated Successfully");
                return redirect()->back();


                  }catch(\Exception $e)
                  {

                    Helper::sendEmailToSupport($e);
                    Session::flash("danger_msg","Error Occured while processing your request.System Admin Notified".$e->getMessage());
                return redirect()->back();
                  }
               
            }
            return view('usermanagement::Adminportal.Users._password',$data);
        
    }else{
        return view("forbidden");
    }

}


public function BlockAccount($id,Request $request)
{
    if(Auth::user()->can("Reset User Passwords") || Auth::user()->hasRole(["Administrator"]))
         {
             $user=User::find($id);
            $data['url']=url()->current();
             $data['user']=$user;
               if($request->isMethod("post"))
               {
                 
                  try{
                
                $user->user_status="Blocked";
                $user->updated_by =$this->userID;
                $user->password_status=1;
                $user->save();
                
                Session::flash("success_msg","User Account Blocked  Successfully");
                return redirect()->back();


                  }catch(\Exception $e)
                  {

                    Helper::sendEmailToSupport($e);
                    Session::flash("danger_msg","Error Occured while processing your request.System Admin Notified".$e->getMessage());
                return redirect()->back();
                  }
               
            }
            return view('usermanagement::Adminportal.Users._block',$data);
        
    }else{
        return "Access Denied";
    }

}


public function RestoreAccount($id,Request $request)
{
    if(Auth::user()->can("Reset User Passwords") || Auth::user()->hasRole(["Administrator"]))
         {
             $user=User::find($id);
            $data['url']=url()->current();
             $data['user']=$user;
               if($request->isMethod("post"))
               {
                 
                  try{
                
                $user->user_status="Active";
                $user->updated_by =$this->userID;
                $user->password_status=1;
                $user->save();
                
                Session::flash("success_msg","User Account Restored  Successfully");
                return redirect()->back();


                  }catch(\Exception $e)
                  {

                    Helper::sendEmailToSupport($e);
                    Session::flash("danger_msg","Error Occured while processing your request.System Admin Notified".$e->getMessage());
                return redirect()->back();
                  }
               
            }
            return view('usermanagement::Adminportal.Users._restore',$data);
        
    }else{
        return "Access Denied";
    }

}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('usermanagement::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('usermanagement::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
