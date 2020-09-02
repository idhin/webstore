<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$pageName}}</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/jqvmap/dist/jqvmap.min.css')}}">



    <link rel="stylesheet" href="{{ asset('admin/vendors/chosen/chosen.min.css')}}">

    <!-- dropify -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/dropify/dist/css/dropify.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/tracker.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default fixed">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="{{ asset('admin/images/logo.png')}}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{ asset('admin/images/logo2.png')}}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/admin/dashboard"> <i class="menu-icon fa fa-home"></i>Home </a>
                    </li>
                    <li class="menu-item-has-children dropdown {{ Route::currentRouteNamed('product') ? 'show' : '' }}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-tag"></i>Produk</a>
                        <ul
                            class="sub-menu children dropdown-menu {{ Route::currentRouteNamed('product') ? 'show' : '' }}">
                            <li><i class="fa fa-tag"></i><a href="/admin/product">Produk</a></li>
                            <li><i class="fa fa-dropbox"></i><a href="/admin/product/stock">Kelola Stok</a></li>
                            <li><i class="fa fa-bars"></i><a href="/admin/product/category">Kategori</a></li>
                            <li><i class="fa fa-book"></i><a href="/admin/product/catalog">Katalog</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="/admin/product/import">Impor</a>
                            </li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown {{ Route::currentRouteNamed('order') ? 'show' : '' }}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-check"></i>Order</a>
                        <ul
                            class="sub-menu children dropdown-menu {{ Route::currentRouteNamed('order') ? 'show' : '' }}">
                            <li><i class="fa fa-shopping-cart"></i><a href="/admin/order">Order</a></li>
                            <li><i class="fa fa-cart-plus"></i><a href="/admin/order/draft">Draft</a></li>
                            <li><i class="fa fa-cart-arrow-down"></i><a
                                    href="/admin/order/checkout/abandoned">Tertinggal</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/admin/discount"> <i class="menu-icon fa fa-cut"></i>Diskon </a>
                    </li>
                    <li
                        class="menu-item-has-children dropdown {{ Route::currentRouteNamed('customer') ? 'show' : '' }}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Pelanggan</a>
                        <ul
                            class="sub-menu children dropdown-menu {{ Route::currentRouteNamed('customer') ? 'show' : '' }}">
                            <li><i class="menu-icon fa fa-user"></i><a href="/admin/customer">Pelanggan</a></li>
                            <li><i class="menu-icon fa fa-tag"></i><a href="/admin/customer/segment">Segmen</a></li>
                            <li><i class="menu-icon fa fa-shopping-basket"></i><a
                                    href="/admin/customer/reseller">Reseller</a></li>
                        </ul>
                    </li>

                    <li
                        class="menu-item-has-children dropdown {{ Route::currentRouteNamed('marketing') ? 'show' : '' }}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Pemasaran</a>
                        <ul
                            class="sub-menu children dropdown-menu {{ Route::currentRouteNamed('marketing') ? 'show' : '' }}">
                            <li><i class="menu-icon fa fa-envelope"></i><a href="/admin/email/newsletter">Email
                                    Newsletter</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="/admin/message">SMS Massal</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown {{ Route::currentRouteNamed('report') ? 'show' : '' }}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Laporan</a>
                        <ul
                            class="sub-menu children dropdown-menu {{ Route::currentRouteNamed('report') ? 'show' : '' }}">
                            <li><i class="menu-icon fa fa-shopping-cart"></i><a href="/admin/report">Penjualan</a></li>
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="/admin/report/pageview">Page View</a>
                            </li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="/admin/report/formdata">Formulir
                                    Data</a></li>
                            <li><i class="menu-icon fa fa-history"></i><a href="/admin/report/history/stock">Riwayat
                                    Stok</a></li>
                            <li><i class="menu-icon fa fa-history"></i><a href="/admin/report/history/email">Riwayat
                                    Email</a></li>
                            <li><i class="menu-icon fa fa-user"></i><a href="/admin/report/staff">Staff</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown {{ Route::currentRouteNamed('setting') ? 'show' : '' }}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-cog"></i>Pengaturan</a>
                        <ul
                            class="sub-menu children dropdown-menu {{ Route::currentRouteNamed('setting') ? 'show' : '' }}">
                            <li><i class="menu-icon fa fa-cog"></i><a href="/admin/setting">General</a></li>
                            <li><i class="menu-icon fa fa-cog"></i><a href="/admin/setting/domain">Nama Domain</a></li>
                            <li><i class="menu-icon fa fa-cog"></i><a href="/admin/setting/payment">Pembayaran</a></li>
                            <li><i class="menu-icon fa fa-cog"></i><a href="/admin/setting/shipping">Pengiriman</a></li>
                            <li><i class="menu-icon fa fa-cog"></i><a href="/admin/setting/billing">Paket &
                                    Billing</a></li>
                            <li><i class="menu-icon fa fa-cog"></i><a href="/admin/setting/staff">Staff</a></li>
                            <li><i class="menu-icon fa fa-cog"></i><a href="/admin/setting/blocklist">Blocklist</a></li>
                            <li><i class="menu-icon fa fa-cog"></i><a href="/admin/setting/integration">Integrasi</a>
                            </li>
                            <li><i class="menu-icon fa fa-cog"></i><a href="/admin/setting/security">Keamanan</a></li>

                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <a href="/" target="_blank">Website</a>
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                    aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                    <span class="photo media-left"><img alt="avatar"
                                            src="{{ asset('admin/images/avatar/1.jpg')}}"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                    <span class="photo media-left"><img alt="avatar"
                                            src="{{ asset('admin/images/avatar/2.jpg')}}"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                    <span class="photo media-left"><img alt="avatar"
                                            src="{{ asset('admin/images/avatar/3.jpg')}}"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                    <span class="photo media-left"><img alt="avatar"
                                            src="{{ asset('admin/images/avatar/4.jpg')}}"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{ asset('admin/images/admin.jpg')}}"
                                alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span
                                    class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->



        <div class="content mt-3">
            @yield('content')
        </div>

    </div>

    <!-- Right Panel -->

    <script src="{{ asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin/assets/js/main.js')}}"></script>


    <script src="{{ asset('admin/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('admin/assets/js/dashboard.js')}}"></script>
    <script src="{{ asset('admin/assets/js/widgets.js')}}"></script>
    <script src="{{ asset('admin/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{ asset('admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{ asset('admin/vendors/chosen/chosen.jquery.min.js')}}"></script>
    <!-- dropify js -->
    <script src="{{ asset('vendor/dropify/dist/js/dropify.min.js')}}" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <!--  Chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

    <script>
        ;(function($){
            $('.dropify').dropify();
            $('#summernote').summernote({
                tabsize: 2,
                height: 500
            });
            $('#summernote_small').summernote({
                placeholder: 'Tulis Deskrpsi Produk Kamu Disini',
                tabsize: 2,
                height: 150
            });
        })(jQuery);

    </script>
    <script>
        ;(function($){
        $(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
            });
        })(jQuery);
    </script>
    <script>
        ;(function($){
            $(".plus").click( function(e) {
    
            e.preventDefault();
    
            // Define field variable
            field = "input[name=" + $(this).attr("field") + "]";
    
            // Get its current value
            var currentVal = parseInt($(field).val());
    
            // If is not undefined
            if ( !isNaN(currentVal) && currentVal < 20 ) { // Increment $(field).val(currentVal + 1); } }); // This button will
                decrement the value till 0 $(".minus").click( function(e) { e.preventDefault(); // Define field variable
                field="input[name=" + $(this).attr("field") + "]" ; // Get its current value var
                currentVal=parseInt($(field).val()); // If it isn't undefined or its greater than 0 if ( !isNaN(currentVal) &&
                currentVal> 1 ) {
                // Decrement one
                $(field).val(currentVal - 1);
                }
    
                });
        })(jQuery);
    </script>

</body>

</html>