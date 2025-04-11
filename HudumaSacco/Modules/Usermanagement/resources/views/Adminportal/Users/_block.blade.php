
    <style type="text/css">
        label{
            color: black;
        }
    </style>
    
<div class="col-md-12">
	<hr style="height:3.5px;background:green;">
	<form action="{{$url}}" method="post">
		 <?=csrf_field()?>
		 <div class="row">
		 	<div class="form-group col-md-12">
		 	<label >PayrollNum</label>
		 	<input type="text" name="name" class="form-control"  value="{{$user->username}}"  readonly>
		 	
		 </div>

		 <div class="form-group col-md-12">
		 	<label >Names</label>
		 	<input type="text" name="name" class="form-control"  value="{{$user->name}}"  readonly>
		 	
		 </div>
		 <div class="form-group col-md-12">
		 	<label>Email Address</label>
		 	<input type="text" name="name" class="form-control"  value="{{$user->email}}"  readonly>
		 	
		 </div>

		 
		 <div class="form-group col-md-12">
		 	<input type="checkbox" name="confirm" required> <label>Confirm to Suspend User Account</label>
		 </div>
		  <div class="form-group col-md-12">
		 	<button class="btn btn-sm btn-success">Block Access</button>
		 	
		 </div>
		</div>

		


	</form>
	

</div>