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
                        <h2>Welcome to {{ $store->store_name }}</h2>
                        <h4>{{ $store->address }}</h4>
                    </div>
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
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-search-form mt-1 d-flex justify-content-center" style="background-color: #341a79;padding:20px;border-radius:5px">
                        <div class="tab-pane fade show active" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                            <h6 style="color:white;text-align:center">Choose your Wanbo branch</h6>
                            <form action="/wanbo/dashboard/branch" method="post">
                                @csrf
                                <select class="custom-select">
                                    <option selected>Select Branch</option>
                                    @foreach ($branches as $branch)
                                        <option value="{{ $branch->id }}">{{ $branch->store_name }}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn dorne-btn" style="height: 40px;line-height:0;border-radius:5px"><i class="fa fa-search pr-2"
                                        aria-hidden="true"></i> Discover</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    <!-- ***** About Area End ***** -->

    <!-- ***** Editor Pick Area Start ***** -->
    <section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100 "
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
                        @foreach ($packages as $package)   
                            <div class="single-features-area">
                                <img src="{{ $package->photo_url }}" alt="" style="height: 125px">
                                <!-- Price -->
                                <div class="price-start">
                                    <p style="top: 125px;left:0">Rp. {{ $package->price_per_hour }}/hour</p>
                                </div>
                                <div class="feature-content d-flex align-items-center justify-content-between" style="padding: 60px 20px 20px 20px">
                                    <div class="feature-title">
                                        <h5>{{ $package->package_name }}</h5>
                                        <p>{{ $package->description }}</p>
                                        {{-- <p>{{ $package->computer_spec }}</p> --}}
                                    </div>
                                    <div class="feature-favourite">
                                        <a href="#" role="butotn" class="popover-test" title="{{ $package->computer_spec }}" data-content="{{ $package->computer_spec }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                                        {{-- <p><a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="{{ $package->computer_spec }}">button</a></p> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- Single Features Area -->
                        {{-- <div class="single-features-area">
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
                        </div> --}}
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
                    <div class="section-heading text-center mb-5">
                        <span></span>
                        <h4>Featured Menus</h4>
                        <p>The taste that suits you</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    {{-- <div class="features-slides owl-carousel"> --}}
                        <!-- Single Features Area -->
                        <table class="table table-striped table-hover" style="color: white">
                            <thead>
                            <tr>
                            <th scope="col" style="width:5%">#</th>
                            <th scope="col" style="width:20%">Name</th>
                            <th scope="col" style="width:10%">Type</th>
                            <th scope="col" style="width:15%">Price</th>
                            <th scope="col" style="width:40%">Description</th>
                            <th scope="col" style="width:10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($beverages as $beverage)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $beverage->beverage_name }}</td>
                                    <td>{{ ucwords($beverage->type) }}</td>
                                    <td>Rp. {{ $beverage->price }}</td>
                                    <td>{{ ucwords($beverage->description) }}</td>
                                    <td>
                                        <a href="#" class="btn bg-info" style="color: white">+ Order</a>
                                    </td>
                                </tr>
                            @endforeach
                            @empty ($beverages[0]) 
                                <tr>
                                    <td colspan="6" style="text-align: center">No Data!</td>
                                </tr>
                            @endempty
                        </tbody>
                        </table>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Restaurant Area End ***** -->

    <!-- ***** Features Events Area Start ***** -->
    {{-- <section class="dorne-features-events-area bg-img bg-overlay-9 section-padding-100-50"
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
                        </div>
                        <div class="feature-events-content">
                            <h5>Book Your PC</h5>
                            <h6>User</h6>
                            <p>Don't let the others use your favourite PC before you arrive.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig"
                        data-wow-delay="0.3s">
                        <div class="feature-events-thumb">
                            <img src="https://media.gettyimages.com/illustrations/nebula-cloud-and-planet-illustration-id548263227?k=20&m=548263227&s=612x612&w=0&h=naGjCGCgtDxZRAwdL_dI-1mRMNgvDFyEYCnRnPatb6Q=" alt="" style="height: 155px">
                        </div>
                        <div class="feature-events-content">
                            <h5>One App For All Wanbo</h5>
                            <h6>User</h6>
                            <p>Use this one super app for all wanbo branch around the universe!</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig"
                        data-wow-delay="0.5s">
                        <div class="feature-events-thumb">
                            <img src="https://media.gettyimages.com/photos/report-picture-id174628030?k=20&m=174628030&s=612x612&w=0&h=mwu8IZ9yQPaI5gc3fhCIBxUL1nf4U9YwpN8orsrMKlU=" alt="" style="height: 155px">
                        </div>
                        <div class="feature-events-content">
                            <h5>See Your History</h5>
                            <h6>User</h6>
                            <p>Want to track back your past? We will save all of your activity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig"
                        data-wow-delay="0.7s">
                        <div class="feature-events-thumb">
                            <img src="https://media.gettyimages.com/photos/customer-scanning-qr-code-making-a-quick-and-easy-contactless-payment-picture-id1177644546?k=20&m=1177644546&s=612x612&w=0&h=EtyvGWAeTnd753IPFp4mG6uA_Vd4Jw4-fcXM6vX1B5o=" alt="" style="height: 155px">
                        </div>
                        <div class="feature-events-content">
                            <h5>Many Options for Payment</h5>
                            <h6>User</h6>
                            <p>Didn't bring cash? Chill and choose many other digital payment method.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ***** Features Events Area End ***** -->
@endsection
