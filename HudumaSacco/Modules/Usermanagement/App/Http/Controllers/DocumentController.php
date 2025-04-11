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
use Modules\Usermanagement\Models\Documents;
use Modules\Usermanagement\App\Models\DocumentCategory;
use Modules\Usermanagement\App\Models\Document;
 use Modules\Leave\Entities\Department;
use App\Helpers\SystemAudit;
use App\Helpers\Helper;
use App\Helpers\DataProcessor;

use Auth;

class DocumentController extends Controller
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
        $data['page_title']="Sacco Documents";
        return view('usermanagement::Adminportal.Documents.list',$data);
    }

    public function fetchList()
    {
         $models=DB::select("select id,created_at,DocCategory,DocumentName,DocumentRef,DocumentDate,DocumentAuthor,DocumentVersion,AccessType,UploadedByName from documents ");
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

    public function create()
    {
         $data['page_title']="Upload Document";

         $data['url']=url()->current();
        
         $data['categories']=DocumentCategory::get();
        return view('usermanagement::Adminportal.Documents.index',[
            'data' => $data,
            'page_title' => 'Upload Document',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }
    /**
     * update the specified resource in storage.
     */
    /**
     * 
     */

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

    public function UploadDocument(Request $request)
{
    // Validate request
    $validatedData = $request->validate([
        'DocumentName' => 'required',
        'DocumentRef' => 'required',
        'DocumentDate' => 'required',
        'DocumentAuthor' => 'required',
        'DocumentVersion' => 'required',
        'AccessType' => 'required',
        'DocCategory' => 'required',
        'DocumentFile' => 'required|mimes:pdf|max:2048'
    ]);

    // Assign values
    $document = new Document($validatedData);
    $document->UploadedByName = auth()->user()->name; // Keep this
    $document->created_by = auth()->id(); // Instead of `UploadedBy`
    
    // Handle file upload
    if ($request->hasFile('DocumentFile')) {
        $file = $request->file('DocumentFile');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('documents', $fileName, 'public');
        $document->DocumentStorageName = $filePath; // Store file path
    }

    // Save to database
    $document->save();

    return back()->with('success', 'Document uploaded successfully!');
}

}
