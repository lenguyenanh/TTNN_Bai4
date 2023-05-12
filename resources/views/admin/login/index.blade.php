<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AMNOTE | Login</title>
    <!-- favicon CSS -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
    <!-- fonts -->
    <link href="/login/fonts/sfuidisplay.css" rel="stylesheet">
    <!-- Icon fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/admin/login/css/plugins.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/admin/login/css/app.css">
    <!-- Your CSS -->
    <link rel="stylesheet" href="/admin/login/css/custom.css">

</head>

<body class="theme-royal-blue" data-spy="scroll" data-target="#navbar-nav" data-appearance="light" data-animation="false" data-appearance="light">

    <!-- =========== Start of Loader ============ -->
    <div class="preloader">
        <div class="wrapper">
            <div class="blobs">
                <div class="blob-center"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
            </div>
            <div>
                <div class="loader-canvas canvas-left"></div>
                <div class="loader-canvas canvas-right"></div>
            </div>
        </div>
    </div>
    <!-- =========== End of Loader ============ -->

    <main class="main hidden">
        <!-- =========== Start of Navigation (main menu) ============ -->
        <header class="navbar navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.html">
                    <img class="navbar-brand__regular" src="/admin/login/img/amnote.png" height="50px" alt="brand-logo">
                </a>
                <!--  End of brand logo -->
                <div>
                    <a href="#" class="btn btn-size--md btn-hover--3d btn-bg--cta--4"><span class="btn__text">Purchase Now</span></a>
                </div>
                <!-- end of nav CTA button -->
            </div>
            <!-- end of container -->
        </header>
        <!-- =========== End of Navigation (main menu)  ============ -->

        <!-- =========== Start of Body ============ -->
        <section class="space bg-color--primary h-min-100vh d-flex align-items-center">
            <div class="svg-shape--top w-100 opacity--05">
                <img src="/admin/login/img/layout/wave-8.svg" alt="wave" class="svg fill--white">
            </div>
            <!-- end of whole area svg bg -->
            <div class="svg-shape--top opacity--10">
                <img src="/admin/login/img/layout/wave-9.svg" alt="wave" class="svg fill--white">
            </div>
            <!-- end of top right mini svg shape -->
        
            <div class="container">
                <div class="row ">
                    <div class="col-12 mx-auto color--white text-center mb-4 mb-lg-5">
                        <h1 class="h2-font mb-1">Welcome back</h1>
                        <p class="opacity--60 font-size--20">Sign in to continue to Amnote</p>
                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session ('success')}}
                    </div> 
                    @endif
                    </div>
                    <div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-6 mx-auto">
                        <div class="form--v5 bg-color--primary-light--1 px-3 py-4 px-md-5 pt-md-6 rounded--10">
                            <form role="form" action="{{route('admin.auth.check-login')}}" method="POST" class="form">
                            @csrf
                                <div class="form-group">
                                    <label class="form__label text-uppercase font-size--15 font-w--500">Email Address:</label>
                                    <input id="email" type="email" name="email" class="form-control" placeholder="Nhập email" required/>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex justify-content-between">
                                        <label for="password" class="form__label text-uppercase font-size--15 font-w--500">Password:</label>
                                        <small>
                                            <a href="recover-account.html" class="text-color--400">Forgot password?</a>
                                        </small>
                                    </div>
                                    <input id="password" type="password" name="password" class="form-control" placeholder="Nhập password" required/>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label text-color--400" for="customCheck1">Keep me logged in</label>
                                        </div>
                                    </div>
                                    <button class="btn btn-bg--primary btn-size--md btn-hover--3d" type="submit"><span class="btn__text">Đăng nhập</span></button>
                                </div>
                            </form>
                            <!-- end of form -->
                            <div class="text-center mt-4 pt-2 border--top">
                                <p class="text-color--400">Don't have an account? <a href="signup.html" class="color--primary">Signup</a></p>
                            </div>
                            <!-- end of bottom text -->
                        </div>
                        <!-- end of from area -->
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </section>
        <!-- =========== End of Body ============ -->
    </main>

    <script src="/admin/login/js/plugins.min.js"></script>
    <script src="/admin/login/js/app.js"></script>
    

</body>

</html>
