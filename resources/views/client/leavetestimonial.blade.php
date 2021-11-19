@extends('Layouts.base')
@section('content')
<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Post Testimonial</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="/">Home</a></li>
        <li>Post Testimonial</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<section class="user_profile inner_pages">
  <div class="container">
    <div class="user_profile_info gray-bg padding_4x4_40">
      <div class="upload_user_logo"> 
      <img src="/assets/images/favicon-icon/logosm.png" alt="image">
      </div>

      <div class="dealer_info">
        <h5>{{ Auth::user()->username }}</h5>
        <p>{{ Auth::user()->email }}</p>
      </div>
    </div>
  
    <div class="row">
      <div class="col-md-3 col-sm-3">
      <div class="profile_nav">
          <ul>
            <li><a href="/myprofile">Profile Settings</a></li>
            <li><a href="/my-bookings">My Booking</a></li>
            <li><a href="/leave-testimonial">Post a Testimonial</a></li>
               <li><a href="/my-testimonials">My Testimonials</a></li>
            <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
          </ul>
        </div>
      </div>      <div class="col-md-6 col-sm-8">
        <div class="profile_wrap">
          <h5 class="uppercase underline">Post a Testimonial</h5>
                      <form  method="post" action="/leave-testimonial">
                        @csrf
          
          
            <div class="form-group">
              <label class="control-label">Testimonail</label>
              <textarea class="form-control white_bg" name="testimonial" rows="4" required=""></textarea>
            </div>
          
           
            <div class="form-group">
              <button type="submit" name="submit" class="btn">Save  <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/Profile-setting--> 

@endsection