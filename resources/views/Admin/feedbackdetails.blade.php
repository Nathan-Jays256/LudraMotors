@extends('Layouts.adminLayout')
@section('content')
<div class="ts-main-content">
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">From: {{$message->fullName}}<br/></div>
							<div class="panel-body">
								Email: <span style="text-decoration:underline;">{{$message->email}}</span><br/>
								<span style="text-decoration:underline;">{{$message->created_at}}</span>
								<br/>
								<br/>
								<strong>Message:</strong><br/>
								
								<span style="text-wrap:wrap;">
								{{$message->message}}
								</span><br>
								<a href="">Delete Message</a>
						

							</div>
						</div>

					

					</div>
				</div>

			</div>
		</div>
	</div>

@endsection