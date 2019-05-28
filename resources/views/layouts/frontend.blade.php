<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title', config('app.name', 'CasseOrdi') )</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('images/')}}/logo/icone.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/vendor/MagnificPopup/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/css/main.css">
    <!--===============================================================================================-->
</head>
<body class="animsition">

@include('layouts.partials.frontend._navbar')




@yield('content')


<!-- Footer -->
<footer class="bg3 p-t-75 p-b-32">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Categories
                </h4>

                <ul>
                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Women
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Men
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Shoes
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Watches
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Help
                </h4>

                <ul>
                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Track Order
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Returns
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Shipping
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            FAQs
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    GET IN TOUCH
                </h4>

                <p class="stext-107 cl7 size-201">
                    Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
                </p>

                <div class="p-t-27">
                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-instagram"></i>
                    </a>

                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-pinterest-p"></i>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Newsletter
                </h4>

                <form>
                    <div class="wrap-input1 w-full p-b-4">
                        <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
                        <div class="focus-input1 trans-04"></div>
                    </div>

                    <div class="p-t-18">
                        <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="p-t-40">
            <div class="flex-c-m flex-w p-b-18">
                <a href="#" class="m-all-1">
                    <img src="{{asset('frontend/')}}/images/icons/icon-pay-01.png" alt="ICON-PAY">
                </a>

                <a href="#" class="m-all-1">
                    <img src="{{asset('frontend/')}}/images/icons/icon-pay-02.png" alt="ICON-PAY">
                </a>

                <a href="#" class="m-all-1">
                    <img src="{{asset('frontend/')}}/images/icons/icon-pay-03.png" alt="ICON-PAY">
                </a>

                <a href="#" class="m-all-1">
                    <img src="{{asset('frontend/')}}/images/icons/icon-pay-04.png" alt="ICON-PAY">
                </a>

                <a href="#" class="m-all-1">
                    <img src="{{asset('frontend/')}}/images/icons/icon-pay-05.png" alt="ICON-PAY">
                </a>
            </div>


        </div>
    </div>
</footer>


<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
</div>



<!--===============================================================================================-->
<script src="{{asset('frontend/')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('frontend/')}}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('frontend/')}}/vendor/bootstrap/js/popper.js"></script>
<script src="{{asset('frontend/')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('frontend/')}}/vendor/select2/select2.min.js"></script>
<script>
    $(".js-select2").each(function(){
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
    })
</script>
<!--===============================================================================================-->
<script src="{{asset('frontend/')}}/vendor/daterangepicker/moment.min.js"></script>
<script src="{{asset('frontend/')}}/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="{{asset('frontend/')}}/vendor/slick/slick.min.js"></script>
<script src="{{asset('frontend/')}}/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script src="{{asset('frontend/')}}/vendor/parallax100/parallax100.js"></script>
<script>
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="{{asset('frontend/')}}/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<script>
    $('.gallery-lb').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled:true
            },
            mainClass: 'mfp-fade'
        });
    });
</script>
<!--===============================================================================================-->
<script src="{{asset('frontend/')}}/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('frontend/')}}/vendor/sweetalert/sweetalert.min.js"></script>
<script>
    $('.js-addwish-b2').on('click', function(e){
        e.preventDefault();
    });

    $('.js-addwish-b2').each(function(){
        var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-b2');
            $(this).off('click');
        });
    });

    $('.js-addwish-detail').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

        $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-detail');
            $(this).off('click');
        });
    });

    /*---------------------------------------------*/

    $('.js-addcart-detail').each(function(){
        var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to cart !", "success");
        });
    });

</script>
<!--===============================================================================================-->
<script src="{{asset('frontend/')}}/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
    $('.js-pscroll').each(function(){
        $(this).css('position','relative');
        $(this).css('overflow','hidden');
        var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
        });

        $(window).on('resize', function(){
            ps.update();
        })
    });
</script>
<!--===============================================================================================-->
<script src="{{asset('frontend/')}}/js/main.js"></script>

</body>
</html>
