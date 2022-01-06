@extends('frontend.partial.headerfooter')

@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay" >
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content">
                        <h2>Seize your favourite PC!</h2>
                        <h4>Make sure the other people don't use it at the same time.</h4>
                    </div>
                    <!-- Hero Search Form -->
                    {{-- <div class="hero-search-form">
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places"
                                role="tab" aria-controls="nav-places" aria-selected="true">Places</a>
                            <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab"
                                aria-controls="nav-events" aria-selected="false">Events</a>
                        </div>
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel"
                                aria-labelledby="nav-places-tab">
                                <h6>What are you looking for?</h6>
                                <form action="#" method="get">
                                    <select class="custom-select">
                                        <option selected>Your Destinations</option>
                                        <option value="1">New York</option>
                                        <option value="2">Latvia</option>
                                        <option value="3">Dhaka</option>
                                        <option value="4">Melbourne</option>
                                        <option value="5">London</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>All Catagories</option>
                                        <option value="1">Catagories 1</option>
                                        <option value="2">Catagories 2</option>
                                        <option value="3">Catagories 3</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>Price Range</option>
                                        <option value="1">$100 - $499</option>
                                        <option value="2">$500 - $999</option>
                                        <option value="3">$1000 - $4999</option>
                                    </select>
                                    <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2"
                                            aria-hidden="true"></i> Search</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                                <h6>What are you looking for?</h6>
                                <form action="#" method="get">
                                    <select class="custom-select">
                                        <option selected>Your Destinations</option>
                                        <option value="1">New York</option>
                                        <option value="2">Latvia</option>
                                        <option value="3">Dhaka</option>
                                        <option value="4">Melbourne</option>
                                        <option value="5">London</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>All Catagories</option>
                                        <option value="1">Catagories 1</option>
                                        <option value="2">Catagories 2</option>
                                        <option value="3">Catagories 3</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>Price Range</option>
                                        <option value="1">$100 - $499</option>
                                        <option value="2">$500 - $999</option>
                                        <option value="3">$1000 - $4999</option>
                                    </select>
                                    <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2"
                                            aria-hidden="true"></i> Search</button>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Catagory Area Start ***** -->
    <section class="dorne-catagory-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-catagories">
                        <div class="row">
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1.2s" style="background-color:white;">
                                    {{-- <div class="catagory-content"> --}}
                                        <img src="/frontend/img/core-img/w.png" alt="" style="width: 100px">
                                        {{-- <a href="#">
                                            <h6>Hotels</h6>
                                        </a> --}}
                                    {{-- </div> --}}
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1.4s" style="background-color:white;">
                                    {{-- <div class="catagory-content"> --}}
                                        <img src="/frontend/img/core-img/a.png" alt="" style="width: 100px">
                                        {{-- <a href="#">
                                            <h6>Hotels</h6>
                                        </a> --}}
                                    {{-- </div> --}}
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1.6s" style="background-color:white;">
                                    {{-- <div class="catagory-content"> --}}
                                        <img src="/frontend/img/core-img/n.png" alt="" style="width: 100px">
                                        {{-- <a href="#">
                                            <h6>Hotels</h6>
                                        </a> --}}
                                    {{-- </div> --}}
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1.8s" style="background-color:white;">
                                    {{-- <div class="catagory-content"> --}}
                                        <img src="/frontend/img/core-img/b.png" alt="" style="width: 100px">
                                        {{-- <a href="#">
                                            <h6>Hotels</h6>
                                        </a> --}}
                                    {{-- </div> --}}
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="2s" style="background-color:white;">
                                    {{-- <div class="catagory-content"> --}}
                                        <img src="/frontend/img/core-img/o.png" alt="" style="width: 100px">
                                        {{-- <a href="#">
                                            <h6>Hotels</h6>
                                        </a> --}}
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Catagory Area End ***** -->

    <!-- ***** About Area Start ***** -->
    <section class="dorne-about-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content text-center">
                        <h2>Book your warnet with <br><span>Wanbo</span></h2>
                        <p>An application that allows people to order a PC or room at an internet cafe online and order food or drinks at the cafe easily and quickly. This application also helps internet cafe admin to get report, manage incoming orders, billings, packages, etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area End ***** -->

    <!-- ***** Editor Pick Area Start ***** -->
    <section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100"
        style="background-image: url(img/bg-img/hero-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Packages you must consider</h4>
                        <p>Choose your spec</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="https://media.gettyimages.com/photos/streaming-live-esport-event-on-computer-at-home-picture-id1190641416?k=20&m=1190641416&s=612x612&w=0&h=GDhOS17zD0Liylkf7j3Xhf7gl96J58id-LV3o5ah4ag=" alt="" style="height: 125px">
                            <!-- Price -->
                            <div class="price-start">
                                <p style="top: 125px;left:0">Rp. 5.000/hour</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="padding: 60px 20px 20px 20px">
                                <div class="feature-title">
                                    <h5>Package1</h5>
                                    <p>Streaming</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="https://media.gettyimages.com/photos/classic-computer-classroom-picture-id1145371232?k=20&m=1145371232&s=612x612&w=0&h=pfcK32cfHzfuZNCokUdhiLbpijjQr4OwvXlpegEKV7g=" alt="" style="height: 125px">
                            <!-- Price -->
                            <div class="price-start">
                                <p style="top: 125px;left:0">Rp. 10.000/hour</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="padding: 60px 20px 20px 20px">
                                <div class="feature-title">
                                    <h5>Package2</h5>
                                    <p>Classic</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="https://media.gettyimages.com/photos/gamer-room-picture-id1311350206?k=20&m=1311350206&s=612x612&w=0&h=RJM19owwEk8BcaemUSNB8pjjV4uNDuccjQ67sAaVLKs=" alt="" style="height: 125px">
                            <!-- Price -->
                            <div class="price-start">
                                <p style="top: 125px;left:0">Rp. 12.000/hour</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="padding: 60px 20px 20px 20px">
                                <div class="feature-title">
                                    <h5>Package3</h5>
                                    <p>Gaming</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="https://media.gettyimages.com/photos/cozy-scandinavian-style-home-office-picture-id1043634192?k=20&m=1043634192&s=612x612&w=0&h=fHxeXZkN7gZqodcPbqTlsxQdOZ0gTtqNiJ7iuH1sd9c=" alt="" style="height: 125px">
                            <!-- Price -->
                            <div class="price-start">
                                <p style="top: 125px;left:0">Rp. 20.000/hour</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="padding: 60px 20px 20px 20px">
                                <div class="feature-title">
                                    <h5>Package4</h5>
                                    <p>Private</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="https://media.gettyimages.com/photos/interior-of-modern-office-picture-id973712582?k=20&m=973712582&s=612x612&w=0&h=WMIUDLloWdFetm6hJQ5ehlSC1-pMqGizfEsxcGKyAWw=" alt="" style="height: 125px">
                            <!-- Price -->
                            <div class="price-start">
                                <p style="top: 125px;left:0">Rp. 50.000/hour</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="padding: 60px 20px 20px 20px">
                                <div class="feature-title">
                                    <h5>Package5</h5>
                                    <p>Collaboration</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Editor Pick Area End ***** -->

    <!-- ***** Features Restaurant Area Start ***** -->
    <section class="dorne-features-restaurant-area bg-default">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Featured Menus</h4>
                        <p>The taste that suits you</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                        <!-- Single Features Area -->
                        <div class="single-features-area" style="height: 370px">
                            <img src="/frontend/img/bg-img/feature-6.jpg" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="#">8.5</a>
                                {{-- <a href="#"><img src="/frontend/img/core-img/map.png" alt=""></a> --}}
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="padding: 40px 20px">
                                <div class="feature-title">
                                    <h5>Tubruk Ice Coffee</h5>
                                    <p>Cold and strong</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area" style="height: 370px">
                            <img src="/frontend/img/bg-img/feature-7.jpg" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="#">9.5</a>
                                {{-- <a href="#"><img src="/frontend/img/core-img/map.png" alt=""></a> --}}
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="padding: 40px 20px">
                                <div class="feature-title">
                                    <h5>Boiled pastels</h5>
                                    <p>Hot and soft</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area" style="height: 370px">
                            <img src="/frontend/img/bg-img/feature-8.jpg" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="#">2.2</a>
                                {{-- <a href="#"><img src="/frontend/img/core-img/map.png" alt=""></a> --}}
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="padding: 40px 20px">
                                <div class="feature-title">
                                    <h5>Green Chili Soto</h5>
                                    <p>Too spicy</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area" style="height: 370px">
                            <img src="/frontend/img/bg-img/feature-9.jpg" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="#">8.7</a>
                                {{-- <a href="#"><img src="/frontend/img/core-img/map.png" alt=""></a> --}}
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="padding: 40px 20px">
                                <div class="feature-title">
                                    <h5>Bandrek</h5>
                                    <p>Good for health</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area" style="height: 370px">
                            <img src="/frontend/img/bg-img/feature-10.jpg" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="#">9.8</a>
                                {{-- <a href="#"><img src="/frontend/img/core-img/map.png" alt=""></a> --}}
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="padding: 40px 20px">
                                <div class="feature-title">
                                    <h5>Pancakes</h5>
                                    <p>Sweet</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Restaurant Area End ***** -->

    <!-- ***** Features Events Area Start ***** -->
    <section class="dorne-features-events-area bg-img bg-overlay-9 section-padding-100-50"
        style="background-image: url(/frontend/img/bg-img/hero-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Other Features</h4>
                        <p>Take a brief look at our features</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig"
                        data-wow-delay="0.2s">
                        <div class="feature-events-thumb">
                            <img src="https://media.gettyimages.com/photos/report-picture-id174628030?k=20&m=174628030&s=612x612&w=0&h=mwu8IZ9yQPaI5gc3fhCIBxUL1nf4U9YwpN8orsrMKlU=" alt="" style="height:155px">
                            {{-- <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="/frontend/img/core-img/map.png" alt=""></a>
                            </div> --}}
                        </div>
                        <div class="feature-events-content">
                            <h5>Get Report</h5>
                            <h6>Admin</h6>
                            <p>Help to manage your business with periodically auto-generated report.</p>
                        </div>
                        {{-- <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig"
                        data-wow-delay="0.3s">
                        <div class="feature-events-thumb">
                            <img src="https://media.gettyimages.com/illustrations/nebula-cloud-and-planet-illustration-id548263227?k=20&m=548263227&s=612x612&w=0&h=naGjCGCgtDxZRAwdL_dI-1mRMNgvDFyEYCnRnPatb6Q=" alt="" style="height: 155px">
                            {{-- <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="/frontend/img/core-img/map.png" alt=""></a>
                            </div> --}}
                        </div>
                        <div class="feature-events-content">
                            <h5>One App For All Wanbo</h5>
                            <h6>User</h6>
                            <p>Use this one super app for all wanbo branch around the universe!</p>
                        </div>
                        {{-- <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig"
                        data-wow-delay="0.4s">
                        <div class="feature-events-thumb">
                            <img src="https://media.gettyimages.com/photos/close-up-of-mixed-race-man-reading-menu-in-restaurant-picture-id519517171?k=20&m=519517171&s=612x612&w=0&h=JrWjv57nA7S0DJaDpaq5481DD3vVG_fQG0WohUpq-vI=" alt="" style="height: 155px">
                            {{-- <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="/frontend/img/core-img/map.png" alt=""></a>
                            </div> --}}
                        </div>
                        <div class="feature-events-content">
                            <h5>Manage Your Own Menu</h5>
                            <h6>Admin</h6>
                            <p>Customize the menu according to what you have at the kitchen.</p>
                        </div>
                        {{-- <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig"
                        data-wow-delay="0.5s">
                        <div class="feature-events-thumb">
                            <img src="https://media.gettyimages.com/photos/just-in-time-picture-id1208739424?k=20&m=1208739424&s=612x612&w=0&h=sAm8AG6edS2VLUGa5W87NP8AnHaUwm2FcAdSLQEwD6s=" alt="" style="height: 155px">
                            {{-- <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="/frontend/img/core-img/map.png" alt=""></a>
                            </div> --}}
                        </div>
                        <div class="feature-events-content">
                            <h5>Save Billings</h5>
                            <h6>User</h6>
                            <p>Must to go home before the billing finished? Just save it for later.</p>
                        </div>
                        {{-- <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig"
                        data-wow-delay="0.6s">
                        <div class="feature-events-thumb">
                            <img src="https://media.gettyimages.com/photos/interior-of-open-office-picture-id1146500442?k=20&m=1146500442&s=612x612&w=0&h=d_W31jKIFIJA5fhR6AdTQo3Rl6L8UwHWDwIacJ29jrs=" alt="" style="height: 155px">
                            {{-- <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="/frontend/img/core-img/map.png" alt=""></a>
                            </div> --}}
                        </div>
                        <div class="feature-events-content">
                            <h5>Manage Packages and Rooms</h5>
                            <h6>Admin</h6>
                            <p>Customize it according to what you have at the building.</p>
                        </div>
                        {{-- <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig"
                        data-wow-delay="0.7s">
                        <div class="feature-events-thumb">
                            <img src="https://media.gettyimages.com/photos/customer-scanning-qr-code-making-a-quick-and-easy-contactless-payment-picture-id1177644546?k=20&m=1177644546&s=612x612&w=0&h=EtyvGWAeTnd753IPFp4mG6uA_Vd4Jw4-fcXM6vX1B5o=" alt="" style="height: 155px">
                            {{-- <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="/frontend/img/core-img/map.png" alt=""></a>
                            </div> --}}
                        </div>
                        <div class="feature-events-content">
                            <h5>Many Options for Payment</h5>
                            <h6>User</h6>
                            <p>Didn't bring cash? Chill and choose many other digital payment method.</p>
                        </div>
                        {{-- <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Events Area End ***** -->
@endsection
