@extends('usermanagement::layouts.master')

@section('breadcrums')
<style>
    .page-title-box {
        background-color: #99290d !important;
        padding: 15px;
        border-radius: 5px;
        font-family: 'Poppins', sans-serif !important;
        color: white;
        text-align: center;
        margin-bottom: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .page-title {
        font-size: 20px;
        font-weight: bold;
        margin: 0;
    }

    .upload-section {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-top: 20px;
    }

    .upload-form {
        width: 50%;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 15px;
    }
</style>

<div class="col-12">
    <div class="page-title-box">
        <h4 class="page-title">{{ @$page_title }}</h4>
    </div>
</div>
@stop

@section('content')
<br>
<div class="col-md-12">
    <div class="col-md-12" style="margin-bottom: 0.5%;">
        @if(Auth::user()->hasRole(['SuperAdmin']))
            <a data-url="{{ url('/LeaveManagement/Holidays/Create') }}" data-title="Add New National Holiday" class="btn btn-sm btn-success large-modal">
                <span class="fa fa-plus"> Create New Holiday </span>
            </a>
        @endif
    </div>

    <div class="upload-section">
        <div class="upload-form">
        <form action="{{ url('AdminModule/Documents/UploadDocument') }}" method="post" enctype="multipart/form-data" onsubmit="console.log('Form Submitted');">

                {{ csrf_field() }}
                
                <div class="form-group" >
                @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                    <label for="DocCategory">Document Category</label>
                    <select name="DocCategory" id="DocCategory" class="form-control" required>
                        <option value="">Select Document Category</option>
                        @if(isset($data['categories']))
                            @foreach($data['categories'] as $category)
                                <option value="{{ $category->id }}">{{ $category->CategoryName }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="form-group">
                    <label for="DocumentName">Document Name</label>
                    <input type="text" name="DocumentName" id="DocumentName" class="form-control" required placeholder="Enter Document Name">
                </div>

                <div class="form-group">
                    <label for="DocumentRef">Document Ref No</label>
                    <input type="text" name="DocumentRef" id="DocumentRef" class="form-control" required placeholder="Enter Document Ref No">
                </div>

                <div class="form-group">
                    <label for="DocumentAuthor">Document Author</label>
                    <input type="text" name="DocumentAuthor" id="DocumentAuthor" class="form-control" required placeholder="Enter Document Author">
                </div>

                <div class="form-group">
                    <label for="DocumentVersion">Document Version</label>
                    <input type="text" name="DocumentVersion" id="DocumentVersion" class="form-control" required placeholder="Enter Document Version">
                </div>

                <div class="form-group">
                    <label for="DocumentDate">Document Date</label>
                    <input type="date" name="DocumentDate" id="DocumentDate" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="DocumentFile">Upload Document</label>
                    <input type="file" name="DocumentFile" id="DocumentFile" class="form-control" required accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.txt,.jpg,.png,.jpeg">
                </div>
                <div class="form-group">
                    <label for="AccessType">Access Type</label>
                    <select name="AccessType" id="AccessType" class="form-control" required>
                        <option value="">Select Access Type</option>
                        <option value="Public">Public</option>
                        <option value="Private">Private</option>
                        <option value="Restricted">Restricted</option>
                    </select>
                </div>
                

                <button type="submit" class="btn btn-primary" >Upload Document</button>

            </form>
            
        </div>
    </div>

@stop

@push('scripts')
<script>
    $('#EDCodesdatatable').DataTable({
        processing: true,
        serverSide: true,
        bAutoWidth: false,
        pageLength: 50,
        "columnDefs": [
            { "width": "5%", "targets": 0 }
        ],
        "order": [[ 2, "desc" ]],
        ajax: {
            url: '{{ url("AdminModule/Documents/fetchList") }}',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        },
        columns: [
            { data: 'action', name: 'action', searchable: false, orderable: false },
            { data: 'DocCategory', name: 'DocCategory' },
            { data: 'DocumentName', name: 'DocumentName' },
            { data: 'DocumentRef', name: 'DocumentRef' },
            { data: 'DocumentDate', name: 'DocumentDate' },
            { data: 'DocumentAuthor', name: 'DocumentAuthor' },
            { data: 'DocumentVersion', name: 'DocumentVersion' },
            { data: 'AccessType', name: 'AccessType' },
            { data: 'UploadedByName', name: 'UploadedByName' },
            { data: 'created_at', name: 'created_at' },
        ],
    });
</script>
@endpush
