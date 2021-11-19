@extends('Layouts.adminLayout')
@section('content')
<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Admin Dashboard</h2>
						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
								<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-s text-light">
												<div class="stat-panel text-center">
										
													<div class="stat-panel-number h1 ">{{$brands_total}}</div>
													<div class="stat-panel-title text-uppercase">Listed Brands</div>
												</div>
											</div>
											<a href="/manage-brand" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-s text-light">
												<div class="stat-panel text-center">

													<div class="stat-panel-number h1 ">{{$car_total}}</div>
													<div class="stat-panel-title text-uppercase">Listed Vehicles</div>
												</div>
											</div>
											<a href="/manage-cars" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-s text-light">
												<div class="stat-panel text-center">

													<div class="stat-panel-number h1 ">{{$booking_total}}</div>
													<div class="stat-panel-title text-uppercase">Total Bookings</div>
												</div>
											</div>
											<a href="/manage-bookings" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-s text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 ">{{$payments_total}}</div>
													<div class="stat-panel-title text-uppercase">Total Payments</div>
												</div>
											</div>
											<a href="/manage-payments" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>



				<div class="row">
					<div class="col-md-12">

						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
								<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light">
												<div class="stat-panel text-center">

													<div class="stat-panel-number h1 ">{{$user_total}}</div>
													<div class="stat-panel-title text-uppercase">Reg Users</div>
												</div>
											</div>
											<a href="/reg-users" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light">
												<div class="stat-panel text-center">
												

													<div class="stat-panel-number h1 ">{{$feeds_total}}</div>
													<div class="stat-panel-title text-uppercase">Clients Feedbacks</div>
												</div>
											</div>
											<a href="/clients-feedbacks" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light">
												<div class="stat-panel text-center">


													<div class="stat-panel-number h1 ">{{$testimony_total}}</div>
													<div class="stat-panel-title text-uppercase">Testimonials</div>
												</div>
											</div>
											<a href="/manage-testimonials" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light">
												<div class="stat-panel text-center">


													<div class="stat-panel-number h1 ">{{$subscribers_total}}</div>
													<div class="stat-panel-title text-uppercase">Subscribers</div>
												</div>
											</div>
											<a href="/manage-subscribers" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									
									

								
								</div>
							</div>
						</div>
					</div>
				</div>









			</div>
		</div>
		@endsection