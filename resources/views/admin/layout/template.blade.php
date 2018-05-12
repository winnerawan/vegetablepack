<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>{{ config('app.name')  }}</title>
    <meta name="description" content="{{ config('app.name') }}"/>
    <meta name="keywords" content="{{ config('app.name') }}"/>
    <meta name="author" content="hencework"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Morris Charts CSS -->
    <link href="{{ asset("admin/vendors/bower_components/morris.js/morris.css") }}" rel="stylesheet" type="text/css"/>

    <!-- Data table CSS -->
    <link href="{{ asset("admin/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css") }}"
          rel="stylesheet" type="text/css"/>

    <link href="{{ asset("admin/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css") }}"
          rel="stylesheet" type="text/css">

    <!-- bootstrap-select CSS -->
    <link href="{{ asset("admin/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css") }}"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset("admin/vendors/bower_components/jquery.steps/demo/css/jquery.steps.css") }}">
    <!-- Bootstrap Switches CSS -->
    <link href="{{ asset("admin/vendors/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css") }}"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset("admin/vendors/bower_components/jquery.steps/demo/css/jquery.steps.css") }}">
    <link href="{{ asset("admin/vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css") }}" rel="stylesheet" type="text/css"/>
    <!-- switchery CSS -->
    <link href="{{ asset("admin/vendors/bower_components/switchery/dist/switchery.min.css") }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset("admin/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css") }}" rel="stylesheet" type="text/css"/>


    <link href="{{ asset("admin/vendors/bower_components/jsgrid/dist/jsgrid.min.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("admin/vendors/bower_components/jsgrid/dist/jsgrid-theme.min.css") }}" rel="stylesheet" type="text/css"/>
    <!-- Custom CSS -->
    <link href="{{ asset("admin/dist/css/style.css") }}" rel="stylesheet" type="text/css">
</head>

<body>
<!-- Preloader -->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>

<!-- /Preloader -->
<div class="wrapper theme-3-active box-layout pimary-color-green">

@include('admin.layout.header')

@include('admin.layout.sidebar')

<!-- Right Sidebar Backdrop -->
    <div class="right-sidebar-backdrop"></div>
    <!-- /Right Sidebar Backdrop -->

    @yield('content')

</div>

<!-- /#wrapper -->
<!-- JavaScript -->

<!-- jQuery -->
<script src="{{ asset("admin/vendors/bower_components/jquery/dist/jquery.min.js") }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset("admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js") }}"></script>

<!-- Data table JavaScript -->
<script src="{{ asset("admin/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js") }}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{ asset("admin/dist/js/jquery.slimscroll.js") }}"></script>

<!-- simpleWeather JavaScript -->
<script src="{{ asset("admin/vendors/bower_components/moment/min/moment.min.js") }}"></script>
<script src="{{ asset("admin/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js") }}"></script>
<script src="{{ asset("admin/dist/js/simpleweather-data.js") }}"></script>

<!-- Progressbar Animation JavaScript -->
<script src="{{ asset("admin/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js") }}"></script>
<script src="{{ asset("admin/vendors/bower_components/jquery.counterup/jquery.counterup.min.js") }}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{ asset("admin/dist/js/dropdown-bootstrap-extended.js") }}"></script>

<!-- Sparkline JavaScript -->
<script src="{{ asset("admin/vendors/jquery.sparkline/dist/jquery.sparkline.min.js") }}"></script>

<!-- Owl JavaScript -->
<script src="{{ asset("admin/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js") }}"></script>

<!-- ChartJS JavaScript -->
<script src="{{ asset("admin/vendors/chart.js/Chart.min.js") }}"></script>

<!-- EasyPieChart JavaScript -->
<script src="{{ asset("admin/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js") }}"></script>
<!-- Morris Charts JavaScript -->
<script src="{{ asset("admin/vendors/bower_components/raphael/raphael.min.js") }}"></script>
<script src="{{ asset("admin/vendors/bower_components/morris.js/morris.min.js") }}"></script>
<script src="{{ asset("admin/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js") }}"></script>

<!-- Switchery JavaScript -->
<script src="{{ asset("admin/vendors/bower_components/switchery/dist/switchery.min.js") }}"></script>

<!-- Bootstrap Select JavaScript -->
<script src="{{ asset("admin/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js") }}"></script>

<!-- Init JavaScript -->
<script src="{{ asset("admin/dist/js/init.js") }}"></script>
<script src="{{ asset("admin/dist/js/ecommerce-data.js") }}"></script>
<script src="{{ asset("admin/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("admin/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js") }}"></script>
<script src="{{ asset("admin/vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js") }}"></script>
<script src="{{ asset("admin/vendors/bower_components/jszip/dist/jszip.min.js") }}"></script>
<script src="{{ asset("admin/vendors/bower_components/pdfmake/build/pdfmake.min.js") }}"></script>
<script src="{{ asset("admin/vendors/bower_components/pdfmake/build/vfs_fonts.js") }}"></script>

<script src="{{ asset("admin/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js") }}"></script>
<script src="{{ asset("admin/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js") }}"></script>
<script src="{{ asset("admin/dist/js/export-table-data.js") }}"></script>
<!-- JSgrid table JavaScript -->
{{--<script src="{{ asset("admin/dist/js/db.js") }}"></script>--}}
<script src="{{ asset("admin/vendors/bower_components/jsgrid/dist/jsgrid.min.js") }}"></script>
<script src="{{ asset("admin/dist/js/jsgrid-data.js") }}"></script>
<script src="{{ asset("admin/vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js") }}"></script>
<script src="{{ asset("admin/vendors/bower_components/switchery/dist/switchery.min.js") }}"></script>
<script src="{{ asset("admin/vendors/bower_components/jquery.steps/build/jquery.steps.min.js") }}"></script>
<!-- Fancy Dropdown JS -->
<script src="{{ asset("admin/dist/js/dropdown-bootstrap-extended.js") }}"></script>

<!-- Starrr JavaScript -->
<script src="{{ asset("admin/dist/js/starrr.js") }}"></script>

<!-- Product Detail Data JavaScript -->
<script src="{{ asset("admin/dist/js/product-detail-data.js") }}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{ asset("admin/dist/js/jquery.slimscroll.js") }}"></script>
</body>

</html>

