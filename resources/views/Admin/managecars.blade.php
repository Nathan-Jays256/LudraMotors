@extends('Layouts.adminLayout')
@section('content')
<div class="ts-main-content">
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Manage Vehicles</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Vehicle Details ({{$count}} Cars registered) </div>
							<div class="panel-body">
							@foreach($cars as $car)
							<div class="col-md-3 grid_listing">
								<div class="product-listing-m gray-bg">
									<div class="product-listing-img"> 
										<a href="">
											<img src="/uploads/carImages/{{$car['Vimage1']}}" class="img-responsive" alt="image" />
										</a>
									</div>
										<div class="product-listing-content">
										<h5>{{$car['VehiclesTitle']}}</h5>
										<p class="list-price">UGX {{$car['PricePerDay']}}</p><br/>
										<a href="/remove-car/{{$car['VehicleId']}}">Delete</a>
									</div>
								</div>
							</div>
							@endforeach
						

							</div>
						</div>

					

					</div>
				</div>

			</div>
		</div>
	</div>
@endsection