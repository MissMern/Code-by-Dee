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


class ManagementUserController extends Controller
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
        $data['page_title']="System Approvers/Management Users";
        return view('usermanagement::Adminportal.Approvers.index',$data);
    }

    public function fetchList()
    {
         $models=DB::select("select id,PayrollNum,Names,RoleName,StartDate,AccountStatus,EndDate,created_at from management_users ");
         return Datatables::of($models)
          ->rawColumns(['action'])
          ->addColumn('action', function ($model) {
              $edit_url=url('/AdminModule/ManageMembers/RevokeRoles/'.$model->id);

                if($model->AccountStatus=="Disabled")
                {
                    return '<div class="btn-group mb-2 pull-left">
                                                    <button type="button" class="btn btn-xs btn-success" >Actions</button>
                                                    <button type="button" class="btn btn-xs btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                                     <div class="dropdown-menu">
                                                        <a class="dropdown-item " href="#" title="No Action" style="cursor:pointer;" >No Action</a>
                                                        
                                                        
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
                                                        <a class="dropdown-item large-modal" data-url="'.$edit_url.'" data-title="Revoke Privillage/Role" style="cursor:pointer;" >Revoke Privillage</a>
                                                        
                                                        
                                                    </div>

                                                </div>
';

                }
              
                        
            })->make(true);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
         $data['model']=new Approver();
         $data['url']=url()->current();
         $data['page_title']="Create New Approver";
          $allowedroles=array('ChairPerson',"Secretary","Treasurer","Administrator");
      
       $data['roles']=Role::whereIn('name',$allowedroles)->pluck('name','name')->toArray();

           if($request->isMethod("Post"))
           {
             $data=$request->all();
              $user=User::where(['username'=>$data['regno']])->first();
                if($user)
                {
                     $model=Approver::where(['UserId'=>$user->id,'RoleName'=>$data['RoleName'],'AccountStatus'=>'Active'])->first();
                       if($model)
                       {
                        Session::flash("danger_msg","Selected User ".$data['Names']." already has Active  Role :".$data['RoleName']);
                     return redirect()->back();

                       }else{
                    $model=new Approver();
                    $model->UserId=$user->id;
                    $model->PayrollNum=$data['regno'];
                    $model->Names=$data['Names'];
                    $model->RoleName=$data['RoleName'];
                    $model->StartDate=date('Y-m-d');
                    $model->save();
                    $role=$model->RoleName;
                    $test=$user->assignRole($role);
                    Session::flash("success_msg","Privillage User Created Successfully");
                    return redirect('/AdminModule/ManagementUser/Index');

                       }
                   

                }else{
                    Session::flash("danger_msg","User Details Not Found");
                     return redirect()->back();

                }


           
              
           }


        return view('usermanagement::Adminportal.Approvers.create',$data);
    }


    public function RevokeRoles($id,Request $request)
    {
        $model=Approver::find($id);
        $data['model']=$model;
        $data['url']=url()->current();
           if($request->isMethod("Post"))
           {
             $data=$request->all();
                if(isset($data['confirm']))
                {
                    DB::beginTransaction();
                    $model->EndDate=date('Y-m-d');
                    $model->AccountStatus="Disabled";
                    $model->save();
                     $user=$model->user;
                       if($user)
                       {
                        $user=$model->user;
                        $user->removeRole($model->RoleName);
                       }
                    DB::commit();
                      Session::flash("success_msg","Details Updated Successfully");

                }

                return redirect()->back();

           }
        return view('usermanagement::Adminportal.Approvers._revoke',$data);

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
