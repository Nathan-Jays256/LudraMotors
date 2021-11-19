@extends('Layouts.base')
  @section('content')
  @extends('Layouts.base')
@section('content')

<!--Page Header-->
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Car Listing</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Car Listing</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Listing-->
<div class="container">

</div>
<section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-push-3">
        @if(count($cars) > 0) 
            @foreach($cars as $car)
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img">
              <img src="/uploads/carImages/{{$car['Vimage1']}}" class="img-responsive" alt="Image">  
          </div>
          <div class="product-listing-content">
            <h5><a href="cardetails/1">{{$car['VehiclesTitle']}}</a></h5>
            <p class="list-price">{{$car['PricePerDay']}}</p>
            <ul>
              <li><i class="fa fa-user" aria-hidden="true"></i>{{$car['SeatingCapacity']}} seats</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>{{$car['ModelYear']}}  model</li>
              <li><i class="fa fa-car" aria-hidden="true"></i>{{$car['FuelType']}}</li>
            </ul>
            <a href="cardetails/1" class="btn">View Details <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
          </div>
            
              
          
            </div>
      
      
        </div>
        @endforeach
        @else
            <h5>No bookings made yet.</h5>      
        @endif 
        </div>
    </div>
</section>
<!-- /Listing--> 

@endsection