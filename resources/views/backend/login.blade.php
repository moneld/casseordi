<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title Page-->
    <title>Connexion</title>

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
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img src="{{asset('images/')}}/logo/logo.gif" alt="LOGO CASSEORDI">
                        </a>
                    </div>
                    <div class="login-form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input class="au-input au-input--full @error('email') is-invalid form-control @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                        <p class="text-danger text-small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Mot de passe</label>
                                <input class="au-input au-input--full @error('password') is-invalid form-control @enderror" type="password" name="password" required autocomplete="current-password">
                                @error('password')
                                    <p class="text-danger text-small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="login-checkbox">
                                <label>
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Se souvenir de moi
                                </label>
                                <label>
                                    <a href="{{ route('motdepasse-oublie') }}" class="text-primary">Mot de passe oublié</a>
                                </label>
                            </div>
                            <button class="btn btn-block btn-lg btn-danger m-b-20" type="submit">Connexion</button>

                        </form>

                        <div class="register-link">
                            <p>
                                 <a href="{{ route('accueil') }}" class="text-primary">Retour sur CasseOrdi</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
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
