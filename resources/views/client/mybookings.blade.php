@extends('Layouts.base')
@section('content')
 

<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>My Booking</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="/">Home</a></li>
        <li>My Booking</li>
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
        
      </div>   
      <div class="col-md-6 col-sm-8">
      @if (session()->has('error'))
            <h6 style="color:red;"> {{session('error') }}</h6>
          @endif
        <div class="profile_wrap">
          <h5 class="uppercase underline" style="padding:15px 25px 1px 25px;">My Booikngs </h5>
          <div class="my_vehicles_list">
            <ul class="vehicle_listing">
              @if($bookings != null)
              @foreach($bookings as $book)
                <li>
                  <div class="vehicle_img"> <a href="vehical-details.php?vhid=4">
                    <img src="/uploads/carImages/{{$book['Vimage1']}}" alt="image"></a>
                  </div>
                  <div class="vehicle_title">
                    <h6><a href="vehical-details.php?vhid=4"> {{$book['VehiclesTitle']}}</a></h6>
                    <p><b>From Date:</b> {{$book['bookingDate']}}<br /> <b>To Date:</b> {{$book['returnDate']}}</p>
                    @if($book['status']==false)
                    <span class="outline btn-xs red"><i class="fa fa-times"></i>Not Approved</span>
                    @else
                    <span class="outline btn-xs green"><i class="fa fa-check"></i>Approved</span>
                    @endif
                  </div>
                  <div class="vehicle_status">
                    <a href="/remove-booking/{{$book['bookingId']}}" class="btn outline btn-xs red  mt-3">Cancel Book</a>
                    <div class="clearfix"></div>
                  </div>
                </li>
              @endforeach
            </ul>
            @else
            <h5 style="padding:15px 25px 1px 25px;">There are no bookings made so far.</h5>
            <a style="padding:1px 25px 1px 25px; font-weight:bold;" href="/car-listing">Book your ride now</a>
            @endif
            
          </div>
        </div>
        <div class="col-12 pay">
        
          @if($bookings != null)
            <a href="/payments" class="btn outline btn-xs">Proceed to Payments</a></div>
          @endif
      </div>
      
    </div>
  </div>
</section>
<!--/my-vehicles--> 

@endsection