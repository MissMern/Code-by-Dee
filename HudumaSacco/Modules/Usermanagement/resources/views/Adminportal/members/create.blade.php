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

                             
   
       

        
        
    </div>

                              <div class="card">

                              	 <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">

                                      

                                        <form id="accountForm" method="post" action="{{$url}}" class="form-horizontal">

                                        	<?=csrf_field();?>
                                            <div id="progressbarwizard">

                                                <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-3">
                                                    <li class="nav-item">
                                                        <a href="#account-2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                            <i class="mdi mdi-account-circle me-1"></i>
                                                            <span class="d-none d-sm-inline">Basic Details</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#profile-tab-2"  data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                            <i class="mdi mdi-face-profile me-1"></i>
                                                            <span class="d-none d-sm-inline">Beneficiary Details</span>
                                                        </a>
                                                    </li>
                                                    
                                                    
                                                   
                                                     <li class="nav-item">
                                                        <a href="#Submission" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                            <i class="mdi mdi-checkbox-marked-circle-outline me-1"></i>
                                                            <span class="d-none d-sm-inline">Submission</span>
                                                        </a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content b-0 mb-0 pt-0">

                                                    <div id="bar" class="progress mb-3" style="height: 7px;">
                                                        <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"></div>
                                                    </div>

                                                    <div class="tab-pane " id="account-2">
                                                        <div class="row"  style="border: double;">
                                                        	
                                                            <div class="col-12"  style="margin-bottom:5%;">
                                                                 <div class="row">
                       <hr style="height:4px;border-width:0;color:gray;background-color:green;width: 100%;">
                       
                        
                       

                     
                         <div class="col-md-6 form-group">
                          
                     
                       
                        
                    <label class="col-md-2 control-label">Payroll No:</label>
                    
                    <div class="col-md-10">
                      <div class="input-group">
                        <input type="text" class="form-control" name="regno" id="Regno" value="" >
                        <span class="input-group-btn">
                          <button class="btn btn-success"  id="Query" type="button"><i class="icon-search"></i> Validate</button>
                        </span>
                      </div>
                    
                  </div>
                     </div>
                      </div>



                          <hr style="height:1px;background-color:red;width: 100%;margin-top:0.5%;margin-bottom:1px">
              <hr style="height:1px;background-color:black;width: 100%;margin-top: 1px;margin-bottom:1%">
                      <div class="row"  style="margin-top: 1%;border: double;">


                        <div class="col-md-9" style="border: double;">
                          
                          <div class="row">
                             
                             <h5 style="text-align: center;">Identification Details</h5>
                           
                            <div class="col-md-4 form-group">
                          <label>Payroll</label>
                          <input type="text" name="reg_no" class="form-control" required id="RegNumber"  value="{{old('reg_no')}}" readonly>
                          
                        </div>
                        <div class="col-md-4 form-group">
                          <label>Fullnames</label>
                          <input type="text" name="names" class="form-control" required id="Name" readonly  value="{{old('names')}}">
                          <input type="hidden" value="{{old('county_id')}}" name="county_id" id="CountyId">
                          
                        </div>
                        <div class="col-md-4 form-group">
                          <label>ID No</label>
                          <input type="text" value="{{old('idno')}}" name="idno" class="form-control" required id="Idno" readonly>
                          
                        </div>
                        <div class="col-md-4 form-group">
                          <label>D.O.B </label>
                          <input type="text" value="{{old('dob')}}" name="dob" class="form-control" required id="DOBDate" readonly>
                          
                        </div>
                         <div class="col-md-4 form-group">
                          <label>Gender</label>
                          <input type="text" name="gender" class="form-control" required id="Gender" value="{{old('gender')}}" readonly>
                          
                        </div>
                        <div class="col-md-4 form-group">
                          <label>Job Designation</label>
                          <input type="text" value="{{old('Ethnicity')}}" name="Ethnicity" class="form-control" id="JobDescription" readonly required>
                          
                        </div>

                        <div class="col-md-4 form-group">
                          <label>Employer Name</label>
                          <input type="text" value="{{old('RegDate')}}" name="EmployerName" class="form-control" required id="EmployerName" readonly>
                          <input type="hidden" value="{{old('EmployerCode')}}" name="EmployerCode" class="form-control" required id="EmployerCode" readonly>
                          
                        </div>
                        <div class="col-md-4 form-group">
                          <label>Date of Hire</label>
                          <input type="text" value="{{old('RegDate')}}" name="RegDate" class="form-control" required id="DateofHire" readonly>
                          
                        </div>
                        <div class="col-md-4 form-group">
                          <label>Current Appointment</label>
                          <input type="text" value="{{old('RegDate')}}" name="RegDate" class="form-control" required id="DOCA" readonly>
                          
                        </div>
                        <div class="col-md-4 form-group">
                          <label>ROD</label>
                          <input type="text" value="{{old('RegDate')}}" name="RegDate" class="form-control" required id="ROD" readonly>
                          
                        </div>
                         <div class="col-md-4 form-group">
                          <label>Monthly Share Contribution</label>
                          <input type="text" value="{{old('MonthlyContribution')}}" name="MonthlyContribution" class="form-control" required id="MonthlyContribution" >
                          
                        </div>
                         <div class="col-md-4 form-group">
                          <label>Risk Fund</label>
                          <input type="text" value="200" name="RiskFund" class="form-control" required id="RiskFund" readonly>
                          
                        </div>


                         

                            

                          </div>

                           


                            <div class="row" style="border: 1px dotted gray">
                            
                              <h5 style="text-align: center;">Home Location Details</h5>

                               <div class="col-md-4 form-group">
                          <label>County</label>
                          <input type="text" name="county" class="form-control" id="County" readonly  value="{{old('county')}}" required>
                          
                        </div>
                        <div class="col-md-4 form-group">
                          <label>Sub County</label>
                          <input type="text" name="sub_county" class="form-control" id="SubCounty" readonly required  value="{{old('sub_county')}}">
                          
                        </div>
                         
                          
                        <div class="col-md-4 form-group">
                          <label>Physical  Location</label>
                          <input type="text" name="sublocation" class="form-control"  id="Sublocation" value="{{old('sublocation')}}" readonly >
                          
                        </div>
                      </div>

                       <div class="row" style="border: 1px dotted gray">

                       

                         
                          <h5 style="text-align: center;">Resident Location Details</h5>
                               <div class="col-md-4 form-group">
                          <label>County</label>
                          <input type="text" name="Rcounty" class="form-control" id="RCounty" readonly  value="{{old('Rcounty')}}" required>
                          
                        </div>
                        <div class="col-md-4 form-group">
                          <label>Sub County</label>
                          <input type="text" name="Rsub_county" class="form-control" id="RSubCounty" readonly required  value="{{old('Rsub_county')}}">
                          
                        </div>
                         
                        <div class="col-md-4 form-group">
                          <label>Physical Location</label>
                          <input type="text" name="RVillage" class="form-control"  id="VillageName"   required>
                          
                        </div>
                      </div>

                       <div class="row" style="border: 1px dotted gray">

                          
                        <h5 style="text-align: center;">Contact Details</h5>
                          <div class="row" style="margin-bottom: 3%;">
                             <div class="col-md-3 form-group">
                          <label>Email Address</label>
                          <input type="email" value="{{old('email')}}" name="email" class="form-control" id="Email"  >
                          
                        </div>
                        <div class="col-md-3 form-group">
                          <label> Telephone</label>
                          <input type="text" value="{{old('Telephone')}}" name="Telephone" class="form-control" id="Telephone"  >
                          
                        </div>

                         <div class="col-md-3 form-group">
                          <label>Alt  Telephone</label>
                          <input type="text" value="{{old('Cellphone')}}" name="Cellphone" class="form-control" id="Cellphone"  >
                          
                        </div>
                         <div class="col-md-3 form-group">
                          <label>Postal Address</label>
                          <input type="text" value="{{old('Cellphone')}}" name="Cellphone" class="form-control" id="Cellphone"  >
                          
                        </div>

                            
                          </div>
                               
                              




                           </div>
                          
                        </div><!---End Of 9-->

                        <div class="col-md-3">
                           <div class="row" style="border: double">
                                              
                                              <img src="{{asset('backend/assets/images/k.png')}}" class="rounded img-fluid" id="thumbnil" alt="Avatar"   style="height: 140px;width: 140px;border-radius:2%;margin-left:25%; margin-bottom: 2%;">
                                            </div>

                                   <div class="row" style="border: double;margin-top: 2%;padding-bottom: 2%;">
                                    
                                     <h5 style="text-align: center;">Next Of Kin Details</h5>

                                       <input type="hidden" name="is_under_age" class="form-control" id="IsUnderAge"  value="{{old('is_under_age')}}" readonly >


                        <div class="col-md-12 form-group isunderage isstudent">
                          <label>Next of Kin Name</label>
                          <input type="text" value="{{old('parent_name')}}" name="parent_name" class="form-control" id="NextOfKin" required >
                          
                        </div>
                        <div class="col-md-12 form-group isunderage isstudent">
                          <label>Next of Kin Id Number</label>
                          <input type="text" value="{{old('parent_name')}}" name="parent_name" class="form-control" id="NextOfKinIdNum" required >
                          
                        </div>
                         <div class="col-md-12 form-group isunderage">
                          <label>Next Relationship</label>
                           <input type="text" value="{{old('relationship')}}" name="relationship" class="form-control" id="NextOfKinRelation"  required>


                          
                          
                        </div>
                        <div class="col-md-12 form-group isunderage isstudent">
                          <label>Next of Kin Phone</label>
                          <input type="text" value="{{old('id_num')}}" name="id_num" class="form-control" id="NextofKinID"  >
                          
                        </div>

                        <div class="col-md-12 form-group isunderage isstudent">
                          <label>Next of Kin Email Address</label>
                          <input type="text" name="nextofkinemail" class="form-control" id="nextofkinemail" value="{{old('nextofkinemail')}}" >
                          
                        </div>

                        
                         
                        <div class="col-md-12 form-group isunderage isstudent "  >
                          <label>Next of Postal Address</label>
                          <input type="text" name="nextofkinoccupation" class="form-control" value="{{old('nextofkinoccupation')}}"  
                          id="NextofPostalAddress" >
                          
                        </div>

                        <div class="col-md-12 form-group isunderage isstudent "  >
                          <label>Next of Current Address</label>
                          <input type="text" name="nextofkinoccupation" class="form-control" value="{{old('nextofkinoccupation')}}"  id="NextofkinCurrentAddress" >
                          
                        </div>


                                   </div>

                                    
                          
                        </div>





                        
                        
                      

                      
                         

                         
                       
                       

                        
                        
                      </div>


                      <div class="row">
                         <hr>
                        
                         
                       </div>





                                               

                                       
                                                                

                                                              
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                    </div>

                                                    <div class="tab-pane" id="profile-tab-2">
                                                      <hr style="height:4px;border-width:0;color:gray;background-color:green;width: 100%;margin-top: 2px;margin-bottom: 2px">


                                                     
                      

                          


                               <div class="row"  style="margin-bottom:3.5%;;">

                                                      <div class="col-md-12">
                                                        <hr style="height:4px;border-width:0;color:gray;background-color:green;width: 100%;">
                                                        
                                                    
                                                              
                                                       
                                                    
                                                        <div class="row"   style="border: double;">
                                                            <legend style="text-align:center;font-color:red;font-weight:bold;font-size:20px;">BENEFICIARY Section</legend>
                       


                       <div class="row" style="margin-bottom: 2.5%;">
            <div class="col-md-3 form-group">
              <label>Name</label>
              <input type="text" name="BeneficiaryName" class="form-control" required id="BeneficiaryName">
              @if ($errors->has('DocumentCategory'))
              <span class="help-block">
                <strong>{{ $errors->first('DocumentCategory') }}</strong>
              </span>
              @endif
            </div>
            <div class="col-md-3 form-group">
              <label>Id/Birth Cert Number</label>
              <input type="text" name="BeneficiaryNumber" class="form-control" required id="BeneficiaryNumber">
              @if ($errors->has('DocumentCategory'))
              <span class="help-block">
                <strong>{{ $errors->first('DocumentCategory') }}</strong>
              </span>
              @endif
            </div>
            <div class="col-md-2 form-group">
              <label>Relationship</label>
              {{ Form::select('RoleName',([null=>'--Select One--'] + $relationships), null, ['class'=>'form-control','required'=>false,'id'=>'BeneficiaryRelationship','style'=>'width:100%']) }}
             </div>
            <div class="col-md-2 form-group">
              <label>PERCENTAGE</label>
              <input type="text" name="BeneficiaryPERCENTAGE" class="form-control" required  id="BeneficiaryPERCENTAGE">
              @if ($errors->has('DocumentCategory'))
              <span class="help-block">
                <strong>{{ $errors->first('DocumentCategory') }}</strong>
              </span>
              @endif
            </div>
            

            

            <div class="col-md-2 form-group">
              <label>Action</label><br>
              <button class="btn btn-sm btn-secondary"  id="AddDocument">
                <span class="fa fa-upload"></span>
              Add Beneficiary</button>

            </div>

          </div>
           <div class="row" style="margin-bottom: 2.5%;">

            <div class="col-md-12 table-responsive" >
              <table class="table table-bordered table-stripped">
                <thead>
                  <tr>
                    <th>Action</th>
                    <th>Document Name</th>
                    <th>Document Ref</th>
                    <th>Date Uploaded</th>
                  </tr>
                </thead>
               <tbody id="DocumentContainer">
                
              </tbody>
                
              </table>
              
            </div>


           </div>








                                                        

                                                      </div>
                                                    </div>
                                                    </div>
                                                        

                                                        
                       
                         



                                                      
                                                    </div>

                                                     <div class="tab-pane" id="budgetPanel">
                                                      <div class="row"    style="border: double;">
                                                         <hr style="height:4px;border-width:0;color:gray;background-color:green;width: 100%;">

                                                           <div class="col-md-12" style="margin-bottom: 3%;">
                     
                     
                      <div class="row"  style="margin-top: 1%;">
                        <h5  style="text-align: center;margin-bottom:2.5%;font-weight: bold;color:blue;">APPLICANTS'S BACKGROUND INFORMATION</h5>
                        <div class="col-md-6 form-group">
                          <label>Do you Suffer from Any Chronic Illness or Condition</label><br>
                  {{ Form::radio('anyChronicIllness', 'Yes',$model->anyChronicIllness,array("class"=>"colored-blue")) }} Yes

                  {{ Form::radio('anyChronicIllness', 'No',$model->anyChronicIllness,array("class"=>"colored-blue")) }} No

                          
                        </div>
                         <div class="col-md-3">
                          <label>HouseHold Income</label>
                            {{ Form::select('house_holdincome',([null=>'--Select One--'] + array("Employment"=>"Employment","Casual"=>"Casual","Farming and Pastrolism"=>"Pastrolism")), $model->house_holdincome, ['class'=>'form-control','required'=>true,'id'=>'HouseHoldIncome','style'=>'width:100%']) }}

                        </div>
                        <div class="col-md-3">
                          <label>Housing</label>
                            {{ Form::select('housedwelling',([null=>'--Select One--'] + array("Owner Occupier-Permanent"=>"Owner Occupier-Permanent","Owner Occupier-Semi Permanent"=>"Owner Occupier-Semi Permanent","Rented-Permanent"=>"Rented-Permanent","Rented-emi Permanent"=>"Rented-Semi Permanent")), $model->housedwelling, ['class'=>'form-control','required'=>true,'id'=>'HousingCode','style'=>'width:100%']) }}

                        </div>
                       
                        
                      </div>
                      <div class="row">
                        <div class="col-md-3 form-group">
                          <label>Average Monthly Income(Ksh)</label>
                            <input type="text" name="average_monthlyincome" value="{{$model->average_monthlyincome}}" class="form-control"  id="AverageMonthlyIncome">

                        </div>

                        <div class="col-md-4 form-group">
                          <label>No Of Siblings in Secondary School</label>
                            <input type="text" name="NoOfSiblingInSecondarySchool" value="{{$model->NoOfSiblingInSecondarySchool}}" class="form-control" id="NoOfSiblingInSecondarySchool">

                        </div>
                         <div class="col-md-3 form-group">
                          <label>No Of Siblings in University</label>
                            <input type="text" name="NoOfSiblingInUniversitySchool" value="{{$model->NoOfSiblingInUniversitySchool}}" class="form-control" id="NoOfSiblingInUniversitySchool">

                        </div>
                        <div class="col-md-3 form-group">
                          <label>No of Household Members With Disabilities</label>
                            <input type="text" name="NoOfHouseholdwithDisabilities" value="{{$model->NoOfHouseholdwithDisabilities}}" class="form-control"  id="NoOfHouseholdwithDisabilities">

                        </div>

                        <div class="col-md-6 form-group">
                          <label>Are Your Parents Alive(Describe Status)</label>
                            
                            <br>
                  {{ Form::radio('ParentLivestatus', 'Both Parent ALive',$model->ParentLivestatus,array("class"=>"colored-blue")) }} Both Parent ALive

                  {{ Form::radio('ParentLivestatus', 'One Parent ALive',$model->ParentLivestatus,array("class"=>"colored-blue")) }} One Parent ALive


                    {{ Form::radio('ParentLivestatus', 'Both Parents Deceased',$model->ParentLivestatus,array("class"=>"colored-blue")) }}Both Parents Deceased

                        </div>
                         <div class="col-md-3 form-group">
                          <label>Are your parents Living together</label>
                            
                            <br>
                  {{ Form::radio('ParentsLivesTogether', 'Yes',$model->ParentsLivesTogether,array("class"=>"colored-blue")) }} Yes

                  {{ Form::radio('ParentsLivesTogether', 'No',$model->ParentsLivesTogether,array("class"=>"colored-blue")) }} No

                        </div>
                        
                      </div>
                      

                       


                       
                     

                      
                    </div>
                                                        
                                                      </div>
                                                        
                                                      
                                             </div>


                                             






                                                   

                                                    <div class="tab-pane" id="Submission">
                                                        <div class="row"  style="margin-bottom:3.5%;;">
                                                              
                                                       
                                                    
                                                        <div class="row">
                       <hr style="height:4px;border-width:0;color:gray;background-color:green;width: 100%;">

                        <div class="col-md-12">
                          <div class="row"   style="border: double">
                         <h5  style="text-align: center;margin-bottom:2.5%;font-weight: bold;color:blue;">DSO Officer Remarks</h5>


                        <div class="col-md-3 form-group">
                          <label>DSO Name</label>
                            <input type="text" name="ncpwd_countyofficername" value="{{(isset($model->ncpwd_countyofficername))?$model->ncpwd_countyofficername:Auth::User()->name}}" class="form-control"  readonly  id="DSOName">

                        </div>
                        <div class="col-md-3 form-group">
                          <label>DSO County</label>
                            <input type="text" name="ncpwd_officercounty" value="{{(strlen($model->ncpwd_officercounty)>0)? $model->ncpwd_officercounty :  'HQ'}}" class="form-control" readonly  id="DSOCounty">

                        </div>

                        <div class="col-md-6 form-group">
                          <label>Recommend the Applicant to NDFPWD for Education Assistance Support</label>
                           <br>
                  {{ Form::radio('recommend_applicant', 'I Do',$model->recommend_applicant,array("class"=>"colored-blue")) }} I Do

                  {{ Form::radio('recommend_applicant', 'I Dont',$model->recommend_applicant,array("class"=>"colored-blue",'style'=>'margin-left:10%;')) }} I Dont

                        </div>

                          <div class="row"  style="margin-bottom: 3%;">

                        <div class="col-md-12 form-group">
                          <label>Reason for Recommendation/Rejection </label>
                            <textarea id="DSORecommendation" rows="3" name="reasonforrecommendorreject" class="form-control" required>{{$model->reasonforrecommendorreject}}</textarea>

                        </div>
                        
                      </div>

                      </div>
                    
                          
                        </div>
                       
                         
                       </div>

                       


                                                 </div>
                                             </div>

                                                    <ul class="list-inline mb-0 wizard">
                                                        <li class="previous list-inline-item">
                                                            <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                                        </li>
                                                        <li class="next list-inline-item float-end">
                                                            <a href="javascript: void(0);" class="btn btn-secondary" id="ButtonName">Next</a>
                                                        </li>
                                                    </ul>

                                                </div> <!-- tab-content -->
                                            </div> <!-- end #progressbarwizard-->
                                        </form>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->






                           
                        </div>
                        <!-- end row -->

                                   
                                    
                                </div> <!-- end card-->
          </div>
       

      



    


