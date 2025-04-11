<?php

namespace Modules\Usermanagement\App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
use Modules\Usermanagement\App\Models\Loan;

class LoansController extends Controller
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
        $data['page_title']="Active Loans";
        return view('usermanagement::Adminportal.Loans.index',$data);
    }

    public function fetchList()
    {
         $models=DB::select("select id,PayrollNum,IdNumber,AccountNum,EDCode,EdName,format(Amount,2)Amount ,format(Balance,2) Balance,Names,Rate,AccountNum,format(InterestAmount,2) InterestAmount,format(PaidAmount,2)PaidAmount,format(LoanAmount,2) LoanAmount,format(Principal,2) Principal  from  loans where Balance>? ",[0]);
         return Datatables::of($models)
          ->rawColumns(['action'])
          ->addColumn('action', function ($model) {
              $view_url=url('/AdminModule/Loans/ViewDetails/'.$model->id);
              $edit_url=url('/AdminModule/Loans/editAmountDetails/'.$model->id);
              
                        return '<div class="btn-group mb-2 pull-left">
                                                    <button type="button" class="btn btn-xs btn-success" >Actions</button>
                                                    <button type="button" class="btn btn-xs btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item large-modal" data-url="'.$view_url.'" data-title="View Details" style="cursor:pointer;" >Loan Summary</a>
                                                        <div class="dropdown-divider"></div>

                                                        <a class="dropdown-item large-modal" data-url="'.$edit_url.'" data-title="Edit Payment Amounts-Details" style="cursor:pointer;" >Edit Amounts</a>
                                                        
                                                        
                                                    </div>
                                                </div>
';
            })->make(true);

    }


    public function ViewDetails($id)
    {
         $model=Loan::find($id);
          $data['model']=$model;
           return view('usermanagement::Adminportal.Loans._view',$data);

    }


    public function EditAmounts($id,Request $request)
    {
        $model=Loan::find($id);
          $data['model']=$model;
          $data['url']=url()->current();
             if($request->isMethod("Post"))
             {
                 $data=$request->all();
                   
                  try{
                  $model->Rate=str_replace(",", "", $data['Rate']);
                  $model->LoanAmount=str_replace(",","",$data['LoanAmount']);
                  $model->InterestAmount=str_replace(",","",$data['InterestAmount']);
                  $model->Principal=str_replace(",","",$data['Principal']);
                  $model->Amount=str_replace(",","",$data['Amount']);
                  $model->PaidAmount=str_replace(',', "", $data['PaidAmount']);
                  $model->Balance=str_replace(',', "", $data['Balance']);
                  $model->save();
                  Session::flash("success_msg","Detail/Amount Updated Successfully");


                  }catch(\Exception  $e)
                  {
                    
                    Session::flash("danger_msg","Error Occured while Updating details. ".$e->getMessage());

                  }
                  
                  return redirect()->back();
                  
             }
          return view('usermanagement::Adminportal.Loans._editAmounts',$data);

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usermanagement::create');
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
