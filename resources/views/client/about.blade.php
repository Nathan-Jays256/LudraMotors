@extends('Layouts.base')
@section('content')
<section class="page-header aboutus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>About Us </h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="/">Home</a></li>
        <li>About Us </li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<section class="ftco-section ftco-about">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(/assets/images/about_services_faq_bg.jpg); background-repeat: no-repeat; background-size: cover;">
            
            </div>
            <div class="col-md-6 wrap-about ftco-animate fadeInUp ftco-animated">
                <div class="heading-section heading-section-white pl-md-5">
                    <span class="subheading">ABOUT US</span>
                    <h2 class="mb-4">Welcome to <br> <span class="color-blue">Ludra Motors</span> </h2>
                    <p>
                        Ludra Motors is a registered car rental agency with an
                        online presence and physical address in Kampala Uganda.
                        Our reservations team is highly trained ready 
                        to give you quick response to all your car rental 
                        queries as well advise you , Our rates are not 
                        standard hence offering room for negotiations plus we
                        offer special discounts for return customers as well as 
                        clients looking for long term car hire deal. Our huge fleet
                        of rental cars ensure you have large pool to choose from 
                        hence guarantee of getting the suitable that fits your 
                        personal budget and needs.  <!-- All our rates cover insurance,
                        taxes and are based on unlimited mileage meaning you can drive
                        to any destination within Uganda. If you are looking for an informative
                        guided tour, we can get you a professional driver at affordable rates. -->
                    </p>
                    <!--<p><a href="#" class="btn btn-primary py-1 px-2">Search Vehicle</a></p>-->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-12 text-center heading-section ftco-animate fadeInUp ftco-animated">
                
                <h3 class="mb-3"><span class="color-blue">Our</span> Services</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Wedding Ceremony</h3>
                        <p>
                        A wedding is one of the most special moments in a family and getting to the final day requires nearly perfect planning and organization. From the wedding reception venue, church, saloon, bride & groom attire, food & drink catering to extra services like ushers , decorators, MCs, entertainment all have to be on point and well addressed.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">City Transfer</h3>
                        <p>
                        Booking a rental car for self  drive in Uganda is the best solution to help you avoid the unreliable and unpredictable public means, go online and search for the perfect self-drive car to use for your park safari, city tour, business or leisure tour.
                        </p></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Airport Transfer</h3>
                        <p>
                        Booking  private transportation prior to your arrival in any foreign country is very important especially if it’s your first time visiting. Save yourself from the stress of having to search for means to get to you to a hotel, apartment or residence in the city when you arrive at the airport by booking an airport transfer in Uganda with Ludra Motors Car Rental.
                        </p></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /About-us--> 


<!-- /Testimonials --> 
<section class="ftco-section">
<h3 style="text-align:center;" class="mb-3">Client <span class="color-blue">Testimonies</span></h3>
    <section id="listing_img_slider">
        @foreach($testimonies as $test)
        <div class="read-details color-tp-pad">
            <div class="card">
                <div class="read-categories">
                    <ul class="cat-links">
                        <li class="meta-category">
                            <a class="newsever-categories category-color-1" href="https://tellanzacarrentaluganda.com/category/car-news" alt="View all posts in Car News"> 
                                {{$test->username}}
                            </a>
                        </li>
                    </ul>
                    
                </div>
                    <div class="read-title">
                        <h4>
                            <p>
                            {{$test->testimonial}}
                            </p>
                        </h4>
                    </div>
                    
                </div>
            </div>
        </div>
        @endforeach
    
    
    
        



    
    
    </section>
</section>
<!-- /End Testimonials --> 


@endsection