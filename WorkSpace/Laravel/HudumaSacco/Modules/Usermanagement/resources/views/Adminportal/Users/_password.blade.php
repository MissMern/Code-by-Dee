
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
		 	<label >Username</label>
		 	<input type="text" name="name" class="form-control"  value="{{$user->username}}"  readonly>
		 	
		 </div>
		 <div class="form-group col-md-12">
		 	<label>Email Address</label>
		 	<input type="text" name="name" class="form-control"  value="{{$user->email}}"  readonly>
		 	
		 </div>

		 <div class="col-md-12 form-group" >
		 	<label>Password</label>
		 	<input type="password" name="password" class="form-control"    required>
		 	
		 </div>
		 <div class="form-group col-md-12">
		 	<label>Confirm Password</label>
		 	<input type="password" name="password_confirmation" class="form-control"  required  >
		 	
		 </div>
		 <div class="form-group col-md-12">
		 	<input type="checkbox" name="confirm" required> <label>Confirm to reset password</label>
		 </div>
		  <div class="form-group col-md-12">
		 	<button class="btn btn-sm btn-success">Reset Password</button>
		 	
		 </div>
		</div>

		


	</form>
	

</div>