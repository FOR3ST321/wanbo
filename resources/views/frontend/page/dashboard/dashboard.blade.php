@extends('frontend.partial.headerfooter')

@section('content')
    {{-- @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif --}}

    <!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay" >
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content">
                        <h2>Seize your favourite PC!</h2>
                        <h4>Make sure the other people don't use it at the same time.</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Catagory Area Start ***** -->
    <section class="dorne-catagory-area" id="category-area">
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
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-search-form mt-3 mb-3 d-flex justify-content-center" style="background-color: #130929;padding:50px 20px;border-radius:5px">
                        <div class="tab-pane fade show active" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                            <h4 style="color:white;text-align:center;margin-bottom:30px">Choose your Wanbo branch</h4>
                            <form action="/wanbo/dashboard" method="get">
                                <select class="custom-select" name="id" style="width: 180px">
                                    @foreach ($branches as $branch)
                                        <option value="{{ $branch->id }}">{{ $branch->store_name }}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn dorne-btn" style="height: 40px;line-height:0;border-radius:5px"><i class="fa fa-search pr-2"
                                        aria-hidden="true"></i> Discover</button>
                            </form>
                            <div style="width: 100%;text-align: center;margin-top:10px">
                                <a href="/wanbo/warnet">More Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>

    <!-- ***** Features Restaurant Area Start ***** -->
    <section class="dorne-features-restaurant-area bg-default">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mb-5">
                        <span></span>
                        <h4>Featured Menus</h4>
                        <p>The taste that suits you</p>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-around">
                    @foreach ($beverages as $beverage)
                        <div class="card col-lg-2 col-md-4" style="margin:5px;">
                            <div style="height: 75px">
                                <h5 class="card-title text-center" style="margin-top:20px;color:#7643EA;"> <strong>{{strtoupper($beverage->beverage_name)}}</strong></h5>
                            </div>
                            <div style="margin-bottom: 10px">
                                <span class="font-weight-bold">Rp {{ $beverage->price }} </span> <br> 
                                {!!$beverage->description!!}
                            </div>
                        </div>
                    @endforeach
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
                            <img src="https://media.gettyimages.com/photos/computers-picture-id182514528?k=20&m=182514528&s=612x612&w=0&h=C-YXjR5KOk5_QUoRKRZ5TdbXcZWQlBu5SAVXDrs7cJU=" alt="" style="height:155px">
                            {{-- <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="/frontend/img/core-img/map.png" alt=""></a>
                            </div> --}}
                        </div>
                        <div class="feature-events-content">
                            <h5>Book Your PC</h5>
                            <h6>User</h6>
                            <p>Don't let the others use your favourite PC before you arrive.</p>
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
                        data-wow-delay="0.5s">
                        <div class="feature-events-thumb">
                            <img src="https://media.gettyimages.com/photos/report-picture-id174628030?k=20&m=174628030&s=612x612&w=0&h=mwu8IZ9yQPaI5gc3fhCIBxUL1nf4U9YwpN8orsrMKlU=" alt="" style="height: 155px">
                            {{-- <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="/frontend/img/core-img/map.png" alt=""></a>
                            </div> --}}
                        </div>
                        <div class="feature-events-content">
                            <h5>See Your History</h5>
                            <h6>User</h6>
                            <p>Want to track back your past? We will save all of your activity.</p>
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
