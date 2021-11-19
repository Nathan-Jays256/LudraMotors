
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Ludra Motors | Admin Dashboard</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="{{ URL::asset('adminAssets/css/font-awesome.min.css') }}">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="{{ URL::asset('adminAssets/css/bootstrap.min.css') }}">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="{{ URL::asset('adminAssets/css/dataTables.bootstrap.min.css') }}">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="{{ URL::asset('adminAssets/css/bootstrap-social.css') }}">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="{{ URL::asset('adminAssets/css/bootstrap-select.css') }}">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="{{ URL::asset('adminAssets/css/fileinput.min.css') }}">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="{{ URL::asset('adminAssets/css/awesome-bootstrap-checkbox.css') }}">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="{{ URL::asset('adminAssets/css/style.css') }}">
<link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon-icon/Icon.png') }}">
<link href="{{ URL::asset('assets/css/toastr.min.css') }}" rel="stylesheet">


</head>

<body>
<div class="brand clearfix">
	
	<div class="logo">
		
	<a href="/admin-dashboard" style="font-size: 20px; margin-top:25px !important;"><img src="/assets/images/favicon-icon/adminlogo.png" alt=""></a>
	</div>  
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			
			<li class="ts-account">
				<a href="#"><img src="adminAssets/img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> {{Session::get('user')['username']}}<i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="/change-password">Change Password</a></li>
					<li><a href="/">Back to site</a></li>
					<li><a href="/admin/logout">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="ts-main-content">
    <nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<li><a href="/admin-dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
			
<li><a href="#"><i class="fa fa-sitemap"></i> Brands</a>
<ul>
<li><a href="/create-brand">Create Brand</a></li>
<li><a href="/manage-brand">Manage Brands</a></li>
</ul>
</li>

<li><a href="#"><i class="fa fa-car"></i> Vehicles</a>
					<ul>
						<li><a href="/create-a-car">Post a Vehicle</a></li>
						<li><a href="/manage-cars">Manage Vehicles</a></li>
					</ul>
				</li>
				<li><a href="/manage-bookings"><i class="fa fa-book"></i> Manage Booking</a></li>
				<li><a href="/reg-users"><i class="fa fa-users"></i> Reg Users</a></li>
				<li><a href="/clients-feedbacks"><i class="fa fa-desktop"></i> Clients Feedbacks</a></li>
				<li><a href="/manage-testimonials"><i class="fa fa-table"></i> Manage Testimonials</a></li>
			<li><a href="/manage-subscribers"><i class="fa fa-table"></i> Manage Subscribers</a></li>

			</ul>
		</nav>
		@yield('content')
	</div>

	<!-- Loading Scripts -->
	<script src="{{ URL::asset('assets/js/jquery.js') }}"></script>
	<script src="{{ URL::asset('assets/js/toastr.js') }}"></script>
	<script src="{{ URL::asset('adminAssets/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ URL::asset('adminAssets/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('adminAssets/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ URL::asset('adminAssets/js/dataTables.bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('adminAssets/js/Chart.min.js') }}"></script>
	<script src="{{ URL::asset('adminAssets/js/fileinput.js') }}"></script>
	<script src="{{ URL::asset('adminAssets/js/chartData.js') }}"></script>
	<script src="{{ URL::asset('adminAssets/js/main.js') }}"></script>
	<script>
		@if(Session::has('message'))
			var type = "{{ Session::get('alert-type', 'info') }}";
			switch(type){
				case 'info':
					toastr.info("{{ Session::get('message') }}");
					break;
				
				case 'warning':
					toastr.warning("{{ Session::get('message') }}");
					break;
				case 'success':
					toastr.success("{{ Session::get('message') }}");
					break;
				case 'error':
					toastr.error("{{ Session::get('message') }}");
					break;
			}
		@endif
  </script>
	
	
</body>
</html>
