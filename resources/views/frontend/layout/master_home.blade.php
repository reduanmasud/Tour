<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

@php 

$site_settings = DB::table('site_settings')->first();

@endphp

    <title>{{ $site_settings->site_title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/android-chrome-512x512.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon.ico">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="#000" name="msapplication-TileColor">
    <meta content="#000" name="theme-color">
    
    <link rel="stylesheet" href="{{asset('frontend/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/slider.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/lg-transitions.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.arcticmodal.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/coming-soon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/404.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">

    <!-- {{asset('frontend/')}} -->


</head>
<body>
    <div class="container">
      



    @include('frontend.layout.header')


<div class="image_bg" style="background-image: url(img/header1.jpg)"></div>


@yield('home')



@include('frontend.layout.footer')




    
    <div class="search_form" id="search_form">
        <div class="wrap">
            <div class="wrap_float">
                <input type="text" class="input" placeholder="Search...">
                <button type="submit" class="submit"></button>
                <div class="close"></div>
            </div>
        </div>
    </div>
    <div class="overlay" id="overlay"></div>
    
    <div style="display: none;">
        <div class="modal modal_book_now" id="book-now">
            <div class="modal_wrap">
                <div class="modal-head">
                    <img src="img/vput2.jpg" class="image-cover" alt="">
                </div>
                <div class="modal-body">
                    <div class="tags">
                        <div class="tag discount">20% off</div>
                        <div class="tag new">New</div>
                    </div>
                    <div class="modal-title">
                        America, San Francisco | $3,500
                    </div>
                    <div class="fields">
                        <div class="field half">
                            <label class="label" for="name-2">Full Name*</label>
                            <div class="input_wrap">
                                <input type="text" class="input" id="name-2">
                            </div>
                        </div>
                        <div class="field half">
                            <label class="label" for="email-2">Email Address*</label>
                            <div class="input_wrap">
                                <input type="email" class="input" id="email-2">
                            </div>
                        </div>
                        <div class="field half">
                            <label class="label" for="date-2a">Travel Date*</label>
                            <div class="input_wrap calendar-field">
                                <input type="text" class="input js_calendar" id="date-2a">
                            </div>
                        </div>
                        <div class="field half">
                            <p class="label">Person*</p>
                            <div class="input_wrap">
                                <input type="text" class="input" id="date-2">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label" for="enquiry-2">Your Enquiry*</label>
                            <div class="textarea_wrap">
                                <textarea class="textarea" id="enquiry-2"></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn submit">Sumbit</button>
                </div>
            </div>
            <div class="modal_close"></div>
        </div>
    </div>
    
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRlMuSMnjgxj3pYTV1twDBQuay-TjgmZ8&amp;callback=initMap"></script>
    <script defer src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script defer src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
    <script defer src="{{asset('frontend/js/slick.min.js')}}"></script>
    <script defer src="{{asset('frontend/js/jquery.arcticmodal.min.js')}}"></script>
    <script defer src="{{asset('frontend/js/lightgallery.js')}}"></script>
    <script defer src="{{asset('frontend/js/spincrement.min.j')}}s"></script>
    <script defer src="{{asset('frontend/js/scripts.min.js')}}"></script>
</body>

</html>