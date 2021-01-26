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
		<link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('assets/images/brand/favicon.ico') }}" />

		<!-- TITLE -->
		<title>Volgh –  Bootstrap 4 Responsive Application Admin panel Theme Ui Kit & Premium Dashboard Design Modern Flat HTML Template</title>

		<!-- BOOTSTRAP CSS -->
		<link href="{{ URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
		<!-- STYLE CSS -->
		<link href="{{ URL::asset('assets/css/style.css')}}" rel="stylesheet"/>
		<link  href="{{ URL::asset('assets/css/skin-modes.css')}}" rel="stylesheet"/>
		<link  href="{{ URL::asset('assets/css/dark-style.css')}}" rel="stylesheet"/>

		<!-- SIDE-MENU CSS -->
		<link href="{{ URL::asset('assets/plugins/sidemenu/sidemenu.css')}}"rel="stylesheet">



		<!--C3 CHARTS CSS -->
		<link href="{{ URL::asset('assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet"/>


		<!-- CUSTOM SCROLL BAR CSS-->
		<link href="{{ URL::asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>


		<!--- FONT-ICONS CSS -->
		<link href="{{ URL::asset('assets/css/icons.css')}}" rel="stylesheet"/>


		<!-- SIDEBAR CSS -->
		<link href="{{ URL::asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ URL::asset('assets/colors/color1.css')}}" />

		<link href="{{ URL::asset('css/style.css')}}" rel="stylesheet"/>

	</head>

	<body class="app sidebar-mini">

		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="{{ URL::asset('/assets/images/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOBAL-LOADER -->


		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				<!--APP-SIDEBAR-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar">
					<div class="side-header">
						<a class="header-brand1 logo-container" href="/" style="text-align: -webkit-center;">
							<img  class="header-brand-img light-logo1"  style="width: 70%;object-fit: contain;" src="{{asset("/assets/images/logo/logo.png")}}" alt="">
						</a><!-- LOGO -->
						<a aria-label="Hide Sidebar" class="app-sidebar__toggle ml-auto" data-toggle="sidebar" href="#"></a>
						<!-- sidebar-toggle-->
					</div>
					<div class="app-sidebar__user">
						<div class="dropdown user-pro-body text-center">
							<div class="user-pic">
								<img src="{{ URL::asset('assets/images/users/10.jpg') }}" alt="user-img" class="avatar-xl rounded-circle">
							</div>
							<div class="user-info">
								<h6 class=" mb-0 text-dark name-admin"></h6>
								<span class="text-muted app-sidebar__user-name text-sm">Administrator</span>
							</div>
						</div>
					</div>
					<div class="sidebar-navs">
						<ul class="nav  nav-pills-circle">
							<li class="nav-item" data-toggle="tooltip" data-placement="top" title="Settings">
								<a class="nav-link text-center m-2">
									<i class="fe fe-settings"></i>
								</a>
							</li>
							<li class="nav-item" data-toggle="tooltip" data-placement="top" title="Chat">
								<a class="nav-link text-center m-2">
									<i class="fe fe-mail"></i>
								</a>
							</li>
							<li class="nav-item" data-toggle="tooltip" data-placement="top" title="Followers">
								<a class="nav-link text-center m-2">
									<i class="fe fe-user"></i>
								</a>
							</li>
							<li class="nav-item" data-toggle="tooltip" data-placement="top" title="Logout">
								<a class="nav-link text-center m-2">
									<i id ="buttonLogout" class="fe fe-power" ></i>
								</a>
							</li>
						</ul>
					</div>
					<ul class="side-menu">
						<li><h3>Main</h3></li>
						<li class="slide">
							<a class="side-menu__item" href="/admin/home"><i class="side-menu__icon ti-home"></i><span class="side-menu__label">Dashboard</span></a>
						</li>
						<li><h3>User Management</h3></li>
						<li>
							<a class="side-menu__item" href="/admin/user"><i class="side-menu__icon ti-package"></i><span class="side-menu__label">User</span></a>
						</li>

					</ul>
				</aside>
				<!--/APP-SIDEBAR-->

				<!-- Mobile Header -->
				<div class="mobile-header">
					<div class="container-fluid">
						<div class="d-flex">
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
							<a class="header-brand" href="home.blade.php">
								<img src="{{ URL::asset('assets/images/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="logo">
								<img src="{{ URL::asset('assets/images/brand/logo-3.png') }}" class="header-brand-img desktop-logo mobile-light" alt="logo">
							</a>
							<div class="d-flex order-lg-2 ml-auto header-right-icons">
								<button class="navbar-toggler navresponsive-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
									aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
								</button>
								<div class="dropdown profile-1">
									<a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">
										<span>
											<img src="{{ URL::asset('assets/images/users/10.jpg') }}" alt="profile-user" class="avatar  profile-user brround cover-image">
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="text-center">
												<h5 class="text-dark mb-0">Elizabeth Dyer</h5>
												<small class="text-muted">Administrator</small>
											</div>
										</div>
										<div class="dropdown-divider m-0"></div>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-account-outline"></i> Profile
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon  mdi mdi-settings"></i> Settings
										</a>
										<a class="dropdown-item" href="#">
											<span class="float-right"></span>
											<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
										</a>
										<a class="dropdown-item" href="login.html">
											<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
										</a>
									</div>
								</div>
								<div class="dropdown d-md-flex header-settings">
									<a href="#" class="nav-link icon " data-toggle="sidebar-right" data-target=".sidebar-right">
										<i class="fe fe-align-right"></i>
									</a>
								</div><!-- SIDE-MENU -->
							</div>
						</div>
					</div>
				</div>
				<div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
					<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
						<div class="d-flex order-lg-2 ml-auto">
							<div class="dropdown d-sm-flex">
								<a href="#" class="nav-link icon" data-toggle="dropdown">
									<i class="fe fe-search"></i>
								</a>
								<div class="dropdown-menu header-search dropdown-menu-left">
									<div class="input-group w-100 p-2">
										<input type="text" class="form-control " placeholder="Search....">
										<div class="input-group-append ">
											<button type="button" class="btn btn-primary ">
												<i class="fa fa-search" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
							</div><!-- SEARCH -->
							<div class="dropdown d-md-flex">
								<a class="nav-link icon full-screen-link nav-link-bg">
									<i class="fe fe-maximize fullscreen-button"></i>
								</a>
							</div><!-- FULL-SCREEN -->
							<div class="dropdown d-md-flex notifications">
								<a class="nav-link icon" data-toggle="dropdown">
									<i class="fe fe-bell"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<div class="notifications-menu">
										<a class="dropdown-item d-flex pb-3" href="#">
											<div class="fs-16 text-success mr-3">
												<i class="fa fa-thumbs-o-up"></i>
											</div>
											<div class="">
												<strong>Someone likes our posts.</strong>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#">
											<div class="fs-16 text-primary mr-3">
												<i class="fa fa-commenting-o"></i>
											</div>
											<div class="">
												<strong>3 New Comments.</strong>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#">
											<div class="fs-16 text-danger mr-3">
												<i class="fa fa-cogs"></i>
											</div>
											<div class="">
												<strong>Server Rebooted</strong>
											</div>
										</a>
									</div>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item text-center">View all Notification</a>
								</div>
							</div><!-- NOTIFICATIONS -->
							<div class="dropdown d-md-flex message">
								<a class="nav-link icon text-center" data-toggle="dropdown">
									<i class="fe fe-mail"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<div class="message-menu">
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="../assets/images/users/1.jpg"></span>
											<div>
												<strong>Madeleine</strong> Hey! there I' am available....
												<div class="small text-muted">
													3 hours ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="../assets/images/users/12.jpg"></span>
											<div>
												<strong>Anthony</strong> New product Launching...
												<div class="small text-muted">
													5 hour ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="../assets/images/users/4.jpg"></span>
											<div>
												<strong>Olivia</strong> New Schedule Realease......
												<div class="small text-muted">
													45 mintues ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="../assets/images/users/15.jpg"></span>
											<div>
												<strong>Sanderson</strong> New Schedule Realease......
												<div class="small text-muted">
													2 days ago
												</div>
											</div>
										</a>
									</div>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item text-center">See all Messages</a>
								</div>
							</div><!-- MESSAGE-BOX -->
						</div>
					</div>
				</div>
				<!-- /Mobile Header -->

                <!--app-content open-->
				<div class="app-content">
					<div class="side-app">


						<main class="main-wrapper clearfix">

							@yield('content')

						</main>

					</div>
				</div>
				<!-- CONTAINER END -->
            </div>

			<!-- SIDE-BAR -->
			<div class="sidebar sidebar-right sidebar-animate">
			   {{--<div class="p-4 border-bottom">--}}
			        {{--<span class="fs-17">Notifications</span>--}}
					{{--<a href="#" class="sidebar-icon text-right float-right" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x"></i></a>--}}
				{{--</div>--}}

                <div class="list d-flex align-items-center border-bottom p-4">
					<div class="">
						<span class="avatar bg-primary brround avatar-md">CH</span>
					</div>
					<div class="wrapper w-100 ml-3">
						<p class="mb-0 d-flex">
							<b>New Websites is Created</b>
						</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="d-flex align-items-center">
								<i class="mdi mdi-clock text-muted mr-1"></i>
								<small class="text-muted ml-auto">30 mins ago</small>
								<p class="mb-0"></p>
							</div>
						</div>
					</div>
				</div><!-- LIST END -->
				<div class="list d-flex align-items-center border-bottom p-4">
					<div class="">
						<span class="avatar bg-danger brround avatar-md">N</span>
					</div>
					<div class="wrapper w-100 ml-3">
						<p class="mb-0 d-flex">
							<b>Prepare For the Next Project</b>
						</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="d-flex align-items-center">
								<i class="mdi mdi-clock text-muted mr-1"></i>
								<small class="text-muted ml-auto">2 hours ago</small>
								<p class="mb-0"></p>
							</div>
						</div>
					</div>
				</div><!-- LIST END -->
				<div class="list d-flex align-items-center border-bottom p-4">
					<div class="">
						<span class="avatar bg-info brround avatar-md">S</span>
					</div>
					<div class="wrapper w-100 ml-3">
						<p class="mb-0 d-flex">
							<b>Decide the live Discussion Time</b>
						</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="d-flex align-items-center">
								<i class="mdi mdi-clock text-muted mr-1"></i>
								<small class="text-muted ml-auto">3 hours ago</small>
								<p class="mb-0"></p>
							</div>
						</div>
					</div>
				</div><!-- LIST END -->
				<div class="list d-flex align-items-center border-bottom p-4">
					<div class="">
						<span class="avatar bg-warning brround avatar-md">K</span>
					</div>
					<div class="wrapper w-100 ml-3">
						<p class="mb-0 d-flex">
							<b>Team Review meeting</b>
						</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="d-flex align-items-center">
								<i class="mdi mdi-clock text-muted mr-1"></i>
								<small class="text-muted ml-auto">4 hours ago</small>
								<p class="mb-0"></p>
							</div>
						</div>
					</div>
				</div><!-- LIST END -->
				<div class="list d-flex align-items-center border-bottom p-4">
					<div class="">
						<span class="avatar bg-success brround avatar-md">R</span>
					</div>
					<div class="wrapper w-100 ml-3">
						<p class="mb-0 d-flex">
							<b>Prepare for Presentation</b>
						</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="d-flex align-items-center">
								<i class="mdi mdi-clock text-muted mr-1"></i>
								<small class="text-muted ml-auto">1 days ago</small>
								<p class="mb-0"></p>
							</div>
						</div>
					</div>
				</div><!-- LIST END -->
				<div class="list d-flex align-items-center border-bottom p-4">
					<div class="">
						<span class="avatar bg-pink brround avatar-md">MS</span>
					</div>
					<div class="wrapper w-100 ml-3">
						<p class="mb-0 d-flex">
							<b>Prepare for Presentation</b>
						</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="d-flex align-items-center">
								<i class="mdi mdi-clock text-muted mr-1"></i>
								<small class="text-muted ml-auto">1 days ago</small>
								<p class="mb-0"></p>
							</div>
						</div>
					</div>
				</div><!-- LIST END -->
				<div class="list d-flex align-items-center border-bottom p-4">
					<div class="">
						<span class="avatar bg-purple brround avatar-md">L</span>
					</div>
					<div class="wrapper w-100 ml-3">
						<p class="mb-0 d-flex">
							<b>Prepare for Presentation</b>
						</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="d-flex align-items-center">
								<i class="mdi mdi-clock text-muted mr-1"></i>
								<small class="text-muted ml-auto">1 day ago</small>
								<p class="mb-0"></p>
							</div>
						</div>
					</div>
				</div><!-- LIST END -->
				<div class="list d-flex align-items-center border-bottom p-4">
					<div class="">
						<span class="avatar bg-warning brround avatar-md">L</span>
					</div>
					<div class="wrapper w-100 ml-3">
						<p class="mb-0 d-flex">
							<b>Prepare for Presentation</b>
						</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="d-flex align-items-center">
								<i class="mdi mdi-clock text-muted mr-1"></i>
								<small class="text-muted ml-auto">1 day ago</small>
								<p class="mb-0"></p>
							</div>
						</div>
					</div>
				</div><!-- LIST END -->
				<div class="list d-flex align-items-center p-4">
					<div class="">
						<span class="avatar bg-blue brround avatar-md">U</span>
					</div>
					<div class="wrapper w-100 ml-3">
						<p class="mb-0 d-flex">
							<b>Prepare for Presentation</b>
						</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="d-flex align-items-center">
								<i class="mdi mdi-clock text-muted mr-1"></i>
								<small class="text-muted ml-auto">2 days ago</small>
								<p class="mb-0"></p>
							</div>
						</div>
					</div>
				</div><!-- LIST END -->
			</div>
			<!-- SIDE-BAR CLOSED -->

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

		<script src="{{ URL::asset('assets/js/jquery-3.4.1.min.js') }}"></script>

		<!-- BOOTSTRAP JS -->
		<script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ URL::asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
		<!-- SPARKLINE JS-->

		<script src="{{ URL::asset('assets/js/jquery.sparkline.min.js') }}"></script>
		<!-- CHART-CIRCLE JS-->
		<script src="{{ URL::asset('assets/js/circle-progress.min.js') }}"></script>
		<!-- RATING STARJS -->

		<script src="{{ URL::asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>

		<!-- CHARTJS CHART JS-->
		<script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
		<script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>
		<!-- PIETY CHART JS-->
		<script src="{{ URL::asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
		<script src="{{ URL::asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>
		<!-- ECHART JS-->

		<script src="{{ URL::asset('assets/plugins/echarts/echarts.js') }}"></script>
		<!-- SIDE-MENU JS-->
		<script src="{{ URL::asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>
		<!-- CUSTOM SCROLLBAR JS-->
		<script src="{{ URL::asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
		<!-- SIDEBAR JS -->
		<script src="{{ URL::asset('assets/plugins/sidebar/sidebar.js') }}"></script>
		<!-- APEXCHART JS -->
		<script src="{{ URL::asset('assets/js/apexcharts.js') }}"></script>
		<!-- INDEX JS -->
		<script src="{{ URL::asset('assets/js/index1.js') }}"></script>
		<!-- CUSTOM JS -->
		<script src="{{ URL::asset('assets/js/custom.js') }}"></script>

		<script src="{{ URL::asset('js/common/common.js') }}"></script>
		<script src="{{ URL::asset('js/common/apiHandler.js') }}"></script>
		<script src="{{ URL::asset('js/admin/home/home.js') }}"></script>


		@yield('js-define')
	</body>
</html>