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





        <?php if(Auth::user()->hasRole(['Administrator'])):?>
<a href="<?=url('/AdminModule/ManagementUser/Index');?>" title="Add New Approver" class="btn btn-sm btn-success"><span class="fa fa-list">Approvers List </span></a>

     <?php endif;?>


    </div>

                              <div class="card">

                                    <div id="cardCollpase4" class="collapse show">
                                        <div class="card-body">

                                            <form action="{{$url}}" method="post">
                                                <?=csrf_field();?>

                                                 <div class="row">
                       <hr style="height:4px;border-width:0;color:gray;background-color:green;width: 100%;">
                        <div class="col-md-4">
                          
                     
                       
                        <div class="form-group ">
                    <label class="col-md-3 control-label">Payroll Num:</label>
                    
                    <div class="col-md-9">
                      <div class="input-group">
                        <input type="text" class="form-control" name="regno" id="Regno"  >
                        <span class="input-group-btn">
                          <button class="btn btn-secondary"  id="Query" type="button"><i class="icon-search"></i> Validate</button>
                        </span>
                      </div>
                    </div>
                  </div>
                     </div>

                     <div class="col-md-4 form-group">
                        <label>Names</label>
                        <input type="text" name="Names" class="form-control" required  value="{{old('Names')}}" id="Names" >



                     </div>
                      <div class="col-md-4 form-group">
                        <label>Names</label>


                      {{ Form::select('RoleName',([null=>'--Select Role--'] + $roles), $model->RoleName, ['class'=>'form-control','required'=>false,'id'=>'Designation','style'=>'width:100%']) }}
                  </div>
                  <div class="col-md-12 form-group">
                    <input type="checkbox" name="confirm" required><span>Confirm to Create Select User Privilage</span>

                  </div>


                 </div>

                 <div class="row">
                    <div class="col-md-4 form-group">
                        <button class="btn btn-sm btn-success">Create Privilaged User</button>

                    </div>
                     
                 </div>
                                                



                                            </form>


                                             


                                             

                                        </div>
                                    </div>
                                </div> <!-- end card-->
          </div>









@stop
@push('scripts')
     <script>
         $("#Query").on("click",function(e){
            e.preventDefault();
             alert();


         })
    </script>

@endpush
