<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Log In | {{config('app.name')}}</title>
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
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">
                                        <a href="{{url('/')}}" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="{{asset('backend/assets/images/logo.png')}}" alt="" height="100">
                                            </span>
                                        </a>
                    
                                       
                                    </div>
                                    <p class="text-muted mb-4 mt-3" style="font-weight: bold;color: green;"><?=config('app.name')?></p>
                                </div>

                                <form  method="POST" action="{{url('/login')}}">
                                        <?=csrf_field();?>

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email Address</label>
                                        <input class="form-control" type="text" id="emailaddress" required="" placeholder="Enter Your Email" name="email">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" placeholder="Enter Your Password" name="password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                <div class="text-center d-grid">
                                        <button class="btn btn-success"  type="submit">Log In </button>
                                    </div>

                                </form>

                                <p></p><br>


                                 <div class="text-center d-grid" style="margin-trim: 5%;">
                                        <a  href="{{url('/register')}}" class="btn btn-md btn-danger"  type="submit">Create Member Account </a>
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

        <!-- App js -->
        <script src="{{asset('backend/assets/js/app.min.js')}}"></script>
        
    </body>
</html>