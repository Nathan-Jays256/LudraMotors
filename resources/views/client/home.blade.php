@extends('Layouts.base')
@section('content')

<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
            <div class="overlay"></div>
            <h1>Find the right car for you.</h1>
            <p>We have more than a thousand cars for you to choose. </p>
            <a href="/about" class="btn">Read More <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners --> 


<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Find the Best <span>CarForYou</span></h2>
      <p>
      Ludra Motors is a registered car rental agency with an
       online presence and physical address in Kampala Uganda.
       Our reservations team is highly trained ready 
       to give you quick response to all your car rental 
       queries as well advise you , Our rates are not 
       standard hence offering room for negotiations.
      </p>
    </div>
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">New Cars</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

  
@foreach($cars as $car)

<div class="col-list-3">
  <a href="cardetails/{{$car['VehicleId']}}">
    <div class="recent-car-list">
        <div class="car-info-box"> <img src="uploads/carImages/{{$car->Vimage1}}" class="img-responsive" alt="image">
          <ul>
          <li><i class="fa fa-car" aria-hidden="true"></i>{{$car->FuelType}}</li>
          <li><i class="fa fa-calendar" aria-hidden="true"></i>{{$car->ModelYear}}</li>
          <li><i class="fa fa-users" aria-hidden="true"></i>{{$car->SeatingCapacity}} seats</li>
          </ul>
        </div>
        <div class="car-title-m">
          <h6><a href="">{{$car->VehiclesTitle}}</a></h6>
          <?php
            $price = $car->PricePerDay;
            $fprice = number_format($price);
          ?>
          <span class="price">UGX {{$fprice}} /Day</span> 
        </div>
        <div class="inventory_info_m">
          <p>{{Str::limit($car->VehiclesOverview, 54)  }}</p>
      </div>
    </div>
    </a>
</div>

@endforeach       
      </div>
    </div>
  </div>
</section>
<!-- /Resent Cat --> 

<!-- Fun Facts-->
<section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-calendar" aria-hidden="true"></i>5+</h2>
            <p>Years In Business</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>100+</h2>
            <p>New Cars For Sale</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>100+</h2>
            <p>Used Cars For Sale</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>200+</h2>
            <p>Satisfied Customers</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Fun Facts--> 




@endsection