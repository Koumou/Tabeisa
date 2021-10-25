<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS Style -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<style>
    * {
        transition: transform .4s ease-in-out;
        transition: all .2s;
    }

    .h1gradient {
        color: #111;
        font-family: 'Poppins', sans-serif;
        /* font-size: 275px; */
        font-weight: bold;
        letter-spacing: -1px;
        line-height: 1;
        text-align: center;
        font-size: 85px;
        background: linear-gradient(to right, #182128 10%, #264a4d 80%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .linecolorhr_about {
        background-image: linear-gradient(to right, #182128 60%, whitesmoke);
        width: 10%;
        text-align: left;
        margin-left: 0;
    }


    .-fx-image-gal {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        margin: 0 auto;
        width: 100%;
        max-width: 1200px;
        justify-content: center;
    }

    .-fx-gal-item {
        width: 100%;
        margin: 0px;
        padding: 0px;
        overflow: hidden;
    }

    .-fx-gal-item a {
        padding: 0;
        margin: 0;
        width: 100%;
        height: 100%;
        background-color: white;
    }

    .-fx-gal-image-thumb img {
        width: 99%;
        cursor: pointer;
        /* -webkit-filter: grayscale(100%); */
        /* -moz-filter: grayscale(100%); */
        /* filter: grayscale(100%); */
        transform: scale(1.1);
        transition: all 0.5s ease;
    }

    .-fx-gal-image-thumb:hover img {
        cursor: pointer;
        -webkit-filter: grayscale(0%);
        -moz-filter: grayscale(0%);
        filter: grayscale(0%);
        transform: scale(1.5);
        transition: all 0.5s ease;
    }


    a>.dropdown-item::active,
    a>.dropdown-item::selection,
    a>.dropdown-item::before,
    a>.dropdown-item::after,
    a>.dropdown-item:hover {
        background-color: 829199;
    }


    ::-moz-selection {
        color: #fff;
        background-color: #d3d3d3;
    }

    ::selection {
        color: #fff;
        background-color: #d3d3d3;
    }

    ::-moz-selection {
        color: #fff;
        background-color: #d3d3d3;
    }



    @media only screen and (max-width: 760px),
    (min-device-width: 768px) and (max-device-width: 1024px) {

        .h1gradient {
            color: #111;
            font-family: 'Poppins', sans-serif;
            /* font-size: 275px; */
            font-weight: bold;
            letter-spacing: -1px;
            line-height: 1;
            text-align: center;
            font-size: 60px;
            background: linear-gradient(to right, #182128 10%, #264a4d 80%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

    }

    @media only screen and (max-width: 348px),
    (min-device-width: 348px) and (max-device-width: 455px) {

        .h1gradient {
            color: #111;
            font-family: 'Poppins', sans-serif;
            /* font-size: 275px; */
            font-weight: bold;
            letter-spacing: -1px;
            line-height: 1;
            text-align: center;
            font-size: 40px;
            background: linear-gradient(to right, #182128 10%, #264a4d 80%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

    }

    @media only screen and (max-width: 255px),
    (min-device-width: 255px) and (max-device-width: 455px) {

        .h1gradient {
            color: #111;
            font-family: 'Poppins', sans-serif;
            /* font-size: 275px; */
            font-weight: bold;
            letter-spacing: -1px;
            line-height: 1;
            text-align: center;
            font-size: 35px;
            background: linear-gradient(to right, #182128 10%, #264a4d 80%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

    }

    @media (min-width: 420px) {
        .-fx-image-gal {
            flex-direction: row;
            flex-wrap: wrap;
        }

        .-fx-gal-item {
            width: 50%;
        }
    }

    @media (min-width: 768px) {
        .-fx-gal-item {
            width: 33.33%;
        }
    }

    .dropdown-toggle::after {
        display: none;
    }

    .text-decoration-none {
        text-decoration: none !important;
    }

    /* Font Awesome Icons have variable width. Added fixed width to fix that.*/
    .icon-width {
        width: 2rem;
    }

    .mug-redesign {
        color: #fff;
        background: linear-gradient(to right bottom, #182128 35%, #264a4d 65%);
        font-size: 50px;
        line-height: 80px;
        height: 95px;
        width: 95px;
        margin: 0 auto 0px;
        border-radius: 10px;
        /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.05) inset, 0 0 5px rgba(0, 0, 0, 0.1); */
        /* border: 10px solid #f9f9f9; */
        background-clip: text;
        -webkit-background-clip: text;
        text-fill-color: transparent;
        -webkit-text-fill-color: transparent;
    }

    .setting01 {
        background: linear-gradient(to right bottom, #182128 35%, #264a4d 65%);
    }

    .setting02 {
        background: linear-gradient(to right bottom, #182128 35%, #264a4d 65%);
    }

    .serviceBox {
        font-family: 'Poppins', sans-serif;
        text-align: center;
    }

    .serviceBox .service-icon {
        color: #fff;
        background: linear-gradient(to right bottom, #182128 35%, #264a4d 65%);
        font-size: 45px;
        line-height: 80px;
        height: 95px;
        width: 95px;
        margin: 0 auto 25px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05) inset, 0 0 5px rgba(0, 0, 0, 0.1);
        /* border: 10px solid #f9f9f9; */
        background-clip: text;
        -webkit-background-clip: text;
        text-fill-color: transparent;
        -webkit-text-fill-color: transparent;
    }

    .serviceBox .title {
        color: #777;
        font-size: 18px;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        margin: 0 0 8px;
    }

    .serviceBox .description {
        color: #999;
        font-size: 14px;
        line-height: 22px;
        margin: 0 15px;
    }

    .serviceBox.green .service-icon {
        background: linear-gradient(to right bottom, #182128 35%, #264a4d 65%);
        background-clip: text;
        -webkit-background-clip: text;
        text-fill-color: transparent;
        -webkit-text-fill-color: transparent;
    }

    .serviceBox.blue .service-icon {
        background: linear-gradient(to right bottom, #182128 35%, #264a4d 65%);
        background-clip: text;
        -webkit-background-clip: text;
        text-fill-color: transparent;
        -webkit-text-fill-color: transparent;
    }

    .serviceBox.orange .service-icon {
        background: linear-gradient(to right bottom, #182128 35%, #264a4d 65%);
        background-clip: text;
        -webkit-background-clip: text;
        text-fill-color: transparent;
        -webkit-text-fill-color: transparent;
    }

    @media only screen and (max-width: 990px) {
        .serviceBox {
            margin: 0 0 30px;
        }
    }


    nav {
        background-color: #182128;
        color: whitesmoke;
    }

    .navbar-toggler-icon {
        background-color: whitesmoke;
    }

    a {
        color: whitesmoke;
    }

    a:hover,
    a:active {
        color: #C8CDD1;
    }

    .active {
        color: black;
    }

    img {
        height: auto;
    }

    li>.nav-item>.active {
        color: #999;
    }

    /* 
    section {
            padding: 60px 0;
            min-height: 100vh;
        } */
    .contact-info {
        display: inline-block;
        width: 100%;
        text-align: center;
        margin-bottom: 10px;
    }

    .contact-info-icon {
        margin-bottom: 15px;
    }

    .contact-page-sec .contact-page-form h2 {
        color: #071c34;
        text-transform: capitalize;
        font-size: 22px;
        font-weight: 700;
    }

    .contact-page-form .col-md-6.col-sm-6.col-xs-12 {
        padding-left: 0;
    }

    .contact-page-form.contact-form input {
        margin-bottom: 5px;
    }

    .contact-page-form.contact-form textarea {
        height: 110px;
    }

    .contact-page-form.contact-form input[type="submit"] {
        background: #071c34;
        width: 150px;
        border-color: #071c34;
    }

    /* modify */
    .contact-info-icon i {
        font-size: 48px;
        color: #D1B48C;
    }

    .contact-page-map {
        border-radius: 25px;
    }

    .contact-info-item {
        border-radius: 25px;
        background: #182128;
        padding: 30px 0px;
    }

    .contact-info-text p {
        margin-bottom: 0px;
    }

    .contact-info-text h2 {
        color: #fff;
        font-size: 22px;
        text-transform: capitalize;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .contact-info-text span {
        color: #999999;
        font-size: 16px;
        font-weight: ;
        display: inline-block;
        width: 100%;
    }

    .contact-page-form input {
        background: #f9f9f9 none repeat scroll 0 0;
        border: 1px solid #f9f9f9;
        margin-bottom: 20px;
        padding: 12px 16px;
        width: 100%;
        border-radius: 4px;
    }

    .contact-page-form .message-input {
        display: inline-block;
        width: 100%;
        padding-left: 0;
    }

    .single-input-field textarea {
        background: #f9f9f9 none repeat scroll 0 0;
        border: 1px solid #f9f9f9;
        width: 100%;
        height: 120px;
        padding: 12px 16px;
        border-radius: 4px;
    }

    .single-input-fieldsbtn input[type="submit"] {
        background: #fda40b none repeat scroll 0 0;
        color: #fff;
        display: inline-block;
        font-weight: 600;
        padding: 10px 0;
        text-transform: capitalize;
        width: 150px;
        margin-top: 20px;
        font-size: 16px;
    }

    .single-input-fieldsbtn input[type="submit"]:hover {
        background: #071c34;
        transition: all 0.4s ease-in-out 0s;
        border-color: #071c34
    }

    .single-input-field h4 {
        color: #464646;
        text-transform: capitalize;
        font-size: 14px;
    }

    .contact-page-form {
        display: inline-block;
        width: 100%;
        margin-top: 30px;
    }

    .contact-page-map {
        margin-top: 36px;
    }

    .contact-page-form form {
        padding: 20px 15px 0;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    section {
        padding: 40px 0;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    /* .navbar-nav>li>.dropdown-menu a:link, */
    .navbar-nav>li>.dropdown-menu a:hover {
        background-color: #C8CDD1;
    }

    .contact-area {
        border-bottom: 1px solid #353C46;
    }

    .contact-content p {
        font-size: 15px;
        margin: 10px 0 30px;
        position: relative;
    }

    .contact-content p::after {
        background: #353C46;
        bottom: -20px;
        content: "";
        height: 1px;
        left: 50%;
        position: absolute;
        transform: translate(-50%);
        width: 60%;
    }

    .contact-content h6 {
        color: #8b9199;
        font-size: 15px;
        font-weight: 500;
    }

    .contact-content span {
        color: #353c47;
        margin: 0 10px;
    }

    .contact-social {
        margin-top: 10px;
    }

    .contact-social>ul {
        display: inline-flex;
    }

    .contact-social ul li a {
        border: 1px solid #8b9199;
        color: #8b9199;
        display: inline-block;
        height: 20px;
        margin: 0 8px;
        padding-top: 7px;
        transition: all 0.4s ease 0s;
        width: 20px;
    }

    .contact-social ul li a:hover {
        border: 1px solid #FAB702;
        color: #FAB702;
    }

    .contact-content img {
        max-width: 210px;
    }

    section,
    footer {
        background: #1A1E25;
        color: #868c96;
    }

    footer p {
        padding: 20px 0;
        text-align: center;
    }

    .fa-bars {
        color: whitesmoke;
    }
</style>

<body>
    <div id="app">


        <nav class="navbar navbar-expand-lg shadow-sm  fixed-top">
            <div class="container"> <a class="navbar-brand d-flex align-items-center" href="#">

                    <a class="navbar-brand" href="/">
                        <span class="ml-3 font-weight-bold">TABEISA</span>
                    </a>
                </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbar4">
                    <ul class="navbar-nav mr-auto pl-lg-4">
                        <li class="nav-item {{Request::is ('') ? 'active' : ''}}">
                            <a class="nav-link" href="/"> <span class="d-inline-block d-lg-none icon-width"><i class="fas fa-home"></i></span>Home</a>
                        </li>
                        <!-- <li class="nav-item px-lg-2"> <a class="nav-link" href="#"><span class="d-inline-block d-lg-none icon-width"><i class="fas fa-spa"></i></span>Services</a> </li> -->

                        <li class="nav-item px-lg-2 dropdown d-menu">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-caret-square-down"></i></span>About
                                <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </a>
                            <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item" href="/who_are_we">Who we are</a>
                                <a class="dropdown-item" href="/mission_vision">Mission and vision</a>
                            </div>
                        </li>


                        <li class="nav-item px-lg-2 {{Request::is ('contact') ? 'active' : ''}}">
                            <a class="nav-link" href="/contact"><span class="d-inline-block d-lg-none icon-width"><i class="fas fa-calendar"></i></span>Contact</a>
                        </li>

                        <!-- <li class="nav-item px-lg-2"> <a class="nav-link" href="#"><span class="d-inline-block d-lg-none icon-width"><i class="fas fa-robot"></i></span>Chatbot</a> </li> -->

                    </ul>
                    <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
                        <li class="nav-item"> <a class="nav-link" href="#">
                                <i class="fab fa-facebook"></i><span class="d-lg-none ml-3">Facebook</span>
                            </a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">
                                <i class="fab fa-instagram"></i><span class="d-lg-none ml-3">Instagram</span>
                            </a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">
                                <i class="fab fa-whatsapp"></i><span class="d-lg-none ml-3">Whatsapp</span>
                            </a> </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>


    <script>
        $(document).ready(function() {
            if ($(window).width() > 991) {
                $('.navbar-light .d-menu').hover(function() {
                    $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
                }, function() {
                    $(this).find('.sm-menu').first().stop(true, true).delay(120).slideUp(100);
                });
            }
        });
    </script>


    <section class="contact-area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="contact-content text-center">
                        <a href="#"><img src="https://res.cloudinary.com/daiey6vt0/image/upload/v1635155681/Tabeisa/tabeisa_coffee_sharpened_and_blurred_white_wlfcjy.png" alt="logo"></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum </p>
                        <div class="hr"></div>
                        <h6>CPUT Bellville Campus,
                            Bellvile South Industrial</span>
                            Cape Town, 7530</h6>

                        <p><i class="fa fa-phone"></i> 021 959 6911</p>
                        <div>
                            <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
                                <li> <a href="#">
                                        <i class="fab fa-facebook"></i><span class=" ml-3">Facebook</span>
                                    </a> <a href="#">
                                        <i class="fab fa-instagram"></i><span class=" ml-3">Instagram</span>
                                    </a> <a href="#">
                                        <i class="fab fa-whatsapp"></i><span class=" ml-3">Whatsapp</span>
                                    </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============== 1.9 Contact Area End ====================-->
    <!-- =============== 1.9 Footer Area Start ====================-->
    <footer class="text-light">
        <p> © {{ now()->year }} Copyright: <a href="http://e-kelasi.herokuapp.com/">Tabeisa</a>
            All Rights Reserved.</p>
    </footer>
</body>

</html>