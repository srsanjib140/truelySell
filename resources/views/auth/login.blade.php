
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!DOCTYPE html>
    <html lang="en">
    
    <!-- Mirrored from designreset.com/cork/html/vertical-light-menu/auth-boxed-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 May 2024 06:08:56 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>SignIn | Admin </title>
        <link rel="icon" type="image/x-icon" href="https://designreset.com/cork/html/src/assets/img/favicon.ico"/>
        <link href="{{ asset('layouts/vertical-light-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('layouts/vertical-light-menu/css/dark/loader.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{ asset('layouts/vertical-light-menu/loader.js')}}"></script>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        <link href="{{ asset('src/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        
        <link href="{{ asset('layouts/vertical-light-menu/css/light/plugins.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('src/assets/css/light/authentication/auth-boxed.css')}}" rel="stylesheet" type="text/css" />
        
        <link href="{{ asset('layouts/vertical-light-menu/css/dark/plugins.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('src/assets/css/dark/authentication/auth-boxed.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        
    </head>
    <body >
    
        <!-- BEGIN LOADER -->
        <div id="load_screen"> <div class="loader"> <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div></div></div>
        <!--  END LOADER -->
    
        <div class="auth-container d-flex">
    
            <div class="container mx-auto align-self-center">
        
                <div class="row">
        
                    <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                        <div class="card mt-3 mb-3">
                            <div class="card-body">
        
                                <div class="row">
                                    <form method="POST" action="{{ route('login') }}" class="row g-3 needs-validation" novalidate>
                                        @csrf
                                    <div class="col-md-12 mb-3">
                                        
                                        <h2>Sign In</h2>
                                        <p>Enter your email and password to login</p>
                                        
                                    </div>
                                    <div class="col-md-12">
                                        
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            
                                            <input name="email" type="email" class="form-control" required>
                                          
                                            <div class="invalid-feedback">
                                                Please Enter your email
                                              </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label class="form-label">Password</label>
                                            <input name="password" type="password" class="form-control" required>
                                            <div class="invalid-feedback">
                                                Please Enter your password
                                              </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <div class="form-check form-check-primary form-check-inline">
                                                <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                                                <label class="form-check-label" for="form-check-default">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <button class="btn btn-secondary w-100">SIGN IN</button>
                                        </div>
                                    </div>
                                    </form>
                                    
                                    <div class="col-12 mb-4">
                                        <div class="">
                                            <div class="seperator">
                                                <hr>
                                                <div class="seperator-text"> <span>Or continue with</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-4 col-12">
                                        <div class="mb-4">
                                            <button class="btn  btn-social-login w-100 ">
                                                <img src="https://designreset.com/cork/html/src/assets/img/google-gmail.svg" alt="" class="img-fluid">
                                                <span class="btn-text-inner">Google</span>
                                            </button>
                                        </div>
                                    </div>
        
                                    <div class="col-sm-4 col-12">
                                        <div class="mb-4">
                                            <button class="btn  btn-social-login w-100">
                                                <img src="https://designreset.com/cork/html/src/assets/img/github-icon.svg" alt="" class="img-fluid">
                                                <span class="btn-text-inner">Github</span>
                                            </button>
                                        </div>
                                    </div>
        
                                    <div class="col-sm-4 col-12">
                                        <div class="mb-4">
                                            <button class="btn  btn-social-login w-100">
                                                <img src="https://designreset.com/cork/html/src/assets/img/twitter.svg" alt="" class="img-fluid">
                                                <span class="btn-text-inner">Twitter</span>
                                            </button>
                                        </div>
                                    </div>
    
                                    <div class="col-12">
                                        <div class="text-center">
                                            <p class="mb-0">Dont't have an account ? <a href="javascript:void(0);" class="text-warning">Sign Up</a></p>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
    
        </div>
        
        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src="{{ asset('src/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('src/assets/js/forms/bootstrap_validation/bs_validation_script.js')}}"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->
    
    
    </body>
    
    <!-- Mirrored from designreset.com/cork/html/vertical-light-menu/auth-boxed-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 May 2024 06:08:56 GMT -->
    </html>

