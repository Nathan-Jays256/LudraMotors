@extends('Layouts.adminLayout')
@section('content')
<div class="ts-main-content">
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Registered Users</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Listed  Users</div>
							<div class="panel-body">
							<div class="succWrap"><strong>SUCCESS</strong>:</div>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>User Id</th>
											<th>Username</th>
											<th>Email</th>
											<th>Address</th>
											<th>City</th>
											<th>Address</th>
											<th>Contact</th>
										
											<th>Action</th></tr>
											
									</thead>
									
									<tbody>
										@foreach($users as $user)
											<tr>
												<th>{{$user->userId}}</th>
												<th>{{$user->username}}</th>
												<th>{{$user->email}}</th>
												<th>{{$user->address}}</th>
												<th>{{$user->city}}</th>
												<th>{{$user->address}}</th>
												<th>{{$user->contact}}</th>
												<th><a href="">Delete</a></th>
													
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