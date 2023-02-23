
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TAGCODE');</script>
    <!-- End Google Tag Manager -->
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{asset('auth/assets/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('auth/assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('auth/assets/fonts/flaticon/font/flaticon.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('auth/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('auth/assets/css/skins/default.css')}}">

</head>
<body id="top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGCODE"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>


@php 

$site_settings = DB::table('site_settings')->first();

@endphp


<!-- Login 16 start -->
<div class="login-16">
    <div class="login-16-inner">
        <div class="container">
            <div class="row login-box">
                <div class="col-lg-6 align-self-center pad-0">
                    <div class="form-section align-self-center">
                        <div class="logo">
                            <a href="{{url('/')}}">
                                <img src="{{ asset('/storage/' . $site_settings->site_image) }}" alt="logo">
                            </a>
                        </div>
                        <h3>WelCome To Ghuri</h3>
                        <form action="" method="post">
                    @csrf
                            <div class="form-group clearfix">
                                <div class="form-box">
                                    <input name="email" value="{{ old('email') }}"  type="email" class="form-control" id="first_field" placeholder="Email Address" aria-label="Email Address"required>
                                    <i class="flaticon-mail-2"></i>
                                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <div class="form-box">
                                    <input name="password" type="password" class="form-control" autocomplete="off" id="second_field" placeholder="Password" aria-label="Password">
                                    <i class="flaticon-password"></i>
                                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                                </div>
                            </div>
                            <div class="checkbox form-group clearfix">
                                <div class="form-check float-start">
                                    <input class="form-check-input" type="checkbox" id="rememberme">
                                    <label class="form-check-label" for="rememberme">
                                        Remember me
                                    </label>
                                </div>
                                <a href="forgot-password-16.html" class="link-light float-end forgot-password">Forgot your password?</a>
                            </div>
                            <div class="form-group clearfix">
                                <button type="submit" class="btn btn-primary btn-lg btn-theme w-100">Login</button>
                            </div>
                        </form>

                    
                        <p>Don't have an account? <a href="{{route('user.signup')}}">Register here</a></p>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center pad-0 bg-img">
                    <div class="info clearfix">
                        <div class="box">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="content">
                                <h3>We Will Make a Better Tour for You</h3>
                                <div class="social-list">
                                    <a href="#" class="facebook-bg">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" class="twitter-bg">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="google-bg">
                                        <i class="fa fa-google"></i>
                                    </a>
                                    <a href="#" class="linkedin-bg">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ocean">
            <div class="wave"></div>
            <div class="wave"></div>
        </div>
    </div>
</div>
<!-- Login 16 end -->

<!-- External JS libraries -->
<script src="{{asset('auth/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('auth/assets/js/popper.min.js')}}"></script>
<script src="{{asset('auth/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('auth/assets/js/app.js')}}"></script>
<!-- Custom JS Script -->


<!-- {{asset('auth/')}} -->


</body>

</html>
