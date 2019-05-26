<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title Page-->
    <title>@yield('title','Tableau de bord')</title>

    <link rel="icon" type="image/png" href="{{asset('images/')}}/logo/icone.ico"/>

    <!-- Fontfaces CSS-->
    <link href="{{asset('backend/')}}/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{asset('backend/')}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{asset('backend/')}}/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{asset('backend/')}}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('backend/')}}/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('backend/')}}/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{asset('backend/')}}/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{asset('backend/')}}/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{asset('backend/')}}/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{asset('backend/')}}/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{asset('backend/')}}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('backend/')}}/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('backend/')}}/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.html">
                        <img src="{{asset('images/')}}/logo/logo.gif" alt="LOGO CASSEORDI">
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Tableau de bord</a>

                    </li>

                    <li>
                        <a href="#">
                            <i class="fas fa-chart-bar"></i>Catégories</a>
                    </li>

                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Produits</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="#">Tous les produits</a>
                            </li>
                            <li>
                                <a href="#">Ajouter un produit</a>
                            </li>

                        </ul>
                    </li>

                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Utilisateurs</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="#">Tous les utilisateurs</a>
                            </li>
                            <li>
                                <a href="#">Ajouter un utilisateur</a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="{{asset('images/')}}/logo/logo.gif" alt="LOGO CASSEORDI">
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Tableau de bord</a>

                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-chart-bar"></i>Catégories</a>
                    </li>

                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Produits</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="#">Tous les produits</a>
                            </li>
                            <li>
                                <a href="#">Ajouter un produit</a>
                            </li>

                        </ul>
                    </li>


                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Utilisateurs</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="#">Tous les utilisateurs</a>
                            </li>
                            <li>
                                <a href="#">Ajouter un utilisateur</a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                        <div class="header-button">

                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                        <img src="{{asset('images/')}}/user.png" alt="{{Auth::user()->name}}">
                                    </div>
                                    <div class="content">
                                        <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="{{asset('images/')}}/user.png" alt="{{Auth::user()->name}}">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#">{{Auth::user()->name}}</a>
                                                </h5>
                                                <span class="email">{{Auth::user()->email}}</span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-account"></i>Mon compte</a>
                                            </div>


                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i class="zmdi zmdi-power"></i>Se déconnecter</a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                @yield('content')
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

</div>

<!-- Jquery JS-->
<script src="{{asset('backend/')}}/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="{{asset('backend/')}}/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="{{asset('backend/')}}/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="{{asset('backend/')}}/vendor/slick/slick.min.js">
</script>
<script src="{{asset('backend/')}}/vendor/wow/wow.min.js"></script>
<script src="{{asset('backend/')}}/vendor/animsition/animsition.min.js"></script>
<script src="{{asset('backend/')}}/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="{{asset('backend/')}}/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="{{asset('backend/')}}/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="{{asset('backend/')}}/vendor/circle-progress/circle-progress.min.js"></script>
<script src="{{asset('backend/')}}/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="{{asset('backend/')}}/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="{{asset('backend/')}}/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="{{asset('backend/')}}/js/main.js"></script>

</body>

</html>
<!-- end document-->
