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
<section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-3">
        <div class="result-sorting-wrapper">
          <div class="sorting-count">
<p><span>{{$total}} vehicles available</span></p>
</div>
</div>
        @foreach($cars as $car)
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img"><img src="/uploads/carImages/{{$car['Vimage1']}}" class="img-responsive" alt="Image" /> </a> 
          </div>
          <div class="product-listing-content">
            <h5><a href="cardetails/{{$car['VehicleId']}}">{{$car['VehiclesTitle']}}</a></h5>
            <p class="list-price">UGX {{$car['PricePerDay']}} Per Day</p>
            <ul>
              <li><i class="fa fa-user" aria-hidden="true"></i>{{$car['SeatingCapacity']}} seats</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>{{$car['ModelYear']}} model</li>
              <li><i class="fa fa-car" aria-hidden="true"></i>{{$car['FuelType']}}</li>
            </ul>
            <a href="cardetails/{{$car['VehicleId']}}" class="btn">View Details <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
          </div>
        </div>
        @endforeach
              
          
               </div>
      
      <!--Side-Bar-->
      <aside class="col-md-3 col-md-pull-9">
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-filter" aria-hidden="true"></i> Find Your  Car </h5>
          </div>
          <div class="sidebar_filter">
            <form action="search-carresult.php" method="post">
              <div class="form-group select">
                <select class="form-control" name="brand">
                  <option>Select Brand</option>
                  @foreach($brands as $brand)
                    <option value="{{$brand->brandId}}">{{$brand->brandName}}</option>
                  @endforeach
                 
                </select>
              </div>
              <div class="form-group select">
                <select class="form-control" name="fueltype">
                  <option>Select Fuel Type</option>
<option value="Petrol">Petrol</option>
<option value="Diesel">Diesel</option>
<option value="CNG">CNG</option>
                </select>
              </div>
             
              <div class="form-group">
                <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Search Car</button>
              </div>
            </form>
          </div>
        </div>

        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-car" aria-hidden="true"></i> Recently Listed Cars</h5>
          </div>
          <div class="recent_addedcars">
            <ul>
              @if(count($bookings)>0) 
                @foreach($bookings as $book)
                  <li class="gray-bg">
                    <div class="recent_post_img"> <a href="/my-bookings"><img src="/uploads/carImages/{{$book['Vimage1']}}" alt="image"></a> </div>
                    <div class="recent_post_title"> 
                      <a>{{$book['VehiclesTitle']}}</a>
                      <p class="widget_price">UGX {{$book['PricePerDay']}}</p>
                    </div>
                  </li> 
                @endforeach   
              @else
                <li><h5>No bookings made yet.</h5></li>      
              @endif                   
            </ul>
          </div>
        </div>
      </aside>
      <!--/Side-Bar--> 
    </div>
  </div>
</section>
<!-- /Listing--> 

@endsection