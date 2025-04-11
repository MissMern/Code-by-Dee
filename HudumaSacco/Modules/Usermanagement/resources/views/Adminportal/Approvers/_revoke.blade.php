<div class="row">
	<hr style="height:4px;border-width:0;color:gray;background-color:green;width: 100%;">

	<form action="{{$url}}" method="post">
		 <?=csrf_field()?>

		 <div class="col-md-12 form-group">
		 	<label>PayrollNum</label>
		 	<input type="text" name="PayrollNum" class="form-control" required  value="{{ ($model->PayrollNum)? $model->PayrollNum:'Not Set'}}" readonly>
		 	
		 </div>

		  <div class="col-md-12 form-group">
		 	<label>Names</label>
		 	<input type="text" name="Names" class="form-control" required  value="{{ ($model->Names)? $model->Names:'Not Set'}}" readonly>
		 	
		 </div>
		 

		  <div class="col-md-12 form-group">
		 	<label>Role Name</label>
		 	<input type="text" name="RoleName" class="form-control" required  value="{{$model->RoleName}}" readonly>
		 	
		 </div>

		  <div class="col-md-12 form-group">
		 	<input type="checkbox" name="confirm" required>
		 	<span>Confirm To Revoke Selected Role From User</span>
		 	
		 </div>
		 <div class="col-md-12 form-group">
		 	<button class="btn btn-sm btn-success">Complete</button>

		 </div>
		


	</form>
	

</div>