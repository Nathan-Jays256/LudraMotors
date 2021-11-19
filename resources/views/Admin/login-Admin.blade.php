
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ludra Motors | Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('adminAssets/css/loginstyle.css') }}">
<link href="{{ URL::asset('assets/css/toastr.min.css') }}" rel="stylesheet">

<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="overlay"></div>
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form action="/admin" method="post" class="login100-form validate-form flex-sb flex-w">
					@csrf
				
					<div class="login100-form-title p-b-32">
					<img src="/assets/images/favicon-icon/logosm.png" alt="">  <h3 class="text">|Admin Login</h3> 
					</div>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
						<a href="/" style="text-align:center;padding:12px;margin: auto;">Back to site</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
<!-- ==========================================================-->
	<script src="{{ URL::asset('assets/js/jquery.js') }}"></script>
<script src="{{ URL::asset('assets/js/toastr.js') }}"></script>
<script>
    @if(Session::has('message'))
      var type = "{{ Session::get('alert-type', 'info') }}";
      switch(type){
          case 'info':
              toastr.info("{{ Session::get('message') }}");
              break;
          
          case 'warning':
              toastr.warning("{{ Session::get('message') }}");
              break;
          case 'success':
              toastr.success("{{ Session::get('message') }}");
              break;
          case 'error':
              toastr.error("{{ Session::get('message') }}");
              break;
      }
    @endif
  </script>


</body>
</html>
