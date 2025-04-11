<!-- ========== Left Sidebar Start ========== -->


<div class="left-side-menu">

    <div class="h-100" data-simplebar>
        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">
                <?php if(Auth::User()):?>
                    <?php if(Auth::user()->hasRole(['Administrator'])  ):?>

                <li class="menu-title mt-2"  style="color:green !important;font-weight: bold;">Administrator Portal</li>


                <li>
                    <a href="#staffRegister" data-bs-toggle="collapse">
                        <i class="fa fa-users"></i>
                        <span>Members Register</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="staffRegister">
                        <ul class="nav-second-level">


                            <li>
                                <a href="{{url('/AdminModule/ManageMembers/CreateNewMember')}}">Add New Employee</a>
                            </li>
                            <li>
                                <a href="{{url('/AdminModule/ManageMembers/Index')}}">Active Members</a>
                            </li>
                            <li>
                                <a href="#">Exited Members</a>
                            </li>
                           


                          
                            

                        </ul>
                    </div>
                </li>

                   <li>
                    <a href="#LeaveSettings" data-bs-toggle="collapse">
                        <i class="fa fa-list"></i>
                        <span>Manage Contributions</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="LeaveSettings">
                        <ul class="nav-second-level">

                            <li>
                                <a href="#">Add Contribution</a>
                            </li>
                            <li>
                                <a href="{{url('/AdminModule/Contributions/SharesIndex')}}">Shares Contribution List</a>
                            </li>
                            <li>
                                <a href="{{url('/AdminModule/Contributions/RiskFundIndex')}}">Risk-Fund Contribution</a>
                            </li>

                             <li>
                                <a href="{{url('/AdminModule/EDCodes/Index')}}">EDCodes List</a>
                            </li>

                            

                           

                           
                            

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#loansapplication" data-bs-toggle="collapse">
                        <i class="fa fa-table"></i>
                        <span>Loans Management</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="loansapplication">
                        <ul class="nav-second-level">


                           
                            <li>
                                <a href="{{url('/AdminModule/Loans/ActiveIndex')}}">Active Loans</a>
                            </li>
                             <li>
                                <a href="{{url('/AdminModule/LoanRecovery/ActiveIndex')}}">Active Loans Recovery</a>
                            </li>


                           
                            

                        </ul>
                    </div>
                </li>


                 <li>
                    <a href="#LeaveReports" data-bs-toggle="collapse">
                        <i class="fa fa-briefcase"></i>
                        <span>Sacco Expenditure</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="LeaveReports">
                        <ul class="nav-second-level">


                           
                            <li>
                                <a href="#">Report I</a>
                            </li>
                             <li>
                                <a href="#">Report II</a>
                            </li>
                            
                           
                            

                        </ul>
                    </div>
                </li>
                 <li>
                    <a href="#UserManagement" data-bs-toggle="collapse">
                        <i class="fa fa-list"></i>
                        <span>User Management</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="UserManagement">
                        <ul class="nav-second-level">

                            <li>
                                <a href="{{url('/AdminModule/UserManagement/UserAccounts')}}">Member User Accounts</a>
                            </li>
                             <li>
                                <a href="{{url('/AdminModule/ManagementUser/Index')}}">Manage Approvers</a>
                            </li>
                           

                           
                            

                        </ul>
                    </div>
                </li>


                 <li>
                    <a href="#SaccoRepository" data-bs-toggle="collapse">
                        <i class="fa fa-bars"></i>
                        <span>Sacco Repository</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="SaccoRepository">
                        <ul class="nav-second-level">

                            <li>
                                <a href="{{url('/AdminModule/Documents/Create')}}">Upload New Document</a>
                            </li>
                             <li>
                                <a href="{{url('/AdminModule/Documents/Index')}}">Uploaded Documents</a>
                            </li>
                            <li>
                                <a href="{{url('/AdminModule/DocumentCategory/Index')}}">Document Category</a>
                            </li>
                           

                           
                            

                        </ul>
                    </div>
                </li>




        <?php endif;?>
    <?php endif;?>


      








               


               

                   

                    



            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@push('script')

    <script>

        $(".left-side-menu ul li a").click(function(){
            // Check if the current section is marked as completed
            if ($(this).parent().hasClass("completed")) {
                return; // Prevent changing the section if it's marked as completed
            }

            $(".left-side-menu ul li").removeClass("active");
            $(this).parent().addClass("active");
        });

        // To keep the specific section active on page load based on the URL hash
        var url = window.location.href;
        var activeSection = url.substring(url.indexOf("#"));

        if(activeSection) {
            $(".left-side-menu ul li").removeClass("active");
            $('a[href="' + activeSection + '"]').parent().addClass("active");
        }

        // Example: Mark a section as completed on some user interaction (e.g., button click)
        $("#completeSectionButton").click(function() {
            $(".left-side-menu ul li.active").addClass("completed");
        });

    </script>
@endpush
