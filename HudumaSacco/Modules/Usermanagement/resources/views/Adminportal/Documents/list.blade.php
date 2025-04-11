@extends('usermanagement::layouts.master')

@section('breadcrums')
<style>
    /* Add background to the title */
    .page-title {
        background-color:#99290d !important;
        padding: 10px 20px;
        border-radius: 5px;
        font-family: 'Poppins', sans-serif !important;
        color: white;
        text-align: center;
    }

    /* Adjust table styles for better readability */
    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table th, .table td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table th {
        background-color: #bb8114 !important;
    }

    /* Add hover effect to table rows */
    .table tbody tr:hover {
        background-color: #f9f9f9;
    }

    /* Center the form section */
    .upload-section {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-top: 20px;
    }

    .upload-form {
        width: 50%; /* Adjust width as needed */
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