@stop
@push('scripts')
     
  
   <script src="{{asset('backend/assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>

        <!-- Init js-->



         
        <script type="text/javascript">
        	$("#WorkStationCode,#WorkStationCouncil,#WorkVillage,#SubLocationCode,#WorkLocation,#WorkDivision,#WorkWard,#SubCountyCode").select2();

        


        	

        	

        	

        	$(document).ready(function() {

              function ValidateSchoolDetail()
              {

                var SchoolCountyId=$("#ICounty").val();
                var SchoolSubCounty=$("#ISubCounty").val();
                var SchoolId=$("#schoolId").val();
                var SchoolPostalAddress=$("#institutionpostaladdress").val();
                var SchoolTelephone=$("#InstitutionTelephone").val();
                var SchoolEmail=$("#InstitutionEmail").val();
                var SchoolPhysicalLocation= $("#Physicaladdress").val();
                var SchoolLevel=$("#SchoolLevel").val();
                var AccountName=$("#AccountName").val();
                var AccountNum=$("#AccountNumber").val();
                var BankName=$("#BankName").val();
                var BankBranch=$("#BankBranch").val();
                var SchoolStartDate=$("#from").val();
                var SchoolEndDate=$("#to").val();
                var ClassName=$("#Kclass").val();
                 var StudRegno=$("#StudRegno").val();
                 var Duration=$("#Duration").val();
                 var ExpectedQualifaction=$("#ExpectedQualifaction").val();
                 var PreviousQualification=$("#PreviousQualification").val();
                 var PreviousGradeAwarded=$("#PreviousGradeAwarded").val();
                 var FeeAmount=$("#FeeAmount").val();
                 var AmountRequestedFromNDFPWD=$("#AmountRequestedFromNDFPWD").val();
                 var owncontribution=$("#owncontribution").val();
                 var Funds=$("#Funds").val();
                 var SourceOfFund =$("#SourceOfFund").val();
                 var YearReceived=$("#YearReceived").val();
                 var AmountReceived=$("#AmountReceived").val();
                 var NameOfOfficer=$("#NameOfOfficer").val();
                 var OfficerDesignation=$("#OfficerDesignation").val();
                 var OfficerTelephone=$("#OfficerTelephone").val();
                 var NewSchoolId=$("#NewSchoolId").val();
                 var StudentSchooName=$("#StudentSchooName").val();
                   if(SchoolCountyId=="" || SchoolSubCounty=="" || NewSchoolId=="")
                   {
                    swal({
                  title: "Error",
                  text: "Please Input School Details",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonText: 'Close',
                  });  
                      return false;

                   }else if(ClassName=="")
                   {
                    swal({
                  title: "Error",
                  text: "Select Class",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonText: 'Close',
                  });  
                    return false;

                   }
                   else if(FeeAmount=="")
                   {
                    swal({
                  title: "Error",
                  text: "Please Enter Fee Amount",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonText: 'Close',
                  });  
                    return false;

                   }
                   else if(SchoolStartDate==""  || SchoolEndDate=="")
                   {
                    swal({
                  title: "Error",
                  text: "Please School Start Date and End Date",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonText: 'Close',
                  });  
                    return false;

                   }




                   else{
                     var SchoolDetailsPostUrl="<?=url('/EducationMis/ScholarshipApplications/SchoolDetails')?>";
                      var RegNo= $("#RegNumber").val();
                     
                



                     $.post(SchoolDetailsPostUrl,{
                      'RegNo':RegNo,
                      'SchoolCountyId':SchoolCountyId,
                      'SchoolSubCounty':SchoolSubCounty,
                      'SchoolId':SchoolId,
                      'SchoolPostalAddress':SchoolPostalAddress,
                      'SchoolTelephone':SchoolTelephone,
                      'SchoolEmail':SchoolEmail,
                      'SchoolPhysicalLocation':SchoolPhysicalLocation,
                      'SchoolLevel':SchoolLevel,
                      'AccountNum':AccountNum,
                      'AccountName':AccountName,
                      'BankName':BankName,
                      'BankBranch':BankBranch,
                      'SchoolStartDate':SchoolStartDate,
                      'SchoolEndDate':SchoolEndDate,
                      'ClassName':ClassName,
                      'StudRegno':StudRegno,
                      'Duration':Duration,
                      'ExpectedQualifaction':ExpectedQualifaction,
                      'PreviousQualification':PreviousQualification,
                      'PreviousGradeAwarded':PreviousGradeAwarded,
                      'FeeAmount':FeeAmount,
                      'AmountRequestedFromNDFPWD':AmountRequestedFromNDFPWD,
                      'owncontribution':owncontribution,
                      'Funds':Funds,
                      'SourceOfFund':SourceOfFund,
                      'YearReceived':YearReceived,
                      'AmountReceived':AmountReceived,
                      'NameOfOfficer':NameOfOfficer,
                      'OfficerDesignation':OfficerDesignation,
                      'OfficerTelephone':OfficerTelephone,
                      'NewSchoolId':NewSchoolId,
                      'StudentSchooName':StudentSchooName,
                    },function(data){
                      console.log(data);



                     })





                   }
                }


                function ValidateBackGroundDetails()
                {
                  
                   var HasAnyChronicIllness=($("input[name=anyChronicIllness]:checked").val());
                   var HouseHoldIncome=$("#HouseHoldIncome").val();
                   var HousingCode=$("#HousingCode").val();
                   var AverageMonthlyIncome=$("#AverageMonthlyIncome").val();
                   var NoOfSiblingInSecondarySchool=$("#NoOfSiblingInSecondarySchool").val();
                   var NoOfSiblingInUniversitySchool=$("#NoOfSiblingInUniversitySchool").val();
                   var NoOfHouseholdwithDisabilities=$("#NoOfHouseholdwithDisabilities").val();
                   var ParentLivestatus=($("input[name=ParentLivestatus]:checked").val());
                   var ParentsLivesTogether=($("input[name=ParentsLivesTogether]:checked").val());
                   var RegNo= $("#RegNumber").val();
                    var BackGroundDetailsPostUrl="<?=url('/EducationMis/ScholarshipApplications/BackGroundDetails')?>";
                      var RegNo= $("#RegNumber").val();
                        $.post(BackGroundDetailsPostUrl,{
                          'RegNo':RegNo,
                          'HasAnyChronicIllness':HasAnyChronicIllness,
                          'HouseHoldIncome':HouseHoldIncome,
                          'HousingCode':HousingCode,
                          'AverageMonthlyIncome':AverageMonthlyIncome,
                          'NoOfSiblingInSecondarySchool':NoOfSiblingInSecondarySchool,
                          'NoOfSiblingInUniversitySchool':NoOfSiblingInUniversitySchool,
                          'NoOfHouseholdwithDisabilities':NoOfHouseholdwithDisabilities,
                          'ParentLivestatus':ParentLivestatus,
                          'ParentsLivesTogether':ParentsLivesTogether,
                        },function(data){


                        });









                  
                }

            function SubMitToCountyAppraisal()
            {

               var  DSOName=$("#DSOName").val();
               var  DSOCounty=$("#DSOCounty").val();
               var DSORecommendation=$("#DSORecommendation").val();
               var recommend_applicant=($("input[name=recommend_applicant]:checked").val());
               var RegNo= $("#RegNumber").val();


               
      var DeleteUrl="<?=url('/EducationMis/CountyPortal/SubMitApplicationForAppraisal')?>";
      var token="<?=csrf_token();?>";


       swal({
    title: "Confirm To Submit This Application For Appraisal",
    type: "info",
    showCancelButton: true,
    confirmButtonColor: "#2862e7",
    confirmButtonText: "Confirm",
    cancelButtonText: "Cancel",
    closeOnConfirm: false,
    closeOnCancel: false
  },
    function (isConfirm) {
      if (isConfirm) {
        
         $.post(DeleteUrl,{
          '_token':token,
          'DSOName':DSOName,
          'DSOCounty':DSOCounty,
          'DSORecommendation':DSORecommendation,
          'recommend_applicant':recommend_applicant,
          'RegNo':RegNo







       },function(response){
             if(response['Code']==1)
             {
               swal({
            title: "Successful",
            text: "Application Submit  Successful",
            type: "success",
            showCancelButton: false,
            confirmButtonText: 'Close',
            });
               window.location.replace("<?=url('/EducationMis/CountyPortal/ApplicationPendingAppralsal')?>");

             }else{
               swal({
            title: "Not Successful",
            text:response['MessageBody'],
            type: "error",
            showCancelButton: false,
            confirmButtonText: 'Close',
            });

             }

               
                 



             });

      } else {
        swal("Cancelled", "Worry Not.", "error");
      }
    });



            }

        		function ValidateBasicApplicantDetail()
        		{


                      

                  var Name=$("#Name").val();
                  var DOBDate =$("#DOBDate").val();
                  var Gender=$("#Gender").val();
                  var Idno=$("#Idno").val();
                  var RegNo= $("#RegNumber").val();
                  var CountyId= $("#CountyId").val();
                  var HomeCounty=$("#County").val();
                  var HomeSubCounty=$("#SubCounty").val();
                  var HomeConstituency=$("#Constituency").val();
                  var HomeWard=$("#Ward").val();
                  var HomeLocation=$("#Location").val();
                  var HomeSublocation=$("#Sublocation").val();
                  var Email=$("#Email").val();
                  var RegDate=$("#RegDate").val();
                  var ScholarshipType=$("#ScholarshipType").val();
                  var NextOfKinNames=$("#NextOfKin").val();
                  var NextofKinIDNum=$("#NextofKinID").val();
                  var NextOfKinRelation=$("#NextOfKinRelation").val();
                  var NextofkinOccupation=$("#NextofkinOccupation").val();
                  var Nextofkinemail=$("#nextofkinemail").val();
                  var NextofPostalAddress=$("#NextofPostalAddress").val();
                  var NextofkinCurrentAddress=$("#NextofkinCurrentAddress").val();
                  var NextOfKinIdNum=$("#NextOfKinIdNum").val();

                 
                  var Telephone= $("#Telephone").val();
                  var Cellphone=$("#Cellphone").val();
                  var ResdidentCounty=$("#RCounty").val();
                  var ResdidentSubCounty= $("#RSubCounty").val();
                  var ResdidentConstituency=$("#RConstituency").val();
                  var ResdidentLocation=$("#RWard").val();
                  var ResdidentSubLocation=$("#RLocation").val();
                  var Village= $("#VillageName").val();
                  var MonthlyContribution=$("#MonthlyContribution").val();
                  var MemberEmployerName=$("#EmployerName").val();
                  var EmployerCode=$("#EmployerCode").val();

                   
                 
                    if(RegNo=="")
                    {
                      swal({
                  title: "Error",
                  text: "Please Enter Payroll Number",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonText: 'Close',
                  });  
                      return false;

                    }
                    else if(Name=="")
                    {
                      swal({
                  title: "Error",
                  text: "Please Select Scholarship Type",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonText: 'Close',
                  });  
                      return false;

                    }
                    else if(Email=="")
                    {
                      swal({
                  title: "Error",
                  text: "Please Enter Member Email",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonText: 'Close',
                  });  
                      return false;

                    }
                    else if(Telephone=="")
                    {
                      swal({
                  title: "Error",
                  text: "Please Enter Member Telephone",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonText: 'Close',
                  });  
                      return false;

                    }


                    
                    else if(MonthlyContribution=="")
                    {
                      swal({
                  title: "Error",
                  text: "Please Enter Monthly Share Contribution",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonText: 'Close',
                  });  
                      return false;

                    }
                    else if(NextOfKinNames=="" || NextOfKinIdNum=="")
                    {
                      swal({
                  title: "Error",
                  text: "Please Fill Next of Kins Details",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonText: 'Close',
                  });  
                      return false;

                    }

                    
                     
                     

                    else{

                       var BasicDetailsPostUrl="<?=url('AdminModule/ManageMembers/BasicMemberDetails')?>";
                   var returntrue=0;
                     $.post(BasicDetailsPostUrl,{
                      'RegNo':RegNo,
                      'ApplicantName':Name,
                      'ApplicantIdNum':Idno,
                      'DoB':DOBDate,
                      'RegDate':RegDate,
                      'Gender':Gender,
                      'MemberEmployerName':MemberEmployerName,
                      'EmployerCode':EmployerCode,

                     
                      'ApplicantHomeCountyName':HomeCounty,
                      'ApplicantHomeSubCountyName':HomeSubCounty,
                      'ApplicantHomeConstituencyName':HomeConstituency,
                      'ApplicantHomeWardName':HomeWard,
                      'ApplicantHomeLocationName':HomeLocation,
                      'ApplicantHomeSubLocationName':HomeSublocation,
                      'ApplicantResidentCountyName':ResdidentCounty,
                      'ApplicantResidentSubCountyName':ResdidentSubCounty,
                      'ApplicantResidentConstituencyName':ResdidentConstituency,
                      'ApplicantResidentLocationName':ResdidentLocation,
                      'ApplicantResidentSubLocationName':ResdidentSubLocation,
                      'ApplicantResidentVillageName':Village,
                      'ApplicantEmail':Email,
                      'ApplicantTelephone':Telephone,
                      'ApplicantAltTelephone':Cellphone,
                      'ApplicantNextofKinName':NextOfKinNames,
                      'ApplicantNextOfKinRelation':NextOfKinRelation,
                      'ApplicantNextOfKinTelephone':NextofKinIDNum,
                      'ApplicantNextOfEmail':Nextofkinemail,
                      'ApplicantNextOfKinOccupation':NextofkinOccupation,
                      "NextofkinCurrentAddress":NextofkinCurrentAddress,
                      'NextofPostalAddress':NextofPostalAddress,
                      'NextOfKinIdNum':NextOfKinIdNum,
                      'MonthlyContribution':MonthlyContribution,



   





                     },function(response){
                         var data=response;
                         var code=data['Code'];
                           
                          if(code=="0")
                          {



                                swal({
                  title: "Error",
                  text: data['Message'],
                  type: "error",
                  showCancelButton: false,
                  confirmButtonText: 'Close',
                  });  
                               return false;


                          }else{
                             return true;
                          }

                     });



                    }

                   









                 



                     return returntrue;
                   



                  


                       
                          
                         
                        
                     
                        
                        
                        
                       
                         
                        
                        
                           
                           
                           
        			
              
        		}


    $('#progressbarwizard').bootstrapWizard({
        'onTabShow': function(tab, navigation, index) {

            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;

            $('#progressbarwizard .progress-bar').css({width:$percent+'%'});
            },
        'tabClass': 'nav nav-pills',
        'onTabClick': function(tab, navigation, index,stepDirection) {
                tab.preventDefault();
            },
        'onNext': function(tab, navigation, index){
             

        	if(index==1)
        	{
        	var test=	ValidateBasicApplicantDetail();
           $("#ButtonName").html("Next");
                 $("#ButtonName").addClass("btn btn-sm btn-secondary");


           
        	 return test;
           




        	}
          if(index==2)
          {
          var test= ValidateSchoolDetail();
           $("#ButtonName").html("Next");
                 $("#ButtonName").addClass("btn btn-sm btn-secondary");



           
           return test;
             


          }




          else if(index==3)
        	{
		        	var testBudget=	ValidateBackGroundDetails();
		        	  if(testBudget==false)
		        	  {
		        	  	return false;
		        	  }
                 $("#ButtonName").html("Submit For County Appraisal");
                 $("#ButtonName").addClass("btn btn-sm btn-success");
        	}
        	else if(index==4)
        	{
            var testBudget= SubMitToCountyAppraisal();

		          
               
        	}


        }

    });

});
        </script>
         

   
       <script>
        $(document).ready(function() { 
                $('input[type="radio"]').click(function() { 
                    var inputValue = $(this).attr("value");
                    if(inputValue == 'yes')
                    {
                        document.getElementById("here").style.display = "block"; 
                    }
                    else
                    {
                        document.getElementById("here").style.display = "none";
                    }
                }); 
            }); 
    </script>

    
 

  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

     <script type="text/javascript">

       $("#ScholarshipType").on("change",function(e){
        e.preventDefault();
          var scholarship=$(this).val();
              if(scholarship=="Wezesha"    ||    scholarship=="WEZESHA" )
              {
                $("#AppantType").val("Parent");
                $(".isparent").removeClass('d-none');
                 $(".mzazi").attr("required",true);
              }else{
                 $("#AppantType").val("Student");
                $(".isparent").addClass('d-none');
                $(".mzazi").attr("required",false);
  
              }


       });


       $("#ScholarshipType").on("change",function(e){
        e.preventDefault();
          var scholarship=$(this).val();
              if(scholarship.length>0)
              {
                var cohortname=scholarship+" <?=date('Y')?> Cohort";
                  $("#Cohort").val(cohortname);
                  $("#Cohort").attr("readonly",true);
              }


       });


       








      $( "#from" )
        .datepicker({
          changeMonth: true,
          changeYear:true,
          numberOfMonths: 1
        });



      $( "#to" )
        .datepicker({
          changeMonth: true,
          changeYear:true,
          numberOfMonths: 1
        });

     $("#Query").on("click",function(e){
        e.preventDefault();
          
           

                 var url="<?=url('/AdminModule/ManageMembers/GetApplicantData')?>";
               var no=$("#Regno").val();
                
              

               
              if(no.length>0)
              {
                 $.get(url,{'PayrollNum':no},function(response){
                     

                    var Code=response['Code'];
                     if(Code==200)
                     {
                     var data=response['EmployeeMasterData'];
                     $("#RegNumber").val(data.PayrollNum);
                     $("#Name").val(data.Fullname );
                     $("#Idno").val(data.IDNum );
                     $("#DOBDate").val(data.BirthDate);
                     $("#Gender").val(data.Gender);
                     $("#JobDescription").val(data.DesignationName);
                     $("#EmployerName").val(data.EmployerName);
                     $("#EmployerCode").val(data.EmployerCode);
                     $("#DateofHire").val(data.DateOfHire);
                     $("#DOCA").val(data.DateOfCurrentAppointment);
                     $("#ROD").val(data.ROD);

                     }else{
                        swal({
                        title: "Error",
                        text: response['Message'],
                        type: "warning",
                        showCancelButton: false,
                        confirmButtonText: 'Close',
                        });

                       $("#RegNumber").val("");
                       $("#Name").val("" );
                       $("#Idno").val("" );
                       $("#DOBDate").val("");
                       $("#Gender").val("");
                       $("#JobDescription").val("");
                       $("#EmployerName").val("");
                       $("#DateofHire").val("");
                       $("#DOCA").val("");
                       $("#ROD").val("");
                     }
                   

                    
                      
                     
                       });
              }

              
              

     });
 </script>
 <script type="text/javascript">
     function drawSerial(no)
     {
        var url="<?=url('/FinanceModule/Applicant/GetActiveSerials')?>";
             $.get(url,{'Number':no,'Module':'Education Support'},function(data){
              $("#SerailNumber").html(data);
             });

     }

    function drawDisabilityTypes(id)
    {
          var url="<?=url('/EducationMis/PersonalDetail/ApplicantGetDisabilityTypes')?>";
             $.get(url,{'Number':id},function(data){
              $("#disabilityTypes").html(data);
             });

    }
   


 </script>
 <script type="text/javascript">
    $("#Funds").on("change",function(e){
      e.preventDefault();
        var value=$(this).val();
          if(value=="Yes")
          {
            $(".fundedbefore").removeClass("d-none");
            $(".amfunded").attr("required",true);
          }else{
            $(".fundedbefore").addClass("d-none");
             $(".amfunded").attr("required",false);
          }
    });
 </script>
 <script type="text/javascript">

   $("#ICounty,#ISubCounty,#schoolId").select2();
     $("#ICounty").on("change",function(e){
      e.preventDefault();
         var id=$(this).val();
          
          if(id.length>0)
          {
            var url="<?=url('/EducationMis/School/GetSubCountySchoolsById')?>/"+id;
             $.get(url,function(data){
               $("#ISubCounty").html(data);

             });

          }

     });


     $("#ISubCounty").on("change",function(e){

       e.preventDefault();
         var id=$(this).val();
          
          if(id.length>0)
          {
            var url="<?=url('/FinanceModule/Education/GetLocations')?>";
             $.get(url,{'SubCounty':id},function(data){
               $("#ILOcation").html(data);

             });

          }


     });

       $("#ISubCounty").on("change",function(e){

       e.preventDefault();
         var id=$(this).val();


          
          if(id.length>0)
          {
            var url="<?=url('/EducationMis/School/GetSchoolsInASubCounty')?>";
             $.get(url,{'SubCounty':id},function(data){
               $("#schoolId").html(data);

             });

          }


     });


       $("#schoolId").on("change",function(e){

       e.preventDefault();
         var id=$(this).val();


          
          if(id.length>0)
          {
            var url="<?=url('/EducationMis/School/GetSchoolDetails')?>";
             $.get(url,{'SchoolId':id},function(data){
              
               $("#institutionpostaladdress").val(data.SchoolPostalAddress);
               $("#InstitutionTelephone").val(data.SchoolTelephone);
               $("#InstitutionEmail").val(data.SchoolEmail);
               $("#Physicaladdress").val(data.SchoolPhysicalLocation);
               $("#SchoolLevel").val(data.SchoolLevel);
               $("#AccountName").val(data.AccountName);
               $("#AccountNumber").val(data.AccountNum);
               $("#BankName").val(data.BankName);
               $("#BankBranch").val(data.BankBranch);
               $("#StudentSchooName").val(data.SchoolName);
               $("#NewSchoolId").val(data.SchoolId);


                 if(data.SchoolLevel.length>0)
                 {
                  var Level=data.SchoolLevel;
                  var url="<?=url('/FinanceModule/Education/GetLevelClasses')?>";
             $.get(url,{'Level':Level},function(data){
               $("#Kclass").html(data);

             });


                 }


             });

          }


     });







      
 </script>
 <script type="text/javascript">
   
   $("body").on("change","#Duration",function(e){
    e.preventDefault();
      var duration=$("#Duration").val();
      var startDate=$("#from").val();
        if(startDate.length>0)
        {
           var url="<?=url('/FinanceModule/Education/getEndDate')?>";
             $.get(url,{'startDate':startDate,'Duration':duration},function(data){
               $("#to").val(data);

             });

        }

        

   })
 </script>
 <script type="text/javascript">
    
   

        $("#AddDocument").on("click",function(e){
            e.preventDefault();
            var BeneficiaryName=$("#BeneficiaryName").val();
            var BeneficiaryNumber=$("#BeneficiaryNumber").val();
            var BeneficiaryPERCENTAGE=$("#BeneficiaryPERCENTAGE").val();
            var BeneficiaryRelationship=$("#BeneficiaryRelationship").val();

            
           







           });



            function FetchDocuments()
            {
               
                var RegNo= $("#RegNumber").val();
                 var GetDocumentUrl="<?=url('EducationMis/Scholarship/GetDocumentList')?>";



                  $.get(GetDocumentUrl,{'RegNo':RegNo},function(data){
                     $("#DocumentContainer").html(data);

                  });

            }

            FetchDocuments();


            



             $("body").on("click",".DeleteDocument",function(e){
    e.preventDefault();
      var DeleteUrl=$(this).attr("data-url");
      var token="<?=csrf_token();?>";


       swal({
    title: "Confirm To Delete Document",
    type: "info",
    showCancelButton: true,
    confirmButtonColor: "#2862e7",
    confirmButtonText: "Confirm",
    cancelButtonText: "Cancel",
    closeOnConfirm: false,
    closeOnCancel: false
  },
    function (isConfirm) {
      if (isConfirm) {
        
         $.post(DeleteUrl,{'_token':token},function(DeleteData){

                swal({
            title: "Successful",
            text: "Document Deleted Successful",
            type: "success",
            showCancelButton: false,
            confirmButtonText: 'Close',
            });
                  FetchDocuments();



             });

      } else {
        swal("Cancelled", "Worry Not.", "error");
      }
    });

       

   }); 
  





</script>

<script type="text/javascript">
       $("#SchoolLevel").on("change",function(e){
        e.preventDefault();
        var type=$("#SchoolLevel").val();

        var url="<?=url('/EducationMis/ManageScholarships/getClassNames')?>";
          $.get(url,{'Level':type},function(data){
             $("#Kclass").html(data);


          });


       });
    </script>

    
@endpush