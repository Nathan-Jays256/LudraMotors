@extends('Layouts.adminLayout')
@section('content')
<div class="ts-main-content">
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Subscribers</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Listed  Subscribers</div>
							<div class="panel-body">
							<div class="succWrap"><strong>SUCCESS</strong>:</div>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>ID</th>
												<th>User ID</th>
											<th>Subscriber Email</th>
											<th>Subscriber Date</th></tr>
										@foreach($subscribers as $subscriber)
											<tr>
												<th>{{$subscriber->ID}}</th>
												<th>{{$subscriber->user_userId}}</th>
												<th>{{$subscriber->subscriberEmail}}</th>
												<th>{{$subscriber->created_at}}</th>
												
											</tr>
										@endforeach
									</thead>
									
									<tbody>
										<tr></tr>
										
										
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