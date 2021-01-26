<!doctype html>
<html lang="en" dir="ltr">
<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Volgh –  Bootstrap 4 Responsive Application Admin panel Theme Ui Kit & Premium Dashboard Design Modern Flat HTML Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="analytics dashboard, bootstrap 4 web app admin template, bootstrap admin panel, bootstrap admin template, bootstrap dashboard, bootstrap panel, Application dashboard design, dashboard design template, dashboard jquery clean html, dashboard template theme, dashboard responsive ui, html admin backend template ui kit, html flat dashboard template, it admin dashboard ui, premium modern html template">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../theme/assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Volgh –  Bootstrap 4 Responsive Application Admin panel Theme Ui Kit & Premium Dashboard Design Modern Flat HTML Template</title>

    <!-- BOOTSTRAP CSS -->
    <link href="../theme/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../theme/assets/css/style.css" rel="stylesheet"/>
    <link href="../theme/assets/css/skin-modes.css" rel="stylesheet"/>
    <link href="../theme/assets/css/dark-style.css" rel="stylesheet"/>

    <!-- SIDE-MENU CSS -->
    <link href="../theme/assets/plugins/sidemenu/sidemenu.css" rel="stylesheet">

    <!-- SINGLE-PAGE CSS -->
    <link href="../theme/assets/plugins/single-page/css/main.css" rel="stylesheet" type="text/css">

    <!--C3 CHARTS CSS -->
    <link href="../theme/assets/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>

    <!-- CUSTOM SCROLL BAR CSS-->
    <link href="../theme/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

    <!--- FONT-ICONS CSS -->
    <link href="../theme/assets/css/icons.css" rel="stylesheet"/>

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../theme/assets/colors/color1.css" />

</head>

<body>

<!-- BACKGROUND-IMAGE -->
<div class="login-img">

    <!-- GLOABAL LOADER -->
    <div id="global-loader">
        <img src="../theme/assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOABAL LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="">
            <!-- CONTAINER OPEN -->
            <div class="col col-login mx-auto">
                <div class="text-center">
                    <img src="../theme/assets/images/brand/logo.png" class="header-brand-img" alt="">
                </div>
            </div>
            <div class="container-login100">
                <div class="wrap-login100 p-6">
                    <form class="login100-form validate-form">
								<span class="login100-form-title">
									Login
								</span>
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email" placeholder="Email" id="inputUserEmail">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
										<i class="zmdi zmdi-email" aria-hidden="true"></i>
									</span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" type="password" name="pass" placeholder="Password" id="inputPassword">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
										<i class="zmdi zmdi-lock" aria-hidden="true"></i>
									</span>
                        </div>
                        <div class="text-right pt-1">
                            <p class="mb-0"><a href="/admin/forgot-password" class="text-primary ml-1">Forgot Password?</a></p>
                        </div>
                        <div class="container-login100-form-btn">
                            <button id="buttonLogin" class="btn login100-form-btn btn-primary" type="button">Login</button>
                        </div>
                        <div class="text-center pt-3">
                            <p class="text-dark mb-0">Not a member?<a href="register.blade.php" class="text-primary ml-1">Sign UP now</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!-- End PAGE -->

</div>
<!-- BACKGROUND-IMAGE CLOSED -->

<!-- JQUERY JS -->
<script src="../theme/assets/js/jquery-3.4.1.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="../theme/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../theme/assets/plugins/bootstrap/js/popper.min.js"></script>

<!-- SPARKLINE JS -->
<script src="../theme/assets/js/jquery.sparkline.min.js"></script>

<!-- CHART-CIRCLE JS -->
<script src="../theme/assets/js/circle-progress.min.js"></script>

<!-- RATING STAR JS -->
<script src="../theme/assets/plugins/rating/jquery.rating-stars.js"></script>

<!-- INPUT MASK JS -->
<script src="../theme/assets/plugins/input-mask/jquery.mask.min.js"></script>

<!-- CUSTOM SCROLL BAR JS-->
<script src="../theme/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- CUSTOM JS-->
<script src="../theme/assets/js/custom.js"></script>

<script src="../js/common/common.js"></script>
<script src="../js/common/apiHandler.js"></script>
<script src="../js/admin/author/login.js"></script>
</body>
</html>
