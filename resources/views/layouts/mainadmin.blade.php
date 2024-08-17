<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>serconed - educalibre</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="{{asset('admin/vendors/core/core.css')}}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/vendors/flatpickr/flatpickr.min.css')}}">
	<link rel="stylesheet" href=" {{asset('admin/vendors/easymde/easymde.min.css')}}">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('admin/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<!-- endinject -->

    <!-- Layout styles -->  
	<link rel="stylesheet" href="{{asset('admin/css/demo1/style.css')}}">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{asset('img/educali.png')}}" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
        @include('layouts.sidebar')
        <!--  End partial:partials/_sidebar.html -->

		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar">
			    <a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="bell"></i>
								<div class="indicator">
									<div class="circle"></div>
								</div>
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
								<div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
									<p>6 New Notifications</p>
				                </div>
                                <div class="p-1">
                                <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                        <i class="icon-sm text-white" data-feather="gift"></i>
                                    </div>
                                    <div class="flex-grow-1 me-2">
                                        <p>New Order Recieved</p>
                                        <p class="tx-12 text-muted">30 min ago</p>
                                    </div>	
                                </a>
                                </div>
								<div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>

                        {{-- seccion de navar de usuario --}}

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="profile">
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
								<div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
									<div class="mb-3">
										<img class="wd-80 ht-80 rounded-circle" src="https://via.placeholder.com/80x80" alt="">
									</div>
									<div class="text-center">
										<p class="tx-16 fw-bolder">{{ auth()->user()->name }}</p>
										<p class="tx-12 text-muted">{{ auth()->user()->email }}</p>
									</div>
								</div>
                                <ul class="list-unstyled p-1">
                                    <li class="dropdown-item py-2">
                                        <a href="pages/general/profile.html" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="user"></i>
                                        <span>Perfil</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="javascript:;" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="edit"></i>
                                        <span>Editsr Perfil</span>
                                        </a>
                                    </li>
                                    
                                    <li class="dropdown-item py-2">
                                        <a href="javascript:;" class="text-body ms-0" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        <i class="me-2 icon-md" data-feather="log-out"></i>
                                        <span>Salir</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- partial -->

			<div class="page-content">

				<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
				<div>
					<h4 class="mb-3 mb-md-0">Panel de administración educalibre</h4>
				</div>
				<div class="d-flex align-items-center flex-wrap text-nowrap">
					<div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
					<span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
					<input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
					</div>
				</div>
				</div>
				<!-- contenido de la pagina -->
				@yield('editor') 
				<!-- end contenido de la pagina -->
			</div>

			<!-- partial:partials/_footer.html -->
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
				<p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>.</p>
				<p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
			</footer>
			<!-- partial -->
		
		</div>
	</div>
	<!-- core:js -->
	<script src="{{asset('admin/vendors/core/core.js')}}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
    <script src="{{asset('admin/vendors/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('admin/vendors/apexcharts/apexcharts.min.js')}}"></script>
	<script src="{{asset('admin/vendors/tinymce/tinymce.min.js')}}"></script>
	
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{asset('admin/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('admin/js/template.js')}}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
    <script src="{{asset('admin/js/dashboard-light.js')}}"></script>
	<script src="{{asset('admin/js/tinymce.js')}}"></script>
	<!-- End custom js for this page -->
	@yield('js')
</body>
</html>    