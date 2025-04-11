<?php

use Illuminate\Support\Facades\Route;
use Modules\Usermanagement\App\Http\Controllers\UsermanagementController;





Route::prefix('AdminModule')->group(function() {
     Route::get('/ManageMembers/Index', 'MemberController@index');
     Route::any('/ManageMembers/CreateNewMember','MemberController@Create');
     Route::any('/ManageMembers/fetchList','MemberController@fetchList');
     Route::any('/ManageMembers/GetApplicantData','MemberController@GetApplicantData');
     Route::any('/ManageMembers/BasicMemberDetails','MemberController@PostBasicMemberDetails');
     Route::any('/EDCodes/Index','EdCodesController@Index');
     Route::any('/EDCodes/fetchList','EdCodesController@fetchList');
     Route::any('/Contributions/SharesIndex','ShareContributionsController@Index');
     Route::any('/SharesContributions/fetchList','ShareContributionsController@fetchList');
     Route::any('/Contributions/ViewDetails/{id}','ShareContributionsController@ViewDetails');
     Route::any('/Contributions/RiskFundIndex','RiskFundContributionsController@Index');
     Route::any('/RiskFundContributions/fetchList','RiskFundContributionsController@fetchList');
     Route::any('/Loans/ActiveIndex','LoansController@Index');
     Route::any('/LoanRecovery/ActiveIndex','LoanRecoveryController@Index');
     Route::any('/LoanRecoveryContributions/fetchList','LoanRecoveryController@fetchList');
     Route::any('/Loans/fetchList','LoansController@fetchList');
     Route::any('/Loans/ViewDetails/{id}','LoansController@ViewDetails');
     Route::any('/Loans/editAmountDetails/{id}','LoansController@EditAmounts');
     Route::any('/ManagementUser/Index','ManagementUserController@Index');
     Route::any('/UserManagement/UserAccounts','UserController@Index');
     Route::any('/Approvers/fetchList','ManagementUserController@fetchList');
     Route::any('/ApproverUser/Create','ManagementUserController@Create');
     Route::any('/ManageMembers/RevokeRoles/{id}','ManagementUserController@RevokeRoles');
     Route::any('/UserManagement/SaccoUsers','UserController@Index');
     Route::any('/UserManagement/fetchSystemUsers','UserController@fetchList');
     Route::any('/Users/ResetPassword/{id}','UserController@PasswordReset');
     Route::any('/ManageMembers/BlockAccount/{id}','UserController@BlockAccount');
     Route::any('/ManageMembers/RestoreAccount/{id}','UserController@RestoreAccount');
     Route::any('/DocumentCategory/Index','DocumentCategoryController@Index');
     Route::any('/DocumentCategory/fetchList','DocumentCategoryController@fetchList');
     Route::any('/DocumentCategory/EditDetails/{id}','DocumentCategoryController@EditDetails');
     Route::any('/Documents/Index','DocumentController@Index');
     Route::any('/Documents/fetchList','DocumentController@fetchList');
     Route::any('/Documents/Create','DocumentController@Create');
     Route::post('/Documents/UploadDocument','DocumentController@UploadDocument');





});
