@extends('Layouts.adminLayout')
@section('content')
<div class="ts-main-content">
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-10 m-auto">
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">From: {{$testimony->userEmail}}</div>
							<div class="panel-body">
								<strong>Testimony:</strong><br/>
								<span style="text-wrap:wrap;">
								{{$testimony->testimonial}}
								</span><br/><br/>
								<span style="text-decoration:underline;">{{$testimony->created_at}}</span><br/>
								<a href="">Delete Message</a>
						

							</div>
						</div>

					

					</div>
				</div>

			</div>
		</div>
	</div>

@endsection