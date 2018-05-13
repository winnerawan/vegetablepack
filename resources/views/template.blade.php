<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset("organic/images/icons/favicon.png") }}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("organic/vendor/bootstrap/css/bootstrap.min.css") }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("organic/fonts/font-awesome-4.7.0/css/font-awesome.min.css") }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("organic/fonts/linearicons-v1.0.0/icon-font.min.css") }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("organic/vendor/animate/animate.css") }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("organic/vendor/css-hamburgers/hamburgers.min.css") }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("organic/vendor/animsition/css/animsition.min.css") }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("organic/vendor/select2/select2.min.css") }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("organic/vendor/daterangepicker/daterangepicker.css") }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("organic/vendor/slick/slick.css") }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("organic/vendor/lightbox2/css/lightbox.min.css") }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("organic/vendor/perfect-scrollbar/perfect-scrollbar.css") }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("organic/vendor/revolution/css/layers.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("organic/vendor/revolution/css/navigation.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("organic/vendor/revolution/css/settings.css") }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("organic/css/util.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("organic/css/main.css") }}">
    <!--===============================================================================================-->
</head>


<body class="animsition">

@include('partials.header')

@include('partials.slider')
@include('partials.category')

@include('partials.vegetables')



@include('partials.footer')
<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
            <span class="symbol-btn-back-to-top">
                <span class="lnr lnr-chevron-up"></span>
            </span>
</div>


    <!--===============================================================================================-->
    <script src="{{ asset("organic/vendor/jquery/jquery-3.2.1.min.js") }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset("organic/vendor/animsition/js/animsition.min.js") }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset("organic/vendor/bootstrap/js/popper.js") }}"></script>
    <script src="{{ asset("organic/vendor/bootstrap/js/bootstrap.min.js") }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset("organic/vendor/revolution/js/jquery.themepunch.tools.min.js") }}"></script>
    <script src="{{ asset("organic/vendor/revolution/js/jquery.themepunch.revolution.min.js") }}"></script>
    <script src="{{ asset("organic/vendor/revolution/js/extensions/revolution.extension.video.min.js") }}"></script>
    <script src="{{ asset("organic/vendor/revolution/js/extensions/revolution.extension.carousel.min.js") }}"></script>
    <script src="{{ asset("organic/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js") }}"></script>
    <script src="{{ asset("organic/vendor/revolution/js/extensions/revolution.extension.actions.min.js") }}"></script>
    <script src="{{ asset("organic/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js") }}"></script>
    <script src="{{ asset("organic/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js") }}"></script>
    <script src="{{ asset("organic/vendor/revolution/js/extensions/revolution.extension.navigation.min.js") }}"></script>
    <script src="{{ asset("organic/vendor/revolution/js/extensions/revolution.extension.migration.min.js") }}"></script>
    <script src="{{ asset("organic/vendor/revolution/js/extensions/revolution.extension.parallax.min.js") }}"></script>
    <script src="{{ asset("organic/js/revo-custom.js") }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset("organic/vendor/select2/select2.min.js") }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset("organic/vendor/daterangepicker/moment.min.js") }}"></script>
    <script src="{{ asset("organic/vendor/daterangepicker/daterangepicker.js") }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset("organic/vendor/slick/slick.min.js") }}"></script>
    <script src="{{ asset("organic/js/slick-custom.js") }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset("organic/vendor/parallax100/parallax100.js") }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset("organic/vendor/lightbox2/js/lightbox.min.js") }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset("organic/vendor/isotope/isotope.pkgd.min.js") }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset("organic/vendor/sweetalert/sweetalert.min.js") }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset("organic/vendor/countdowntime/moment.min.js") }}"></script>
    <script src="{{ asset("organic/vendor/countdowntime/moment-timezone.min.js") }}"></script>
    <script src="{{ asset("organic/vendor/countdowntime/moment-timezone-with-data.min.js") }}"></script>
    <script src="{{ asset("organic/vendor/countdowntime/jquery.countdown.min.js") }}"></script>
    <script src="{{ asset("organic/vendor/countdowntime/countdowntime.js") }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset("organic/vendor/perfect-scrollbar/perfect-scrollbar.min.js") }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset("organic/js/main.js") }}"></script>

</body>
</html>