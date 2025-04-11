
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
		 	<label >Category Name</label>
		 	<input type="text" name="CategoryName" class="form-control"  value="{{$model->CategoryName}}"  required>
		 	
		 </div>
		

		 
		 <div class="form-group col-md-12">
		 	<input type="checkbox" name="confirm" required> <label>Confirm to Update Details</label>
		 </div>
		  <div class="form-group col-md-12">
		 	<button class="btn btn-sm btn-success">Edit Detail</button>
		 	
		 </div>
		</div>

		


	</form>
	

</div>