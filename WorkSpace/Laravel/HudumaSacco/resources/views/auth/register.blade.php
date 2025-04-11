<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Create Member User Account | {{config('app.name')}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}">

        <!-- Bootstrap css -->
        <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>
        <!-- icons -->
        <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('appMisAssets/assets/alerts/sweetalert.css')}}" type="text/css" rel="stylesheet">
        <!-- Head js -->
        <script src="{{asset('backend/assets/js/head.js')}}"></script>
        <style type="text/css">
            .form-check-input:checked {
    background-color: #58dd9a;
    border-color: var(--ct-form-check-input-checked-border-color);
}
            
        </style>

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-6">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">
                                        <a href="{{url('/')}}" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="{{asset('backend/assets/images/logo.png')}}" alt="" height="70">
                                            </span>
                                        </a>
                    
                                       
                                    </div>
                                    
                                </div>

                                <form  method="POST" action="{{url('/register')}}">
                                        <?=csrf_field();?>

                                  <div class="mb-3">
                                        <label for="password" class="form-label">Payroll Number</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="PayrollNum" class="form-control" placeholder="Enter Your PayrollNum" name="PayrollNum" value="{{old('PayrollNum')}}">

                                            <div class="input-group-text"  style="cursor: pointer;" id="Query">
                                                <span class="">Validate</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="Name" class="form-label">Name</label>
                                        <input class="form-control" type="text" id="Name" required="" placeholder="Enter Your Names" name="name" value="{{old('name')}}">
                                          @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                     <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email Address</label>
                                        <input class="form-control" type="text" id="emailaddress" required="" placeholder="Enter Your UserId" name="email" value="{{old('email')}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Telephone" class="form-label">Telephone</label>
                                        <input class="form-control" type="text" id="Telephone" required="" placeholder="Enter Mobile No" name="Telephone" value="{{old('Telephone')}}">
                                    </div>

                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" placeholder="Enter Your Password" name="password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                                
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="password" class="form-label">Confirm Password</label>
                                        <div class="input-group input-group-merge">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                           
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                                
                                            </div>
                                            

                                        </div>
                                        
                                    </div>
                                <div class="text-center d-grid">
                                        <button class="btn btn-success"  type="submit">Register </button>
                                    </div>

                                </form>

                                <p></p><br>


                                 <div class="text-center d-grid" style="margin-trim: 5%;">
                                        <a  href="{{url('/login')}}" class="btn btn-md btn-danger"  type="submit">Already With Account? Log In </a>
                                    </div>

                                <!--<div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="auth-recoverpw.html" class="text-white-50 ms-1">Forgot your password?</a></p>
                               
                            </div>  -->
                        </div>
                        <!-- end row -->

                               

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
          <script>document.write(new Date().getFullYear())</script> &copy;<a href="" class="text-white-50" style="color:black;">Huduma Kenya Sacco</a> 
        </footer>

        <!-- Vendor js -->
        <script src="{{asset('backend/assets/js/vendor.min.js')}}"></script>
        <script src="{{asset('/appMisAssets/assets/alerts/sweetalert.min.js')}}" type="text/javascript"></script>
        <!-- App js -->
        <script src="{{asset('backend/assets/js/app.min.js')}}"></script>
        <script type="text/javascript">
            $("#Query").on("click",function(e){
                e.preventDefault();
                 var PayrollNum=$("#PayrollNum").val();
                  var url="<?=url('/MemberAccount/ValidateDetails')?>";
                     if(PayrollNum=="")
                     {
                         swal({
                  title: "Error",
                  text: "Please Enter PayrollNum",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonText: 'Close',
                  });  
                      return false;


                     }else if(PayrollNum.length<10)
                     {
                        swal({
                  title: "Error",
                  text: "Please Enter Valid PayrollNum",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonText: 'Close',
                  });  
                      return false;


                     }else{
                        $.get(url,{'PayrollNum':PayrollNum},function(response){
                         
                        var data=response['Data'];
                        var Code=response['Code'];
                          if(Code==200)
                          {

                         $("#Name").val(data.Name);
                         $("#emailaddress").val(data.EmailAddress);
                         $("#Telephone").val(data.Telephone);

                          }else{
                             swal({
                  title: "Error",
                  text: response['Message'],
                  type: "error",
                  showCancelButton: false,
                  confirmButtonText: 'Close',
                  });  
                      return false;

                          }
                       
                         

                     });

                     }

                     



            })
        </script>
        
    </body>
</html>