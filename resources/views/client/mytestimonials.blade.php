@extends('Layouts.base')
@section('content') 
<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>My Testimonials</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="/">Home</a></li>
        <li>My Testimonials</li>
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
      </div>      <div class="col-md-8 col-sm-8">



        <div class="profile_wrap">
          <h5 class="uppercase underline">My Testimonials </h5>
          <div class="my_vehicles_list">
            <ul class="vehicle_listing">
              @foreach($testimonies as $testimony)
              <li>
                
                <span>{{$testimony->created_at}}</span>
                <p>{{$testimony->testimonial}}</p>
              </li>
              @endforeach
            </ul>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/my-vehicles--> 
@endsection