@extends('Layouts.adminLayout')
@section('content')
<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Change Admin password</h2>

						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">Change Password</div>
									<div class="panel-body">
										<form method="post" name="chngpwd" enctype="multipart/form-data" action="/change-password" class="form-horizontal" onSubmit="return valid();">
										@csrf
											

											<div class="form-group">
												<label class="col-sm-4 control-label">Old Password</label>	
												<div class="col-sm-8">
													<input type="text" class="form-control" name="oldpass" id="oldpass" >
												</div>
												
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label">New Password</label>	
												<div class="col-sm-8">
													<input type="text" class="form-control" name="newpass" id="newpass" required>
												</div>
											</div>
												
											<div class="form-group">
												<label class="col-sm-4 control-label">Confirm Password</label>	
												<div class="col-sm-8">
													<input type="text" class="form-control" name="confirm" id="confirm" required="">
												</div>
											</div>	
											<div class="hr-dashed"></div>
											
										
								
											
											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">
								
													<button class="btn btn-primary" name="submit" type="submit">Submit</button>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
							
						</div>
						
					

					</div>
				</div>
				
			
			</div>
		</div>
	</div>
@endsection