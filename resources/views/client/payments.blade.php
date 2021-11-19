@extends('Layouts.base')
@section('content')
<section>
    <div class="col-lg-12 mt-3">
        <h3 class="title text-center color-primary ">Payments Form</h3>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-1 m-auto"></div>
            <div class="col-lg-4 m-auto">
                <div class="cart-summary">
                <h5 style="padding-bottom:12px;">Approved CARS</h5>
                <h5 style="color:darkgreen">Booking Total summary</h5>
                    <ul class="summary-table" style="padding-left: 0px;">
                        <li><span>Cars Approved:</span> <span>{{$items_count}} Cars</span></li>
                        @foreach($items as $item)
                            <li>
                                <span>{{$item['VehiclesTitle']}}</span>
                                <span>
                                <?php
                                    $fdate = $item['bookingDate'];
                                    $tdate = $item['returnDate'];
                                    $first_datetime = DateTime::createFromFormat('d-m-Y', $fdate);
                                    $last_datetime = DateTime::createFromFormat('d-m-Y', $tdate);
                                    $interval = ($first_datetime->diff($last_datetime))->d;
                                    $price = $item['PricePerDay'];
                                    $fprice = number_format($price);
                                    $bookid = $item['bookingId'];
                                    ?>
                                    @if($interval <= 0)
                                    0
                                    @else
                                    {{$interval}}
                                    @endif
                                </span> 
                                <span> {{$fprice}}</span>
                            </li>
                        @endforeach
                        <li><span>total:</span> <span>
                            UGX 
                            @if($interval <= 0)
                                0
                            @else
                            {{$amounts}}
                            @endif</span></li>
                    </ul>                        
                </div>
            </div>
            <div class="col-lg-6 m-auto">
                <form action="/finish-payments" method="post">
                @csrf
                    <input type="text" class="form-control" name="bookid" style="display:none" value="{{$bookid}}" placeholder="First Name" required="">
                    <input type="text" class="form-control" name="amounts" style="display:none" value="{{$amounts}}" required="">
                    <div class="form-group col-lg-12">
                        <input type="text" class="form-control" name="fname" placeholder="First Name" required="">
                    </div> 
                    <div class="form-group col-lg-12">
                        <input type="text" class="form-control" name="lname" placeholder="Last Name" required="">
                    </div> 
                    <div class="form-group col-lg-6">
                        <input type="text" class="form-control" name="address" placeholder="Address" required="">
                    </div> 
                    <div class="form-group col-lg-6">
                        <input type="tel" class="form-control" name="contact" placeholder="Contact" required="">
                    </div>
                    <div class="col-md-12 col-lg-12">
                    
                                <div class="shipping-method-box">
                                    <div class="d-block my-3">
                                    <h6>Choose Payment Method</h6>
                                        <div class="custom-control custom-radio">
                                            <input id="credit" value="Cash" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                                            <label class="custom-control-label" for="credit">Cash</label>
                                        </div>
                                        
                                        <div class="custom-control custom-radio">
                                            <input id="paypal" value="Pay on delivery" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                            <label class="custom-control-label" for="paypal">Pay on delivery</label>
                                        </div>
                                    </div>
                                    
                                                                      
                                </div>
                                
                            </div>
                            <button class="btn col-lg-12" type="submit">Pay now</button>
                        </form>
            </div>
            
            <div class="col-lg-1 m-auto"></div>
        </div>
    </div>
    
</section>
@endsection
