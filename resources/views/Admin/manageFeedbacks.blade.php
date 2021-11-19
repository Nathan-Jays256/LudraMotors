@extends('Layouts.adminLayout')
@section('content')
<div class="ts-main-content">
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Clients Feedbacks</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Registered Users' Feedbacks</div>
							<div class="panel-body">
							<div class="succWrap"><strong>SUCCESS</strong>:</div>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>ID</th>
											<th>User ID</th>
											<th>Full Name</th>
											<th>Email</th>
											<th>Contact</th>
											<th>message</th>
											<th>Date Sent</th>
											<th>Action</th>
										</tr>
										
									</thead>
									
									<tbody>
										@foreach($feeds as $feed)
											<tr>
												<th>{{$feed->ID}}</th>
												<th>{{$feed->user_userId}}</th>
												<th>{{$feed->fullName}}</th>
												<th>{{$feed->email}}</th>
												<th>{{$feed->contact}}</th>
												<th>{{Str::limit($feed->message, 54)}}</th>
												<th>{{$feed->created_at}}</th>
												<th><a href="/clients-feedbacks/{{$feed['ID']}}">Read</a></th>
												
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