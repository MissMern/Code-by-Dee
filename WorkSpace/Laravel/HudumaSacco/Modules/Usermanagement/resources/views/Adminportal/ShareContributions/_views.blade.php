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
					<td>{{$model->Name}}</td>
				</tr>
				<tr>
					<th>PayDate</th>
					<td>{{$model->Paydate}}</td>
				</tr>
				<tr>
					<th>Agent Type</th>
					<td>{{$model->AgentType}}- Sacco</td>
				</tr>
				<tr>
					<th>Reg Num</th>
					<td>{{$model->RegNum}}</td>
				</tr>
				<tr>
					<th>Agent Code</th>
					<td>{{$model->AgentCode}} :Huduma Kenya Staff Sacco Ltd</td>
				</tr>
				<tr>
					<th>Branch Code</th>
					<td>{{$model->BranchCode}}</td>
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
					<th>Amount</th>
					<td>{{number_format($model->Amount,2)}}</td>
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