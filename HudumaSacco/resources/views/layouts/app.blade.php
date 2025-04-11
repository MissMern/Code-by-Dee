
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 


<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title> <?=config('app.name')?>|{{(isset($page_title))?$page_title :'Home'}} </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="National Council For Persons with Disabilities" />
        <meta content="Education Module" name="SDPS System Developers" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('appMisAssets/gokfaviscon.png'
        )}}">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

         <!-- third party css -->
        <link href="{{asset('appMisAssets/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('appMisAssets/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('appMisAssets/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('appMisAssets/assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
          <link href="{asset('appMisAssets/assets/libs/jquery-toast-plugin/jquery.toast.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('appMisAssets/assets/alerts/sweetalert.css')}}" type="text/css" rel="stylesheet">

           <link rel="stylesheet" href="{{asset('/appMisAssets/assets/select2/css/select2.css')}}" />   
   <link rel="stylesheet" href="{{asset('/appMisAssets/assets/select2-bootstrap-theme/select2-bootstrap.min.css')}}" />  


        <!-- third party css end -->

        <!-- Bootstrap css -->
        <link href="{{asset('appMisAssets/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="{{asset('appMisAssets/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>
        <!-- icons -->
        <link href="{{asset('appMisAssets/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('appMisAssets/assets/css/jquery-ui.css')}}" rel="stylesheet" type="text/css" />

         <link href="{{asset('appMisAssets/assets/css/custom.css')}}" rel="stylesheet" type="text/css" />

        <!-- Head js -->
        <script src="{{asset('appMisAssets/assets/js/head.js')}}"></script>

        <style type="text/css">

             body {
        
        font-family: "Poppins", sans-serif !important;
    }


     td.details-control {
    background: url('{{asset("/appMisAssets/details_open.png")}}') no-repeat center center;
    cursor: pointer;
}
tr.shown td.details-control {
    background: url('{{asset("/appMisAssets/details_close.png")}}') no-repeat center center;
}



.select2-container.select2-container--default.select2-container--open  {
  z-index: 5000;
}



.left-side-menu {
  width: 250px;
  background: #cecece !important;
  bottom: 0;
  padding: 20px 0;
  position: fixed;
  color: #895901 !important;
  -webkit-transition: all .1s ease-out;
  transition: all .1s ease-out;
  top: 70px;
  -webkit-box-shadow: var(--ct-box-shadow);
  box-shadow: var(--ct-box-shadow);
}
.footer {
  bottom: 0;
  padding: 19px 15px 20px;
  position: absolute;
  right: 0;
  color: var(--ct-text-muted);
  left: 250px;
  background-color: var(--ct-footer-bg);
}

sidebar-menu > ul > li > a {
  color: #895901 !important;

  }


.table-responsive {
    overflow-x: auto;
}

/* Style for table headers */
.table thead th {
    background-color: #3498db;
    color: white;
}

/* Style for alternating rows */
.table-striped tbody tr:nth-of-type(odd) {
    background-color: #f9f9f9 !important;
}


.form-control:disabled, .form-control[readonly] {
  background-color: #eeeded !important;
  opacity: 1;
}



        </style>
        

    </head>

    <!-- body start -->
         <body data-layout-mode="default" data-theme="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>

        <!-- Begin page -->
        <div id="wrapper">


            
            <!-- Topbar Start -->
            <div class="navbar-custom"   style="background-color:#13c28a !important;color: white;">

                <div class="container-fluid">

                    <ul class="list-unstyled topnav-menu float-end mb-0">

                        <li class="d-none d-lg-block">

                            <form class="app-search">
                                <div class="app-search-box dropdown">
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Search..." id="top-search">
                                        <button class="btn input-group-text" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                    <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h5 class="text-overflow mb-2">Found 22 results</h5>
                                        </div>
            
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-home me-1"></i>
                                            <span>Analytics Report</span>
                                        </a>
            
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-aperture me-1"></i>
                                            <span>How can I help you?</span>
                                        </a>
                            
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-settings me-1"></i>
                                            <span>User profile settings</span>
                                        </a>

                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                        </div>

                                        <div class="notification-list">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="d-flex align-items-start">
                                                    <img class="d-flex me-2 rounded-circle" src="{{asset('backend/assets/images/users/user-2.jpg')}}" alt="Generic placeholder image" height="32">
                                                    <div class="w-100">
                                                        <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                                        <span class="font-12 mb-0">UI Designer</span>
                                                    </div>
                                                </div>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="d-flex align-items-start">
                                                    <img class="d-flex me-2 rounded-circle" src="{{asset('backend/assets/images/users/user-5.jpg')}}" alt="Generic placeholder image" height="32">
                                                    <div class="w-100">
                                                        <h5 class="m-0 font-14">Jacob mimi</h5>
                                                        <span class="font-12 mb-0">Developer</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
            
                                    </div>  
                                </div>
                            </form>
                        </li>
                        <li>
                             
                            <br>
                            <span style="color:white;font-weight: bold; background: #6699CC !important;">{{(Auth::User())?Auth::User()->role_id:null}}</span>
                             

                             
                        </li>
                        <li><br><span style="color:green;font-weight: bold;
                         border-left: 2px solid green;
                        height: 150px;
           


                        "></span></li>
    
                        
    
                       
    
                       
                      
    
                               
     
    
   <li class="dropdown notification-list topbar-dropdown">
    <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
        <img src="{{asset('appMisAssets/assets/images/k.png')}}" alt="user-image" class="rounded-circle">
        <span class="pro-user-name ms-1" style="color:window;">
            {{( Auth::User())? Auth::User()->firstname:null}}  {{(Auth::User())? Auth::User()->sirname:null}}    <i class="mdi mdi-chevron-down"></i> 
        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-end profile-dropdown" style="background-color:whitesmoke; color:black;">
        <!-- item-->
        <div class="dropdown-header noti-title" style="border-bottom: 4px solid black;">
            <h6 class="text-overflow m-0">Welcome!</h6>
        </div>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
            <i class="fe-user"></i>
            <span>My Account</span>
        </a>

        <!-- item-->
        <a href="{{url('PayrollModule/UserAccount/ChangePassword')}}" class="dropdown-item notify-item">
            <i class="fe-settings"></i>
            <span>Change Password</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
            <i class="fe-lock"></i>
            <span>Lock Screen</span>
        </a>

        <div class="dropdown-divider"></div>

        <!-- item-->
        <a href="{{url('/logout')}}" class="dropdown-item notify-item">
            <i class="fe-log-out"></i>
            <span>Logout</span>
        </a>
    </div>
</li>

    
                        <li class="dropdown notification-list" style="padding-top:2.5%;">
                            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                                <i class="fe-settings noti-icon"></i>
                            </a>
                        </li>
    
                    </ul>
    
                    <!-- LOGO -->
                    <div class="logo-box">
                        <?php if(Auth::user()):?>
                        <a href="{{url('home')}}" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="{{asset('appMisAssets/assets/images/government.png')}}" alt="" height="45">
                                <span class="logo-lg-text-light">Leave</span> 
                            </span>
                            
                        </a>
    
                        <a href="{{url('home')}}" class="logo logo-light text-center">
                          
                            <span class="logo-lg">
                                <img src="{{asset('appMisAssets/assets/images/government.png')}}" alt="Leave System" height="50" width="50">
                            </span>
                        </a>
                    <?php endif;?>
                    </div>
    
                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li>
                            <!-- Mobile menu toggle (Horizontal Layout)-->
                            <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>   
                        
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->

            @include('layouts.sidebar')
           

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                             @yield('breadcrums')


                        </div>     
                        <!-- end page title --> 
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <div class="row">
                    <div class="col-12">
                        @include('layouts.notification')
                    </div>

                            <div class="col-12">
                            @yield('content')

                            <!--start of loader -->
                        <div class="loader-div d-none" id="loader-div" style="text-align: center;">
                            <img class="loader-img" src="https://icons8.com/preloaders/preloaders/1496/Spinner-5.gif" style="position:absolute;left:0;right:0;top:0;bottom:0;margin:auto" />
                        </div>
                        <!--end of loader -->



                </div>


                           <div class="modal fade" id="county-modal" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">        

                   
                    <div class="modal-header">
                      <h4 class="modal-title" > 
                          &nbsp;&nbsp;<span id="my-header" style="color: purple;">
                    </span></h4>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>


                      
                    </div>
                   
                    
                    <div class="modal-body" id="load-county-details">
                    
                    </div>               
                   
                     
                  </div>
                </div>
              </div>

                 <div class="modal fade" id="countymodal" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">        

                   
                    <div class="modal-header">
                      <h4 class="modal-title" > 
                          &nbsp;&nbsp;<span id="myheader" style="color: purple;">
                      Give Reason(s)</span></h4>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>


                      
                    </div>

                   
                    
                    <div class="modal-body" id="load-county-details2">
                    
                    </div>               
                   
                     
                  </div>
                </div>
              </div>
            </div>

                <!-- Footer Start -->
                <footer class="footer" style="background-color: #13c28a!important;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <span style="color:white;font-weight: bold;">
                                <script>document.write(new Date().getFullYear())</script> &copy; <?=config('app.name')?>  :Backend Information System</span> 
                            </div>
                            <div class="col-md-4"   style="color:white;font-weight: bold;">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                   
                                    <a href="{{url('/')}}"  color="white">Web Interface</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->





        <!-- Right Sidebar -->
       

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{asset('appMisAssets/assets/js/vendor.min.js')}}"></script>

         <!-- third party js -->
         <script src="{{asset('appMisAssets/assets/js/jquery-ui.js')}}"></script>
          <script src="{{asset('/appMisAssets/assets/alerts/sweetalert.min.js')}}" type="text/javascript"></script> <!--Sweetalert for userfiendliness-->


          <script src="{{asset('/appMisAssets/assets/select2/js/select2.js')}}"></script> 

          <script type="text/javascript" src="{{asset('appMisAssets/assets/js/handlebars.js')}}"></script>
     
         


 

        <script src="{{asset('appMisAssets/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('appMisAssets/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
        <script src="{{asset('appMisAssets/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('appMisAssets/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
        <script src="{{asset('appMisAssets/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('appMisAssets/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('appMisAssets/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('appMisAssets/assets/libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
        <script src="{{asset('appMisAssets/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('appMisAssets/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
        <script src="{{asset('appMisAssets/assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
        <script src="{{asset('appMisAssets/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{asset('appMisAssets/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>



        <script src="{{asset('appMisAssets/assets/libs/morris.js06/morris.min.js')}}"></script>
        <script src="{{asset('appMisAssets/assets/libs/raphael/raphael.min.js')}}"></script>

    

       


        <!-- third party js ends -->

        <!-- App js -->
        <script src="{{asset('appMisAssets/assets/js/app.min.js')}}"></script>


         <!---Author:Isanya Description:Allow to send Ajax Post Request  Date:4thNov2023   -->
<script type="text/javascript">
          $(function () {
              $.ajaxSetup({
                  headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
              });
          });
  </script>
  <script type="text/javascript">







      

  </script>
  <script type="text/javascript">
      $(".number").on("keydown",function(event){

      if (event.shiftKey == true) {
            event.preventDefault();
        }

        if ((event.keyCode >= 48 && event.keyCode <= 57 ) || 
            (event.keyCode >= 96 && event.keyCode <= 105) || 
            event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 ||
            event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190 || event.keyCode == 110 || event.keyCode == 188) {

        } else {
            event.preventDefault();
        }
         if($(this).val().indexOf('.') !== -1 && event.keyCode == 190)
            event.preventDefault(); 


      });
  
      
    </script>
  <script type="text/javascript"></script>


  

  

  <script>


          $(document).on('click','.reject-modal',function(){

           

           var head=$(this).attr('data-title');
                  
               var url=$(this).attr("data-url");
                $("#load-county-details").html("");
                $("#my-header").html(" ");
                $("#my-header").html(head);
                $("#county-modal").modal("show");
            $("#load-county-details").load(url,function(data){
            $("#county-modal").modal("show");
             
          });
       });





           $(document).on('click','.large-modal',function(e){
            e.preventDefault();
              var head=$(this).attr('data-title');
                  
               var url=$(this).attr("data-url");
                $("#load-county-details2").html("");
                $("#myheader").html(" ");
                $("#myheader").html(head);
                $("#countymodal").modal("show");
            $("#load-county-details2").load(url,function(data){
            $("#countymodal").modal("show");
             
          });

           

       });




   $(document).on('click','.delete-record',function(){

    var name=$(this).attr("data-name");
    

    var message=confirm("Confirm you want to delete this "+name);
      if(message==true){
         var url=$(this).attr("data-url");
         var url_to=$(this).attr("data-redirect-to");
         var token="<?=csrf_token();?>";
          
             $.post(url,{'_token':token},function(){

              window.location.href=url_to;
             });

      }
        });



   
  
   $(document).on('click','.confirm-record',function(){

    var name=$(this).attr("data-name");
    var action=$(this).attr("data-action");
     var url=$(this).attr("data-url");
         var url_to=$(this).attr("data-redirect-to");
           
         var token="<?=csrf_token();?>";


    swal({
    title: action+"?",
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
        
         $.post(url,{'_token':token},function(){
                window.location.href=url_to;
             });

      } else {
        swal("Cancelled", "Worry Not.", "error");
      }
    });

  





    //var message=confirm("Confirm you want to "+action+" "+name);
      if(message==true){
         var url=$(this).attr("data-url");
         var url_to=$(this).attr("data-redirect-to");
         var token="<?=csrf_token();?>";
          
             $.post(url,{'_token':token},function(){


              //window.location.href=url_to;
             });

      }
        });

   
   




       
    </script>

    <script>
         $(document).on("ajaxSend", function(){
            $( "#loader-div" ).removeClass( "d-none" );
 }).on("ajaxComplete", function(){
    $( "#loader-div" ).addClass( "d-none" );
 });
    </script>

    <script>
        function checkIfNumber(inputElement, elementID)
        {
            var checkNumber = isNaN(inputElement);

            if(checkNumber)
            {
                swal(
                    {
                        title: "Error",
                        text: "Please Enter a Number",
                        type: "error",
                        showCancelButton: false,
                        confirmButtonText: 'Close',
                    }
                );
                document.getElementById(elementID).value = '';
            }
        }
    </script>

<script>
    function checkIfNumber(inputElement, elementID)
    {
        var checkNumber = isNaN(inputElement);
        if(checkNumber)
        {
            swal(
                {
                    title: "Error",
                    text: "Please Enter a Number",
                    type: "error",
                    showCancelButton: false,
                    confirmButtonText: 'Close',
                }
            );
            document.getElementById(elementID).value = '';
        }
    }
</script>


       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     @stack('scripts')
        
    </body>
</html>