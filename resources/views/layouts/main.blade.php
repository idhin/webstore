<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('main/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('main/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('main/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('main/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('main/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('main/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('main/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('main/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                    <div class="tip">2</div>
                </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                    <div class="tip">2</div>
                </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{ asset('main/img/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 text-center">
                    @component('home/component/navbar',[])
                    @endcomponent
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <a href="/login">Login</a>
                            <a href="/register">Register</a>
                        </div>
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li>
                                <a href="/cart">
                                    <span class="fa fa-shopping-cart"></span>
                                    <div class="tip">2</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    @yield('content')
    <!-- Footer Section Begin -->
    @component('home/component/footer',[])
    @endcomponent
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{ asset('main/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('main/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('main/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('main/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('main/js/mixitup.min.js')}}"></script>
    <script src="{{ asset('main/js/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('main/js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset('main/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('main/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ asset('main/js/main.js')}}"></script>
</body>

</html>