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
    <link href="/css/tabeisa.css" rel="stylesheet">
    <!-- Bootstrap CSS Style -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


</head>


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
                            <a class="nav-link" href="/"> <span class="d-inline-block d-lg-none icon-width"></span>Home</a>
                        </li>
                        <!-- <li class="nav-item px-lg-2"> <a class="nav-link" href="#"><span class="d-inline-block d-lg-none icon-width"><i class="fas fa-spa"></i></span>Services</a> </li> -->

                        <!-- <li class="nav-item px-lg-2 dropdown d-menu">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-caret-square-down"></i></span>About
                                <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </a>
                            <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item" href="/who_are_we">Who we are</a>
                                <a class="dropdown-item" href="/mission_vision">Mission and vision</a>
                            </div>
                        </li> -->

                        <li class="nav-item px-lg-2 {{Request::is ('contact') ? 'active' : ''}}">
                            <a class="nav-link" href="/who_are_we"><span class="d-inline-block d-lg-none icon-width"><i class="fas fa-clendar"></i></span>Who we are</a>
                        </li>

                        <li class="nav-item px-lg-2 {{Request::is ('contact') ? 'active' : ''}}">
                            <a class="nav-link" href="/mission_vision"><span class="d-inline-block d-lg-none icon-width"><i class="fas fa-clendar"></i></span>Mission and vision</a>
                        </li>

                        <li class="nav-item px-lg-2 {{Request::is ('contact') ? 'active' : ''}}">
                            <a class="nav-link" href="/contact"><span class="d-inline-block d-lg-none icon-width"><i class="fas fa-caendar"></i></span>Contact</a>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

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
        <p> © {{ now()->year }} Copyright: <a href="/">Tabeisa</a>
            All Rights Reserved.</p>
    </footer>
</body>

</html>