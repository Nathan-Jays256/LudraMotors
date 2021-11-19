@extends('Layouts.adminLayout')
@section('content')
<div class="ts-main-content">
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Manage Bookings</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Listed Car Bookings</div>
							<div class="panel-body">
							<div class="succWrap"><strong>SUCCESS</strong>:</div>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Booking ID</th>
											<th>Car ID</th>											
											<th>Fullname</th>
											<th>Booking Date</th>
											<th>Return Date</th>
											<th>Status</th>
											<th>Date Ordered</th>
											<th>Action</th>
										</tr>
											
										
									</thead>
									
									<tbody>
										@foreach($bookings as $booking)
											
											<tr>
													<th>{{$booking->bookingId}}</th>
													<th>{{$booking->VehicleId}}</th>
													<th>{{$booking->user_name}}</th>
													<th>{{$booking->bookingDate}}</th>
													<th>{{$booking->returnDate}}</th>
													@if($booking->status==false)
														<th>Not yet confirmed</th>
													@else
														<th>Confirmed</th>
													@endif
													<th>{{$booking->updated_at}}</th>
													<th>
														<a href="/delete-booking/{{$booking->bookingId}}">Delete</a> 
														/ 
														@if($booking->status==true)
														<a href="/disapprove-booking/{{$booking->bookingId}}">Disapprove</a>
														@else
														<a href="/approve-booking/{{$booking->bookingId}}">Approve</a>
														@endif
													</th>
												
											</tr>
										@endforeach
									</tbody>
								</table>

						

							</div>
						</div>

					

					</div>
				</div>

			</div>
		</div>
	</div>

@endsection