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

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('assets/images/brand/favicon.ico')}}" />

		<!-- TITLE -->
		<title>Volgh –  Bootstrap 4 Responsive Application Admin panel Theme Ui Kit & Premium Dashboard Design Modern Flat HTML Template</title>
		
		<!-- BOOTSTRAP CSS -->
		<link href="{{ URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}"rel="stylesheet">
		
		<!-- STYLE CSS -->
		<link href="{{ URL::asset('assets/css/style.css')}}"rel="stylesheet">
		<link href="{{ URL::asset('assets/css/skin-modes.css')}}"rel="stylesheet">
		<link href="{{ URL::asset('assets/css/dark-style.css')}}"rel="stylesheet">

		
		<!--HORIZONTAL CSS-->

		<link href="{{ URL::asset('assets/plugins/horizontal-menu/horizontal-menu.css')}}"rel="stylesheet">
		<!--C3.JS CHARTS PLUGIN -->

		<link href="{{ URL::asset('assets/plugins/charts-c3/c3-chart.css')}}"rel="stylesheet">
		<!-- CUSTOM SCROLL BAR CSS-->

		<link href="{{ URL::asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}"rel="stylesheet">
		<!--- FONT-ICONS CSS -->

		<link href="{{ URL::asset('assets/css/icons.css')}}"rel="stylesheet">
		<!-- COLOR SKIN CSS -->

		<link href="{{ URL::asset('assets/colors/color1.css')}}"id="theme" rel="stylesheet" type="text/css" media="all">
	</head>

	<body class="login-img">

	    <!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- End GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page">
		   <!-- PAGE-CONTENT OPEN -->
			<div class="page-content error-page">
				<div class="container text-center">
					<div class="error-template">
						<h1 class="display-1  text-white mb-2">400<span class="text-transparent fs-20">error</span></h1>
						<h5 class="error-details text-white">
							Sorry, an error has occured, Requested page not found!
						</h5>
						<div class="text-center">
							<a class="btn btn-secondary mt-5 mb-5" href="/admin/home"> <i class="fa fa-long-arrow-left"></i> Back to Home </a>
						</div>
                    </div>
				</div>
			</div>
			<!-- PAGE-CONTENT OPEN CLOSED -->
		</div>
		<!-- End PAGE -->

		<!-- JQUERY JS -->

		<script src="{{ URL::asset('assets/js/jquery-3.4.1.min.js') }}"></script>
		<!-- BOOTSTRAP JS -->

		<script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ URL::asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
		<!-- SPARKLINE -->
		<script src="{{ URL::asset('assets/js/jquery.sparkline.min.js') }}"></script>
		<!-- CHART-CIRCLE -->
		<script src="{{ URL::asset('assets/js/circle-progress.min.js') }}"></script>
		<!-- RATING STAR -->
		<script src="{{ URL::asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>
		<!-- INPUT MASK PLUGIN-->

		<script src="{{ URL::asset('assets/plugins/input-mask/jquery.mask.min.js') }}"></script>
		<!-- CUSTOM SCROLL BAR JS-->

		<script src="{{ URL::asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
		<!-- CUSTOM JS-->

		<script src="{{ URL::asset('assets/js/custom.js') }}"></script>
	</body>
</html>