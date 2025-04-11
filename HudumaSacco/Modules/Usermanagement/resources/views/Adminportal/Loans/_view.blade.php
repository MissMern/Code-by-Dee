<div class="col-md-12">
	<form>
		<div class="table-responsive">
			<table class="table table-hover table-bordered">
				<tr>
					<th>PayrollNum</th>
					<td>{{$model->PayrollNum}}</td>
				</tr>
				<tr>
					<th>Id-Number</th>
					<td>{{$model->IdNumber}}</td>
				</tr>
				<tr>
					<th>Names</th>
					<td>{{$model->Names}}</td>
				</tr>
				
				<tr>
					<th>AccountNum</th>
					<td>{{$model->AccountNum}}</td>
				</tr>
				<tr>
					<th>Description</th>
					<td>{{$model->EDCode}} -  {{$model->EdName}}</td>
				</tr>
				<tr>
					<th>Loan Amount</th>
					<td>{{number_format($model->LoanAmount,2)}}</td>
				</tr>
				<tr>
					<th>Rate</th>
					<td>{{number_format($model->Rate,2)}}</td>
				</tr>
				<tr>
					<th>Interest Amount</th>
					<td>{{number_format($model->InterestAmount,2)}}</td>
				</tr>
				<tr>
					<th>Principle Amount</th>
					<td>{{number_format($model->Principal,2)}}</td>
				</tr>
				<tr>
					<th>Monthly Recovery</th>
					<td>{{number_format($model->Amount,2)}}</td>
				</tr>

				<tr>
					<th>Amount Paid</th>
					<td>{{number_format($model->PaidAmount,2)}}</td>
				</tr>

				<tr>
					<th>Balance</th>
					<td>{{number_format($model->Balance,2)}}</td>
				</tr>
				<tr>
					<th>Remarks</th>
					<td>{{$model->Remarks}}</td>
				</tr>
				<tr>
					<th>Created At</th>
					<td>{{$model->created_at}}</td>
				</tr>
				
			</table>
			

		</div>
	</form>
	
</div>