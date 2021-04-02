@extends('layouts.master')
@section('content')
       
       
      <!-- Slider Area Start -->
      <section class="gauto-slider-area fix">
         <div class="gauto-slide owl-carousel">
            <div class="gauto-main-slide slide-item-1">
               <div class="gauto-main-caption">
                  <div class="gauto-caption-cell">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slider-text">
                                 <p>Jalandhar To Delhi Airport Taxi</p>
                                 <h2>Book Now & Get <span>10% Off</span></h2>
                                 <a href="#" class="gauto-btn">Book Now!</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="gauto-main-slide slide-item-2">
               <div class="gauto-main-caption">
                  <div class="gauto-caption-cell">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slider-text">
                                 <p>Hoshiarpur To Delhi Airport Taxi</p>
                                 <h2>Book Now & Get <span>10% Off</span></h2>
                                 <a href="#" class="gauto-btn">Book Now!</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Slider Area End -->
       
       
      <!-- Find Area Start -->
      <section class="gauto-find-area">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="find-box">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="find-text">
                              <h3>Book Your Travel with us.</h3>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="find-form">
                              <form>
                                 <div class="row">
                                    <div class="col-md-4">
                                       <p>
                                          <input type="text" placeholder="From Address" />
                                       </p>
                                    </div>
                                    <div class="col-md-4">
                                       <p>
                                          <input type="text" placeholder="To Address" />
                                       </p>
                                    </div>
                                    <div class="col-md-4">
                                       <p>
                                          <select>
                                             <option data-display="Select Car"></option>
                                             <option>Etios (4 Seater)</option>
                                             <option>Innova (7 Seater)</option>
                                             <option>Marrazo (7 Seater)</option>
                                             <option>Traveller (12 Seater)</option>
                                          </select>
                                       </p>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-4">
                                       <p>
                                          <input id="reservation_date" name="reservation_date" placeholder="Journey Date" data-select="datepicker" type="text">
                                       </p>
                                    </div>
                                    <div class="col-md-4">
                                       <p class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                          <input type="text" class="form-control" placeholder="Journey Time" />
                                       </p>
                                    </div>
                                    <div class="col-md-4">
                                       <p>
                                          <button type="submit" class="gauto-theme-btn">Send Booking</button>
                                       </p>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Find Area End -->
       
       
      <!-- About Area Start -->
      <section class="gauto-about-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="about-left">
                     <h4>about us</h4>
                     <h2>One Way Travel</h2>
                     <p>Make My Rides provides a one-stop solution for all your travel needs.
                        Aimed at simplifying long-distance traveling, we are committed to providing 
                        a safe, secure, luxurious, and economic service to our customers.</p>
                     <div class="about-list">
                        <ul>
                           <li><i class="fa fa-check"></i>Chemical sanitization of the cabs</li>
                           <li><i class="fa fa-check"></i>All Cabs are new model</li>
                           <li><i class="fa fa-check"></i>Regular medical screening of staff</li>
                           <li><i class="fa fa-check"></i>24X7 Customer Support Available</li>
                        </ul>
                     </div>
                     <div class="about-signature">
                        <div class="signature-left">
                           <img src="{{url('public/assets/images/img-signature.png')}}" alt="signature" />
                        </div>
                        <div class="signature-right">
                           <h3>Surjit Thapar</h3>
                           <p><b>CEO</b>, One Way Travel</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="about-right">
                     <img src="{{url('public/assets/images/about-us.jpg')}}" alt="car" />
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- About Area End -->
      
         
      <!-- Offers Area Start -->
      <section class="gauto-offers-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h4>Come with</h4>
                     <h2>Major Routes</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="offer-tabs">
                     <ul class="nav nav-tabs" id="offerTab" role="tablist">
                        @foreach ($serviceLocations as $serviceLocation)
                        <li class="nav-item">
                           <a class="nav-link active" id="{{$serviceLocation->reference}}-tab" data-toggle="tab" href="#{{$serviceLocation->reference}}" role="tab" aria-controls="{{$serviceLocation->name}}" aria-selected="true">{{$serviceLocation->name}}</a>
                        </li>
                        @endforeach
                     </ul>
                     <div class="tab-content" id="offerTabContent">
                        <!-- All Tab Start -->
                        @foreach ($serviceLocations as $serviceLocation)
                        
                        <div class="tab-pane fade show active" id="{{$serviceLocation->reference}}" role="tabpanel" aria-labelledby="{{$serviceLocation->reference}}-tab">
                        @foreach ($serviceLocation->courses as $course)
                        {{-- {{dd($course)}} --}}
                        <div class="row">
                           <div class="col-lg-4">
                            <div class="single-offers">
                               <div class="offer-image">
                                 <a href="#">
                                     @if (isset($course->displayImage))
                                     <img src="{{url('public/'.$course->displayImage)}}" alt="{{$course->name}}" />       
                                     @else
                                     <img src="{{url('public/assets/images/onewaytravel.png')}}" alt="{{$course->name}}" />   
                                     @endif    
                                  </a>
                               </div>
                               <div class="offer-text">
                                  <a href="#">
                                     <h3>{{$course->name}}</h3>
                                  </a>
                                  <h4>Rs. 200 /-</h4>
                                  <ul>
                                     <li><i class="fa fa-car"></i>Etios</li>
                                     <li><i class="fa fa-cogs"></i>A C</li>
                                     <li><i class="fa fa-dashboard"></i>{{$course->duration}} km</li>
                                  </ul>
                                  <div class="offer-action">
                                     <a href="#" class="offer-btn-1">Book Now</a>
                                     <a href="#" class="offer-btn-2"><i class="fa fa-whatsapp"></i> Whatsapp us</a>
                                  </div>
                               </div>
                            </div>
                         </div>
                      
                        @endforeach
                     </div>
                           
                        
                        @endforeach
                        
               
                         
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Offers Area End -->
       
       
      <!-- Promo Area Start -->
      <section class="gauto-promo-area">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="promo-box-left">
                     <img src="{{url('public/assets/images/tourPlan.png')}}" alt="promo car" />
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="promo-box-right">
                     <h3>Going to Plan a Trip? So Don't be Late.</h3>
                     <a href="#" class="gauto-btn">Book Now</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Promo Area End -->
       
       
      <!-- Service Area Start -->
      <section class="gauto-service-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h4>see our</h4>
                     <h2>Latest Services</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="service-slider owl-carousel">
                     <div class="single-service">
                        <span class="service-number">01 </span>
                        <div class="service-icon">
                           <img src="{{url('public/assets/images/img-city-transport.png')}}" alt="city trasport" />
                        </div>
                        <div class="service-text">
                           <a href="#">
                              <h3>City transfer</h3>
                           </a>
                           {{-- <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur adipiscing elit.</p> --}}
                        </div>
                     </div>
                     <div class="single-service">
                        <span class="service-number">02 </span>
                        <div class="service-icon">
                           <img src="{{url('public/assets/images/img-airport-transport.png')}}" alt="airport trasport" />
                        </div>
                        <div class="service-text">
                           <a href="#">
                              <h3>Airport transfer</h3>
                           </a>
                           {{-- <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur adipiscing elit.</p> --}}
                        </div>
                     </div>
                     <div class="single-service">
                        <span class="service-number">03 </span>
                        <div class="service-icon">
                           <img src="{{url('public/assets/images/img-hospital-transport.png')}}" alt="hospital trasport" />
                        </div>
                        <div class="service-text">
                           <a href="#">
                              <h3>Hospital transfer</h3>
                           </a>
                           {{-- <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur adipiscing elit.</p> --}}
                        </div>
                     </div>
                     <div class="single-service">
                        <span class="service-number">04 </span>
                        <div class="service-icon">
                           <img src="{{url('public/assets/images/img-wedding-ceremony.png')}}" alt="wedding trasport" />
                        </div>
                        <div class="service-text">
                           <a href="#">
                              <h3>wedding Cars</h3>
                           </a>
                           {{-- <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur adipiscing elit.</p> --}}
                        </div>
                     </div>
                     <div class="single-service">
                        <span class="service-number">05 </span>
                        <div class="service-icon">
                           <img src="{{url('public/assets/images/img-hotel-transport.png')}}" alt="wedding trasport" />
                        </div>
                        <div class="service-text">
                           <a href="#">
                              <h3>Whole City Tour</h3>
                           </a>
                           {{-- <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur adipiscing elit.</p> --}}
                        </div>
                     </div>
                     <div class="single-service">
                        <span class="service-number">06 </span>
                        <div class="service-icon">
                           <img src="{{url('public/assets/images/img-luggege-transport.png')}}" alt="wedding trasport" />
                        </div>
                        <div class="service-text">
                           <a href="#">
                              <h3>Baggage transport</h3>
                           </a>
                           {{-- <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur adipiscing elit.</p> --}}
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Service Area End -->
       
       
      <!-- Testimonial Area Start -->
      <section class="gauto-testimonial-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h4>Some words</h4>
                     <h2>testimonial</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="testimonial-slider owl-carousel">
                  @foreach ($testimonials as $testimonial)
                      <div class="single-testimonial">
                        <div class="testimonial-text">
                           <p>"{{$testimonial->content}}"</p>
                           <div class="testimonial-meta">
                              <div class="client-image">
                                 <img src="{{url('public/assets/images/img-testimonial.jpg')}}" alt="testimonial" />
                              </div>
                              <div class="client-info">
                                 <h3>{{$testimonial->author}}</h3>
                                 <p>Customer</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  @endforeach 
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Testimonial Area End -->
       
       
      <!-- Blog Area Start -->
      <section class="gauto-blog-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h4>latest</h4>
                     <h2>Tour Package</h2>
                  </div>
               </div>
            </div>
            <div class="row">
            @foreach ($serviceCategories as $tour)
            {{-- {{dd($tour)}} --}}
                <div class="col-lg-4">
                  <div class="single-blog">
                     <div class="blog-image">
                        <a href="#">
                           @if (isset($tour->displayImage))
                           <img src="{{url('public/'.$tour->displayImage)}}" alt="{{$tour->name}}" />
                           @endif
                        
                        </a>
                     </div>
                     <div class="blog-text">
                        <h3><a href="#">{{$tour->name}}</a></h3>
                        <div class="blog-meta-home">
                           <div class="blog-meta-left">
                              <p>Rs. 200 /- Per Person</p>
                           </div>
                           <div class="blog-meta-right">
                               <p><i class="fa fa-moon-o"></i>1 Nights</p>
                              <p><i class="fa fa-sun-o"></i> 2 Days</p>
                           </div>
                        </div> 
                     </div>
                     <div class="offer-action">
                        <a href="#" class="offer-btn-1">Book Now</a>
                        <a href="#" class="offer-btn-2"><i class="fa fa-whatsapp"></i> Whatsapp us</a>
                     </div>
                  </div>
               </div>
            @endforeach
            </div>
         </div>
      </section>
      <!-- Blog Area End -->
       
 @endSection      
     