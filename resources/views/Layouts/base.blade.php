

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Ludra Motors</title>
<!--Bootstrap -->
<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}" type="text/css">
<link rel="stylesheet" href="{{ URL::asset('assets/css/owl.carousel.css') }}" type="text/css">
<link rel="stylesheet" href="{{ URL::asset('assets/css/owl.transitions.css') }}" type="text/css">
<link href="{{ URL::asset('assets/css/slick.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/css/bootstrap-slider.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="{{ URL::asset('assets/switcher/css/switcher.css') }}" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{ URL::asset('assets/switcher/css/red.css') }}" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="{{ URL::asset('assets/switcher/css/orange.css') }}" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{ URL::asset('assets/switcher/css/blue.css') }}" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{ URL::asset('assets/switcher/css/pink.css') }}" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{ URL::asset('assets/switcher/css/green.css') }}" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{ URL::asset('assets/switcher/css/purple.css') }}" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('assets/images/favicon-icon/apple-touch-icon-144-precomposed.png') }}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('assets/images/favicon-icon/apple-touch-icon-114-precomposed.html') }}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('assets/images/favicon-icon/apple-touch-icon-72-precomposed.png') }}">
<link rel="apple-touch-icon-precomposed" href="{{ URL::asset('assets/images/favicon-icon/apple-touch-icon-57-precomposed.png') }}">
<link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon-icon/Icon.png') }}">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
<link href="{{ URL::asset('assets/css/toastr.min.css') }}" rel="stylesheet">


</head>
<body>

<!-- Start Switcher -->
<div class="switcher-wrapper">	
    <div class="demo_changer">
        <div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
        <div class="form_holder">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="predefined_styles">
                        <div class="skin-theme-switcher">
                            <h4>Color</h4>
                            <a href="#" data-switchcolor="blue" class="styleswitch" style="background-color:#228dcb;"> </a>
                            <a href="#" data-switchcolor="red" class="styleswitch" style="background-color:#de302f;"> </a>
                            <a href="#" data-switchcolor="orange" class="styleswitch" style="background-color:#f76d2b;"> </a>
                            
                            <a href="#" data-switchcolor="pink" class="styleswitch" style="background-color:#FF2761;"> </a>
                            <a href="#" data-switchcolor="green" class="styleswitch" style="background-color:#2dcc70;"> </a>
                            <a href="#" data-switchcolor="purple" class="styleswitch" style="background-color:#6054c2;"> </a>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div><!-- /Switcher -->  
        
<!--Header-->

<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="/"><img src="/assets/images/favicon-icon/logosm.png" alt="image"/></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">For Support Mail us : </p>
              <a href="mailto:info@example.com">ludramotors@yahoo.com</a> 
            </div>
            
            <div class="social-follow">
              
            </div>
            <div class="login_btn">
                @guest
                  @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">
                    {{ __('Login / Register') }}
                    </a> 
                    @endif
                  @else
                    <a class="btn btn-xs uppercase" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                @endguest
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user-circle" aria-hidden="true"></i> 
              <i class="fa fa-angle-down" aria-hidden="true"></i>
              {{ Auth::user()->username }}
              

            </a>
              <ul class="dropdown-menu">
                       <li><a href="/myprofile"  data-toggle="modal" data-dismiss="modal">Profile Settings</a></li>
            <li><a href="/my-bookings"  data-toggle="modal" data-dismiss="modal">My Booking</a></li>
            <li><a href="/leave-testimonial"  data-toggle="modal" data-dismiss="modal">Post a Testimonial</a></li>
          <li><a href="/my-testimonials"  data-toggle="modal" data-dismiss="modal">My Testimonial</a>
        </li>
            <li>
              
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
              
            </li>
                      </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="/search" method="get" id="header-search-form">
          @csrf
            <input type="text" id="searchTxt" placeholder="Search..." name="searchTxt" class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a>    </li>
          	 
          <li><a href="/about">About Us</a></li>
          <li><a href="/car-listing">Car Listing</a>
          <li><a href="/contact">Contact Us</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
  
</header><!-- /Header --> 
@yield('content')

<!--Footer -->

<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
      
        <div class="col-md-6">
          <h6>About Us</h6>
          <ul>

        
          <li><a href="/about">About Us</a></li>
            <li><a href="/search">FAQs</a></li>
            <li><a href="">Privacy</a></li>
          <li><a href="">Terms of use</a></li>
               <li><a href="/admin">Admin Login</a></li>
          </ul>
        </div>
  
        <div class="col-md-3 col-sm-6">
          <h6>Subscribe Newsletter</h6>
          <div class="newsletter-form">
            <form method="post" action="/subscribe">
            @csrf
              <div class="form-group">
                <input type="email" name="subscriberemail" class="form-control newsletter-input" required placeholder="Enter Email Address" />
              </div>
              <button type="submit" name="emailsubscibe" class="btn btn-block">Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            <p class="subscribed-text">*We send great deals and latest auto news to our subscribed users very week.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 text-right">
          <div class="footer_widget">
            <p>Connect with Us:</p>
            <ul>
              <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-md-pull-6">
          <p class="copy-right">Copyright &copy; 2017 Car Rental Portal. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </div>
</footer><!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!-- Scripts --> 
<script src="{{ URL::asset('assets/js/jquery.js') }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script> 
<script src="{{ URL::asset('assets/js/interface.js') }}"></script> 
<!--Switcher-->
<script src="{{ URL::asset('assets/switcher/js/switcher.js') }}"></script>
<!--bootstrap-slider-JS--> 
<script src="{{ URL::asset('assets/js/bootstrap-slider.min.js') }}"></script> 
<!--Slider-JS--> 
<script src="{{ URL::asset('assets/js/slick.min.js') }}"></script> 
<script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/toastr.js') }}"></script>

<script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
</script>
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

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>