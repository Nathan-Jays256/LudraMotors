@extends('Layouts.adminLayout')
@section('content')
<div class="ts-main-content">
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">User Testimonials</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Listed  Testimonies</div>
							<div class="panel-body">
							<div class="succWrap"><strong>SUCCESS</strong>:</div>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>ID</th>
											<th>Brand Name</th>
											<th>Creation Date</th>
											<th>Message</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
										
									</thead>
									
									<tbody>
									@foreach($testimonies as $testimony)
											<tr>
												<th>{{$testimony->ID}}</th>
												<th>{{$testimony->user_userId}}</th>
												<th>{{$testimony->created_at}}</th>
												
												<th>{{Str::limit($testimony->testimonial, 54)  }}</th>
												<th>{{$testimony->status}}</th>
												<th><a href="/manage-testimonials/{{$testimony['ID']}}">Read</a> / <a href="/delete-testimony/{{$testimony['ID']}}">Delete</a></th>
													
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