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
use Modules\Usermanagement\App\Models\Member;
use Modules\Usermanagement\App\Models\Relationship;
 use Modules\Leave\Entities\Department;
use App\Helpers\SystemAudit;
use App\Helpers\Helper;
use App\Helpers\DataProcessor;
use App\Helpers\EmploymentHelper;
use Auth;

class MemberController extends Controller
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
        $data['page_title']="Active Members";
        return view('usermanagement::Adminportal.members.index',$data);
    }

    public function fetchList()
    {
         $models=DB::select("select id,PayrollNum,IdNumber,MemberName,format(MonthlyContribution,2) MonthlyContribution,format(CurrentBalance,2) CurrentBalance,created_at,MemberGender,JoiningDate,MemberTelephone,UserAccountStatus  from members ");
         return Datatables::of($models)
          ->rawColumns(['action'])
          ->addColumn('action', function ($model) {
              $edit_url=url('/LeaveManagement/LeaveApprovers/EditDetails/'.$model->id);
              
                        return '<div class="btn-group mb-2 pull-left">
                                                    <button type="button" class="btn btn-xs btn-success" >Actions</button>
                                                    <button type="button" class="btn btn-xs btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item large-modal" data-url="'.$edit_url.'" data-title="Edit Details" style="cursor:pointer;" >Edit</a>
                                                        
                                                        
                                                    </div>
                                                </div>
';
            })->make(true);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
         $data['page_title']="Create New Member";
         $data['url']=url()->current();
          $data['model']=new Member();
          $data['relationships']=Relationship::pluck('RelationName','RelationName')->toArray();
         return view('usermanagement::Adminportal.members.create',$data);

        
    }


    public function GetApplicantData(Request $request)
    {
         $data=$request->all();
         $response=array();
          if(isset($data['PayrollNum']))
          {
              $member=Member::where(['PayrollNum'=>$data['PayrollNum']])->first();
                if(!$member)
                {
                     $employeedata=EmploymentHelper::QueryDetails($data['PayrollNum']);
                     $detail=json_decode($employeedata);
                    if($detail->Code=="200")
                    {
                    $model=$detail->data;
                    $response['EmployeeMasterData']=$model;
                    $response['Code']=$detail->Code;
                    $response['Message']=$detail->message;
                    }else{
                    $response['EmployeeMasterData']=array();
                    $response['Code']=$detail->Code;
                    $response['Message']=$detail->message;
                    }

              }else{

                 $response['EmployeeMasterData']=array();
                    $response['Code']=400;
                    $response['Message']="Member With Provided PayrollNum Already Registered";


              }





           
             
            
             
             





          }else{

          }
          
          return $response;

    }

    public function PostBasicMemberDetails(Request $request)
    {
         $data=$request->all();
          
          

          $member=new Member();
          $member->PayrollNum=$data['RegNo'];
          $member->IdNumber=$data['ApplicantIdNum'];
          $member->MemberName=$data['ApplicantName'];
          $member->MemberGender=$data['Gender'];
          $member->JoiningDate=date("Y-m-d");
          $member->MemberEmail=$data['ApplicantEmail'];
          $member->MemberTelephone=$data['ApplicantTelephone'];
          $member->MemberAltTelephone=$data['ApplicantAltTelephone'];
          $member->MemberNextofKinName=$data['ApplicantNextofKinName'];
          $member->MemberNextOfKinRelation=$data['ApplicantNextOfKinRelation'];
          $member->MemberNextOfKinTelephone=$data['ApplicantNextOfKinTelephone'];
          $member->MemberNextofKinEmail=$data['ApplicantNextOfEmail'];
          $member->MemberNextofkinCurrentAddress=$data['NextofkinCurrentAddress'];
          $member->MemberNextofPostalAddress=$data['NextofPostalAddress'];
          $member->MemberNextOfKinIdNum=$data['NextOfKinIdNum'];
          $member->MonthlyContribution=doubleval(str_replace(",", "", $data['MonthlyContribution']));
          $member->CurrentBalance=0;
          $member->MemberBirthDate=date('Y-m-d',strtotime($data['DoB']));
          $member->MemberEmployerName=$data['MemberEmployerName'];
          $member->MemberEmployerCode=$data['EmployerCode'];
          $member->CreatedByName=Auth::user()->sirname." ".Auth::user()->firstname." ".Auth::user()->middlename;

          $member->save();
           dd($member);

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
