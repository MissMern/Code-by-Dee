<div class="col-md-12">
	<form action="{{$url}}" method="post">
		 <?=csrf_field();?>
		 <div class="row">
		 	 <div class="col-md-6 form-group">
		 	 	<label>Payroll Num</label>
		 	 	<input type="text" name="PayrollNum" value="{{$model->PayrollNum}}"  class="form-control" readonly>
		 	 	
		 	 </div>

		 	  <div class="col-md-6 form-group">
		 	 	<label>Names</label>
		 	 	<input type="text" name="Names" value="{{$model->Names}}"  class="form-control" readonly>
		 	 	
		 	 </div>
		 	 <div class="col-md-6 form-group">
		 	 	<label>Id Number</label>
		 	 	<input type="text" name="IdNumber" value="{{$model->IdNumber}}"  class="form-control" readonly>
		 	 	
		 	 </div>
		 	 <div class="col-md-6 form-group">
		 	 	<label>Ref /Account Num</label>
		 	 	<input type="text" name="AccountNum" value="{{$model->AccountNum}}"  class="form-control" readonly>
		 	 	
		 	 </div>
		 	
		 </div>
		  <div class="row">

		  	<div class="col-md-6 form-group">
		 	 	<label>Lending Rate (%)</label>
		 	 	<input type="text" name="Rate" value="{{( strlen($model->Rate)>0)?number_format($model->Rate,2):null}}"  class="form-control" required>
		 	 	
		 	 </div>



		 	 <div class="col-md-6 form-group">
		 	 	<label>Actual Loan Amount</label>
		 	 	<input type="text" name="LoanAmount" value="{{( strlen($model->LoanAmount)>0)?number_format($model->LoanAmount,2):null}}"  class="form-control" required>
		 	 	
		 	 </div>


		 	 <div class="col-md-6 form-group">
		 	 	<label>Interest Amount</label>
		 	 	<input type="text" name="InterestAmount" value="{{( strlen($model->InterestAmount)>0)?number_format($model->InterestAmount,2):null}}"  class="form-control" required>
		 	 	
		 	 </div>



		 	 <div class="col-md-6 form-group">
		 	 	<label>Principle Amount</label>
		 	 	<input type="text" name="Principal" value="{{( strlen($model->Principal)>0)?number_format($model->Principal,2):null}}"  class="form-control" required>
		 	 	
		 	 </div>


		 	 <div class="col-md-4 form-group">
		 	 	<label>Montly Recovery Amount</label>
		 	 	<input type="text" name="Amount" value="{{( strlen($model->Amount)>0)?number_format($model->Amount,2):null}}"  class="form-control" required>
		 	 	
		 	 </div>
		 	 <div class="col-md-4 form-group">
		 	 	<label>Amount Paid</label>
		 	 	<input type="text" name="PaidAmount" value="{{( strlen($model->PaidAmount)>0)?number_format($model->PaidAmount,2):null}}"  class="form-control" required>
		 	 	
		 	 </div>

		 	 <div class="col-md-4 form-group">
		 	 	<label>Total Balance</label>
		 	 	<input type="text" name="Balance" value="{{ ( strlen($model->Balance)>0)?number_format($model->Balance,2):null}}"  class="form-control" required>
		 	 	
		 	 </div>


		  </div>
		   <div class="row">

		  	<div class="col-md-12 form-group">
		 	 	
		 	 	<input type="checkbox" name="confirm"   required><span>Confirm To Update Amount</span>
		 	</div>
		 </div>
		 <div class="row">
		 	<div class="col-md-12 form-group">
		 		<button class="btn btn-sm btn-success">Update Amounts</button>

		 	</div>

		 </div>


		
			

		
	</form>
	
</div>