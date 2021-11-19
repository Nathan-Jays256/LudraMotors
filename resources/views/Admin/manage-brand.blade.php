@extends('Layouts.adminLayout')
@section('content')
<div class="ts-main-content">
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Manage Brands</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Listed  Brands</div>
							<div class="panel-body">
							<div class="succWrap"><strong>SUCCESS</strong>:</div>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>#</th>
												<th>Brand Name</th>
											<th>Creation Date</th>
											<th>Updation date</th>
										
											<th>Action</th></tr>
											
									</thead>
									
									<tbody>
										@foreach($brands as $brand)
											
											<tr>
													<th>{{$brand->brandId}}</th>
													<th>{{$brand->brandName}}</th>
													<th>{{$brand->created_at}}</th>
													<th>{{$brand->updated_at}}</th>
													<th>
														<a href="/delete-brand/{{$brand->brandId}}">Delete</a>
														/ <a href="">Edit</a>
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