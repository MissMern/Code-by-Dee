@extends('usermanagement::layouts.master')

@section('breadcrums')
<style>
/* Page Title Styling */
.page-title-box {
    background-color: #8B0000; /* Darker red for better contrast */
    padding: 18px;
    border-radius: 8px;
    font-family: 'Poppins', sans-serif;
    color: #ffffff;
    text-align: center;
    margin-bottom: 25px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
}

.page-title {
    font-size: 22px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
}

/* Upload Section */
.upload-section {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 25px;
}

/* Upload Form */
.upload-form {
    width: 50%;
    background: #ffffff;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.12);
    transition: transform 0.2s ease-in-out;
}

/* Form Field Styling */
.form-group {
    margin-bottom: 18px;
}

/* Input Fields */
.upload-form input,
.upload-form select,
.upload-form textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    transition: border 0.3s ease;
}

/* Input Fields - Hover & Focus */
.upload-form input:focus,
.upload-form select:focus,
.upload-form textarea:focus {
    border: 1px solid #8B0000;
    outline: none;
    box-shadow: 0 0 5px rgba(139, 0, 0, 0.3);
}

/* Submit Button */
.upload-form button {
    width: 100%;
    padding: 12px;
    background-color: #8B0000;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.upload-form button:hover {
    background-color: #6A0000;
}

/* Responsive Design */
@media (max-width: 768px) {
    .upload-form {
        width: 90%;
    }

    .page-title {
        font-size: 18px;
    }
}
</style>

<div class="col-12">
    <div class="page-title-box">
        <h4 class="page-title" style="color: #ffffff;">{{ @$page_title }}</h4>
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

    <div class="card">

                                    <div id="cardCollpase4" class="collapse show">
                                        <div class="card-body">


                                             


                                             <div class="table-responsive">
                  
                     <table class="table table-striped table-bordered table-hover "  id="EDCodesdatatable"  style="width:100%;">
                     <thead>
                        <tr class="bg-warning" style="color:white;">
                                        <th>Action</th>
                                        
                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>Ref No</th>
                                        <th>Date</th>
                                        <th>Author</th>
                                        <th>Version</th>
                                        <th>Access Type</th>
                                        <th>Uploaded By</th>
                                        <th>Created At</th>
                                      </tr>
                       </thead>
                        <tbody>
                       </tbody>
                   </table>

                </div>

                                        </div>
                                    </div>
                                </div> <!-- end card-->
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
