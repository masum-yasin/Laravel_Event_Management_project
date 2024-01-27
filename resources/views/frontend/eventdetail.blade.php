@extends('frontend.layouts.app')
@section('content')
   <!-- BreadCrumb Starts -->  
   <section class="breadcrumb-main" style="background-image:url({{asset('frontend/assets/images/pexels-wendy-wei-1190297.jpg')}});">
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center pt-14 pb-2">
                <h5 class="theme mb-0">Eventiz</h5>
                <h1 class="mb-0 white">Event Detail</h1>
            </div>
        </div>
    </div>{{asset('')}}
    <div class="bread-overlay"></div>
</section>
<!-- BreadCrumb Ends --> 

<!-- coming counter starts -->
<section class="coming-countermain p-0 mt-0 bg-theme1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 pe-lg-4">
                <div class="coming-counter d-md-flex align-items-center justify-content-between p-5 text-md-start text-center" data-date="2023-12-28 00:00:00">
                    <div class="counter-box"><span class="days"></span><br> Days</div>
                    <div class="counter-box"><span class="hours"></span><br> Hours</div>
                    <div class="counter-box"><span class="minutes"></span><br> Minutes</div>
                    <div class="counter-box"><span class="seconds"></span><br> Seconds</div>
                </div>
            </div>
            <div class="col-lg-4 ps-lg-4 text-center countdown-para p-lg-0 p-4">
                <h3 class="mb-1 white">Book Your Ticket Now!</h3>
                <span class="white">Time Is Running Out</span>
            </div>
        </div>
            
    </div>
</section>
<!-- coming counter Ends -->

<!-- blog starts -->
<section class="event-detail pt-12">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 pe-lg-4">
                <div class="event-detail-inner text-center text-md-start">
                    <img src="{{asset('frontend/assets/images/blog/blog1.jpg')}}" alt="" class="mb-3">
                    <h4>Description Event</h4>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        <br><br>
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="event-quote p-4 bg-grey d-md-flex align-items-center justify-content-between mb-4 text-center text-md-start">
                        <i class="fa fa-quote-left p-4 bg-theme white fs-1 mb-md-0 mb-2"></i>
                        <p class="mb-0 ps-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, 
                            pulvinar dapibus leo.Lorem ipsum dolor sit amet consectetur adipiscing elit dolor</p>
                    </div>     
                    <h4>Keyfactor Of This Event</h4>   
                    <div class="row mb-4">
                        <div class="col-lg-6 mb-2">
                            <ul class="list">
                                <li class="pb-2"><i class="fa fa-angle-right me-2"></i> Luctus nam per dis lacus</li>
                                <li class="pb-2"><i class="fa fa-angle-right me-2"></i> Penatibus hac quis torquent molestie</li>
                                <li class="pb-2"><i class="fa fa-angle-right me-2"></i> Velit rhoncus dolor adipiscing</li>
                                <li><i class="fa fa-angle-right me-2"></i> Aenean per Penatibus</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list">
                                <li class="pb-2"><i class="fa fa-angle-right me-2"></i> Penatibus hac quis torquent molestie</li>
                                <li class="pb-2"><i class="fa fa-angle-right me-2"></i> Luctus nam per dis lacus</li>
                                <li class="pb-2"><i class="fa fa-angle-right me-2"></i> Velit rhoncus dolor adipiscing</li>
                                <li><i class="fa fa-angle-right me-2"></i> Aenean per Penatibus</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- sidebar starts -->
            <div class="col-lg-4 ps-lg-4">
                <div class="sidebar-sticky">
                    <div class="list-sidebar">

                        <div class="sidebar-item mb-4 bg-grey p-4">
                            <h5 class="bg-white p-3 text-lg-start text-center">About Speaker</h5>
                            
                            <div class="schedule-speaker d-lg-flex p-4 px-0 align-items-center text-center text-lg-start w-100 border-b">
                                <img src="{{asset('frontend/assets/images/reviewer/1.jpg')}}" alt="" class="rounded-circle img-circle">
                                <div class="speaker-content ms-3">
                                    <h6 class="mb-0 theme">Ricky Malone</h6>
                                    <small>Speaker</small>
                                </div>
                            </div>
                            
                            <div class="schedule-speaker d-lg-flex p-4 pb-0 px-0 align-items-center text-center text-lg-start w-100">
                                <img src="{{asset('frontend/assets/images/reviewer/2.jpg')}}" alt="" class="rounded-circle img-circle">
                                <div class="speaker-content ms-3">
                                    <h6 class="mb-0 theme">Jesus Holland</h6>
                                    <small>Host & Speaker</small>
                                </div>
                            </div>
                        </div>


                        <div class="sidebar-item bg-grey p-4 pb-3 mb-4">
                            <h5 class="bg-white p-3 text-lg-start text-center">Event Info</h5>
                            <div class="footer-contact d-flex align-items-center py-3 border-b">
                                <i class="fa fa-calendar theme fs-4"></i>
                                <div class="footer-contact-content ps-3">
                                    <h6 class="mb-1">Date</h6>
                                    <span class="">27 September 2023</span>
                                </div>
                            </div>
                            <div class="footer-contact d-flex align-items-center py-3 border-b">
                                <i class="fa fa-clock theme fs-4"></i>
                                <div class="footer-contact-content ps-3">
                                    <h6 class="mb-1">Time</h6>
                                    <span class="">9:00AM - 17:00PM</span>
                                </div>
                            </div>
                            <div class="footer-contact d-flex align-items-center pt-3 pb-0">
                                <i class="fa fa-map-marker-alt theme fs-4"></i>
                                <div class="footer-contact-content ps-3">
                                    <h6 class="mb-1">Venue</h6>
                                    <span class="">Jakarta Garden City Hall, Room C</span>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-item p-5 text-center position-relative" style="background-image: url({{asset('frontend/assets/images/pexels-wendy-wei-1190297.jpg')}}); background-size: cover;">
                            <div class="sidebar-item-content position-relative z-index2">
                                <h3 class="mb-3 theme">Need Help?</h3>
                                <p class="mb-3 white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <a href="contact.html" class="nir-btn">Contact Us <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="theme-overlay"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog Ends -->   
@endsection