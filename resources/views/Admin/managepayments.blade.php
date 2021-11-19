@extends('Layouts.adminLayout')
@section('content')
<div class="ts-main-content">
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Manage Payments</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Listed Booking Payments</div>
							<div class="panel-body">
							<div class="succWrap"><strong>SUCCESS</strong>:</div>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Payment ID</th>
											<th>Booking Id</th>										
											<th>First name</th>
											<th>Last name</th>
											<th>Payed Amount</th>
											<th>Pay Status</th>
											<th>Date Payed</th>
											<th>Action</th>
										</tr>
											
										
									</thead>
									
									<tbody>
										@foreach($payments as $payment)
											
											<tr>
													<th>{{$payment->paymentId}}</th>
													<th>{{$payment->bookingId}}</th>
													<th>{{$payment->firstName}}</th>
													<th>{{$payment->lastName}}</th>
													<th>{{$payment->paymentAmount}}</th>
													@if($payment->status==false)
														<th>Not Confirmed</th>
													@else
														<th>Payed</th>														
													@endif
													<th>{{$payment->created_at}}</th>
													<th>
														<a href="">Delete</a> 
														
														@if($payment->status==true)
														@else
														<a href="/confirm-payment/{{$payment->paymentId}}">/ Confirm</a>
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