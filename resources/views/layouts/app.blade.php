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
        max-width: 960px;
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
        width: 100%;
        cursor: pointer;
        -webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        filter: grayscale(100%);
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

    a:hover {
        color: #d6d6d6;
    }

    img {
        height: auto;
    }

    li>.nav-item>.active {
        color: #999;
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
                    <span class="navbar-toggler-icon"></span>
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
                        <li class="nav-item px-lg-2"> <a class="nav-link" href="/contact"><span class="d-inline-block d-lg-none icon-width"><i class="fas fa-calendar"></i></span>Contact</a> </li>

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

        <main class="">
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


    <footer class="text-center text-lg-start" style="background-color: #829199;">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-2">
                    <h5 class="text-uppercase">
                        <img src="https://res.cloudinary.com/daiey6vt0/image/upload/v1634695090/Tabeisa/tabeisa_coffee_sharpened_and_blurred_USE_THIS_f2tib5.png" alt="" width="120" height="35">

                    </h5>

                    <p>
                        We are here for your break.

                    </p>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mb-4 mb-md-0 ">
                    <h5 class="text-uppercase">Tabeisa Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li class="{{Request::is ('contact') ? 'active' : ''}}">
                            <a href="/" class="text-dark">Services</a>
                        </li>
                        <li class="{{Request::is ('contact') ? 'active' : ''}}">
                            <a href="/" class="text-dark">Event</a>
                        </li>
                        <li class="{{Request::is ('contact') ? 'active' : ''}}">
                            <a href="/" class="text-dark">Who we are</a>
                        </li>
                        <li class="{{Request::is ('contact') ? 'active' : ''}}">
                            <a href="/contact" class="text-dark">Mission and vision</a>
                        </li>
                        <li>
                            <!-- <a href="#!" class="text-dark">T&Cs</a> -->
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Follow us</h5>
                    <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
                        <li class="nav-item"> <a class="nav-link" href="#">
                                <i class="fab fa-facebook"></i><span class="d-lg-none ml-3">Facebook</span>
                            </a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">
                                <i class="fab fa-instagram"></i><span class="d-lg-none ml-3">Instagram</span>
                            </a> </li>
                    </ul>

                </div>
            </div>
            <!-- <i class='fas fa-arrow-alt-circle-up float-right pointerscrollup' onclick="scrollToTop()" style='font-size:38px;color:#DADED4'></i> -->
        </div>
        <!-- <footer class="text-light text-center text-lg-start" style="background-color: #DADED4;"> -->

        <!-- Copyright -->
        <div class="text-light text-center p-3 " style="background-color: #182128;">
            © 2021 Copyright:
            <a class="text-light">tabeisa.co.za</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>