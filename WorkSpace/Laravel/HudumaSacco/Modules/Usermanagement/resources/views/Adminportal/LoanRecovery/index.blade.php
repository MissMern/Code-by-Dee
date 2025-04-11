@extends('usermanagement::layouts.master')
@section('breadcrums')
<style>
  
    /* Add background to the title */
.page-title {
    background-color: #99290d !important; /* Choose your preferred background color */
    padding: 10px 20px;
    border-radius: 5px;
    font-family: 'Poppins', sans-serif !important;
}

/* Center align the title */
.page-title-box {
    text-align: center;
}

/* Adjust table styles for better readability */
.table {
    width: 100%;
    border-collapse: collapse;
}

.table th,
.table td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.table th {
    background-color: #bb8114 !important; /* Background color for table headers */
}

/* Add hover effect to table rows */
.table tbody tr:hover {
    background-color: #f9f9f9; /* Hover background color */
}

/* Add background to the title */
.page-title {
    background-color: #99290d !important;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
}

/* Center align the title */
.page-title-box {
    text-align: center;
}

</style>
<div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title" style="color:white;"><?=@$page_title?></h4>
                                </div>
                            </div>
@stop


@section('content')

<br>
 <div class="col-md-12">



                  <div class="col-md-12" style="margin-bottom:0.5%;">





        <?php if(Auth::user()->hasRole(['SuperAdmin'])):?>
<a data-url="<?=url('/LeaveManagement/Holidays/Create');?>" data-title="Add New National Holiday" class="btn btn-sm btn-success large-modal"><span class="fa fa-plus">Create New Holiday </span></a>

     <?php endif;?>


    </div>

                              <div class="card">

                                    <div id="cardCollpase4" class="collapse show">
                                        <div class="card-body">


                                             


                                             <div class="table-responsive">
                  
                     <table class="table table-striped table-bordered table-hover "  id="loanrecoverydatatable"  style="width:100%;">
                     <thead>
                        <tr class="bg-warning" style="color:white;">
                                        <th>Action</th>
                                        <th>PayDate</th>
                                        <th>SiteId</th>
                                        <th>PayrollNum</th>
                                        <th>IdNum</th>
                                        <th>Agent Type</th>
                                        <th>Reg Num</th>
                                        <th>Agent Code</th>
                                        <th>Branch Code</th>
                                        <th>Account Num</th>
                                        <th>EdCode</th>
                                        <th>EdName</th>
                                        <th>Amount</th>
                                        <th>Balance</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                       
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
        $('#loanrecoverydatatable').DataTable({
        processing: true,
        serverSide: true,
        bAutoWidth: false,
         pageLength:50,
         "columnDefs": [
         { "width": "5%", "targets": 0 }
         ],
        "order": [[ 3, "desc" ]],
         ajax: {
            url: '<?=url("AdminModule/LoanRecoveryContributions/fetchList")?>',
             'type': 'POST',
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
          },
          columns: [
            {data: 'action', name: 'action',searchable:false,orderable:false},
            {data: 'Paydate', name: 'Paydate'},
            {data: 'SiteId', name: 'SiteId'},
            {data: 'PayrollNum', name: 'PayrollNum'},
            {data: 'IdNumber', name: 'IdNumber'},
            {data: 'AgentType', name: 'AgentType'},
            {data: 'RegNum', name: 'RegNum'},
            {data: 'AgentCode', name: 'AgentCode'},
            {data: 'BranchCode', name: 'BranchCode'},
            {data: 'AccountNum', name: 'AccountNum'},
            {data: 'EDCode', name: 'EDCode'},
            {data: 'EdName', name: 'EdName'},
            {data: 'Amount', name: 'Amount'},
            {data: 'Balance', name: 'Balance'},
            {data: 'Name', name: 'Name'},
            {data: 'Status', name: 'Status'},
        ],


        });
    </script>

@endpush
