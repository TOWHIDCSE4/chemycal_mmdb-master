<!doctype html>
<html lang="en" dir="ltr">
<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Chemycal">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="analytics dashboard, bootstrap 4 web app admin template, bootstrap admin panel, bootstrap admin template, bootstrap dashboard, bootstrap panel, Application dashboard design, dashboard design template, dashboard jquery clean html, dashboard template theme, dashboard responsive ui, html admin backend template ui kit, html flat dashboard template, it admin dashboard ui, premium modern html template">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href={{URL::asset("/assets/images/brand/favicon.ico")}} />

    <!-- TITLE -->
    <title>@yield('title')</title>

    <!-- BOOTSTRAP CSS -->
    <link href={{URL::asset("/assets/plugins/bootstrap/css/bootstrap.min.css")}} rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href={{URL::asset("/assets/css/style.css")}} rel="stylesheet"/>
    <link href={{URL::asset("/assets/css/skin-modes.css")}} rel="stylesheet"/>
    <link href={{URL::asset("/assets/css/dark-style.css")}} rel="stylesheet"/>

    <!-- SIDE-MENU CSS -->
    <link href={{URL::asset("/assets/plugins/sidemenu/sidemenu.css")}} rel="stylesheet">

    <!--C3 CHARTS CSS -->
    <link href={{URL::asset("/assets/plugins/charts-c3/c3-chart.css")}} rel="stylesheet"/>

    <!-- CUSTOM SCROLL BAR CSS-->
    <link href={{URL::asset("/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css")}} rel="stylesheet"/>

    <!--- FONT-ICONS CSS -->
    <link href={{URL::asset("/assets/css/icons.css")}} rel="stylesheet"/>

    <!-- SIDEBAR CSS -->
    <link href={{URL::asset("/assets/plugins/sidebar/sidebar.css")}} rel="stylesheet">

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href={{asset("/assets/colors/color1.css")}} />

    @yield('css-define')

</head>

<body class="app sidebar-mini">

<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
    {{--MENU--}}
    @include('user.home.menu')

{{--CONTENT--}}
@yield('content')


<!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12 col-sm-12 text-center">
                    Copyright © 2019 <a href="#">Chemycal</a>.
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->
</div>

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JQUERY JS -->
<script src={{URL::asset("/assets/js/jquery-3.4.1.min.js")}}></script>

<!-- BOOTSTRAP JS -->
<script src={{URL::asset("/assets/plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<script src={{URL::asset("/assets/plugins/bootstrap/js/popper.min.js")}}></script>

<!-- SPARKLINE JS-->
<script src={{URL::asset("/assets/js/jquery.sparkline.min.js")}}></script>

<!-- CHART-CIRCLE JS-->
<script src={{URL::asset("/assets/js/circle-progress.min.js")}}></script>

<!-- RATING STARJS -->
<script src={{URL::asset("/assets/plugins/rating/jquery.rating-stars.js")}}></script>

<!-- CHARTJS CHART JS-->
<script src={{URL::asset("/assets/plugins/chart/Chart.bundle.js")}}></script>
<script src={{URL::asset("/assets/plugins/chart/utils.js")}}></script>

<!-- PIETY CHART JS-->
<script src={{URL::asset("/assets/plugins/peitychart/jquery.peity.min.js")}}></script>
<script src={{URL::asset("/assets/plugins/peitychart/peitychart.init.js")}}></script>

<!-- ECHART JS-->
<script src={{URL::asset("/assets/plugins/echarts/echarts.js")}}></script>

<!-- SIDE-MENU JS-->
<script src={{URL::asset("/assets/plugins/sidemenu/sidemenu.js")}}></script>

<!-- CUSTOM SCROLLBAR JS-->
<script src={{URL::asset("/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js")}}></script>

<!-- SIDEBAR JS -->
<script src={{URL::asset("/assets/plugins/sidebar/sidebar.js")}}></script>

<!-- APEXCHART JS -->
<script src={{URL::asset("/assets/js/apexcharts.js")}}></script>

<!-- INDEX JS -->
<script src={{URL::asset("/assets/js/index1.js")}}></script>

<!-- CUSTOM JS -->
<script src={{URL::asset("/assets/js/custom.js")}}></script>

@yield('js-define')
</body>
</html>