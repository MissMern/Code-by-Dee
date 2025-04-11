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
use Modules\Usermanagement\App\Models\DocumentCategory;
 use Modules\Leave\Entities\Department;
use App\Helpers\SystemAudit;
use App\Helpers\Helper;
use App\Helpers\DataProcessor;
use Auth;

class DocumentCategoryController extends Controller
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
        $data['page_title']="Document Category";
        return view('usermanagement::Adminportal.DocumentCategories.index',$data);
    }

    public function fetchList()
    {
         $models=DB::select("select id,created_at,CategoryName from document_categories ");
         return Datatables::of($models)
          ->rawColumns(['action'])
          ->addColumn('action', function ($model) {
              $edit_url=url('/AdminModule/DocumentCategory/EditDetails/'.$model->id);
              
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


    public function EditDetails($id,Request $request)
    {
         $model=DocumentCategory::find($id);
         $data['model']=$model;
         $data['url']=url()->current();
           if($request->isMethod("Post"))
           {
             $data=$request->all();
               $model->CategoryName=$data['CategoryName'];
               $model->updated_by=$this->userID;
               $model->save();
               Session::flash("success_msg","Document Category Uploaded Successfully");
               return redirect()->back();
              
           }






          return view('usermanagement::Adminportal.DocumentCategories._edit',$data);

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
    //update document list 
}
