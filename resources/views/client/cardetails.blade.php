@extends('Layouts.base')
@section('content')

<section id="listing_img_slider">
  <div><img src="/uploads/carImages/{{$car['Vimage1']}}" class="img-responsive" alt="image" width="900" height="560"></div>
  <div><img src="/uploads/carImages/{{$car['Vimage2']}}" class="img-responsive" alt="image" width="900" height="560"></div>
  <div><img src="/uploads/carImages/{{$car['Vimage3']}}" class="img-responsive" alt="image" width="900" height="560"></div>
  <div><img src="/uploads/carImages/{{$car['Vimage4']}}" class="img-responsive"  alt="image" width="900" height="560"></div>
  @if($car->Vimage5)
    <div>
      <img src="/uploads/carImages/{{$car['Vimage5']}}" class="img-responsive"  alt="image" width="900" height="560">
    </div>
  @endif  
</section>
<!--/Listing-Image-Slider-->


<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="listing_detail_head row">
      <div class="col-md-9">
        <h2>{{$car['VehiclesTitle']}}</h2>
      </div>
      <div class="col-md-3">
        <div class="price_info">
        <?php
          $price = $car['PricePerDay'];
          $fprice = number_format($price);
        ?>
          <p>UGX {{$fprice}} </p>Per Day
         
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="main_features">
          <ul>
          
            <li> <i class="fa fa-calendar" aria-hidden="true"></i>
              <h5>{{$car['ModelYear']}}</h5>
              <p>Model Year</p>
            </li>
            <li> <i class="fa fa-cogs" aria-hidden="true"></i>
              <h5>{{$car['FuelType']}}</h5>
              <p>Fuel Type</p>
            </li>
       
            <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
              <h5>{{$car['SeatingCapacity']}}</h5>
              <p>Seats</p>
            </li>
          </ul>
        </div>
        <div class="listing_more_info">
          <div class="listing_detail_wrap"> 
            <!-- Nav tabs -->
            <ul class="nav nav-tabs gray-bg" role="tablist">
              <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">Vehicle Overview </a></li>
          
              <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Accessories</a></li>
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content"> 
              <!-- vehicle-overview -->
              <div role="tabpanel" class="tab-pane active" id="vehicle-overview">
                
                <p>{{$car['VehiclesOverview']}}</p>
              </div>
              
              
              <!-- Accessories -->
              <div role="tabpanel" class="tab-pane" id="accessories"> 
                <!--Accessories-->
                <table>
                  <thead>
                    <tr>
                      <th colspan="2">Accessories</th>
                    </tr>
                  </thead>
                  <tbody>
                  @if($car->AirConditioner==true)
                    <tr>
                      <td>Air Conditioner</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      
                    </tr>
                  @endif
                  @if($car->PowerDoorLocks==true)
                    <tr>
                      <td>Power Door Locks</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      
                    </tr>
                  @endif
                  @if($car->AntiLockBrakingSystem==true)
                    <tr>
                      <td>Anti lock braking system</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      
                    </tr>
                  @endif
                  @if($car->BrakeAssist==true)
                    <tr>
                      <td>Braking Assistance</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      
                    </tr>
                  @endif
                  @if($car->PowerSteering==true)
                    <tr>
                      <td>Power Steering</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      
                    </tr>
                  @endif
                  @if($car->DriverAirbag==true)
                    <tr>
                      <td>Driver's Airbag</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      
                    </tr>
                  @endif
                  @if($car->PassengerAirbag==true)
                    <tr>
                      <td>Passenger's Airbag</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      
                    </tr>
                  @endif
                  @if($car->CDPlayer==true)
                    <tr>
                      <td>CDPlayer feature</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      
                    </tr>
                  @endif
                  @if($car->CentralLocking==true)
                    <tr>
                      <td>Central car locking</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      
                    </tr>
                  @endif
                  @if($car->CrashSensor==true)
                    <tr>
                      <td>Car crash Sensors</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      
                    </tr>
                  @endif
                  @if($car->LeatherSeats==true)
                    <tr>
                      <td>Interior leather seats</td>
                      <td><i class="fa fa-check" aria-hidden="true"></i></td>
                      
                    </tr>
                  @endif

                  </tbody>
                </table>
              </div>
            </div>
          </div>
          
        </div>
   
      </div>
      
      <!--Side-Bar-->
      <aside class="col-md-3">
      
        <div class="share_vehicle">
          <p>Share: <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p>
        </div>
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i>Book Now</h5>
          </div>
          <form method="post" action="/cardetails/{{$car['VehicleId']}}">
          @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="fromdate" placeholder="From Date(dd-mm-yyyy)" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="todate" placeholder="To Date(dd-mm-yyyy)" required>
            </div>
            <div class="form-group">
              <textarea rows="4" class="form-control" name="message" placeholder="Message" required></textarea>
            </div>
                        <div class="form-group">
                <input type="submit" class="btn"  name="submit" value="Book Now">
              </div>
                        </form>
        </div>
      </aside>
      <!--/Side-Bar--> 
    </div>
    
    <div class="space-20"></div>
    <div class="divider"></div>
    
    <!--Similar-Cars-->
    <div class="similar_cars">
      <h3>Similar Cars</h3>
      <div class="row">
      @foreach ($vehicles as $vehicle)
        <div class="col-md-3 grid_listing">
          <div class="product-listing-m gray-bg">
            <div class="product-listing-img"> <a href="/cardetails/{{$vehicle['VehicleId']}}"><img src="/uploads/carImages/{{$vehicle['Vimage1']}}" class="img-responsive" alt="image" /> </a>
            </div>
            <div class="product-listing-content">
              <h5><a href="/cardetails/{{$vehicle['VehicleId']}}">{{$vehicle['VehiclesTitle']}}</a></h5>
              <?php
                $price = $vehicle->PricePerDay;
                $fprice = number_format($price);
              ?>
              <p class="list-price">UGX {{$fprice}}</p>
          
              <ul class="features_list">
                
             <li><i class="fa fa-user" aria-hidden="true"></i>{{$vehicle['SeatingCapacity']}} seats</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i>{{$vehicle['ModelYear']}}</li>
                <li><i class="fa fa-car" aria-hidden="true"></i>{{$vehicle['FuelType']}}</li>
              </ul>
            </div>
          </div>
        </div>
        @endforeach
        

      </div>
    </div>
    <!--/Similar-Cars--> 
    
  </div>
</section>
<!--/Listing-detail--> 

@endsection