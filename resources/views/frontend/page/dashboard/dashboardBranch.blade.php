@extends('frontend.partial.headerfooter')

@section('content')
    {{-- @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif --}}
    {{-- @dump($packages) --}}
    <!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay">
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
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1.2s"
                                    style="background-color:white;">
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
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1.4s"
                                    style="background-color:white;">
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
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1.6s"
                                    style="background-color:white;">
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
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1.8s"
                                    style="background-color:white;">
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
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="2s"
                                    style="background-color:white;">
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
                    <div class="hero-search-form mt-1 d-flex justify-content-center"
                        style="background-color: #341a79;padding:20px;border-radius:5px">
                        <div class="tab-pane fade show active" id="nav-events" role="tabpanel"
                            aria-labelledby="nav-events-tab">
                            <h6 style="color:white;text-align:center">Change Wanbo branch</h6>
                            <form action="/wanbo/dashboard" method="get">
                                <select class="custom-select" name="id" style="width: 180px">
                                    @foreach ($branches as $branch)
                                        <option value="{{ $branch->id }}"  
                                            @if($branch->id == request()->id)
                                            selected
                                            @endif>{{ $branch->store_name }}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn dorne-btn"
                                    style="height: 40px;line-height:0;border-radius:5px"><i class="fa fa-search pr-2"
                                        aria-hidden="true"></i> Discover</button>
                            </form>
                            <div style="width: 100%;text-align: center;margin-top:5px">
                                <a href="/wanbo/dashboard/warnet">More Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area End ***** -->

    <!-- ***** Editor Pick Area Start ***** -->
    <section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100 "
        style="background-image: url(/frontend/img/bg-img/hero-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Packages you must consider</h4>
                        <p>Scroll to left for more!</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                        <!-- Single Features Area -->
                        @foreach ($packages as $package)
                            <div class="single-features-area">
                                <a href="/wanbo/package/{{ $package->id }}" role="button" style="text-decoration: none"
                                    title="more detail" data-content="{{ $package->computer_spec }}">
                                    <img src="{{ $package->photo_url }}" alt="" style="height: 125px">
                                    <!-- Price -->
                                    <div class="price-start">
                                        <p style="top: 125px;left:0">Rp. {{ $package->price_per_hour }}/hour</p>
                                    </div>
                                    <div class="feature-content d-flex align-items-center justify-content-between"
                                        style="padding: 60px 20px 20px 20px">
                                        <div class="feature-title">
                                            <h5 class="package-name" style="color:rgb(59, 59, 59)">
                                                {{ $package->package_name }}</h5>
                                            <p> <br> {!! $package->description !!}</p>
                                            {{-- <p>{{ $package->computer_spec }}</p> --}}
                                        </div>
                                        <div class="feature-favourite">

                                            {{-- <p><a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="{{ $package->computer_spec }}">button</a></p> --}}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
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

            <div class="row d-flex justify-content-around">
                @foreach ($beverages as $beverage)
                    <div class="card col-lg-2 col-md-4" style="margin:5px;">
                        <h6 class="card-title text-center" style="margin-top:10px"> <u>{{ $beverage->beverage_name }}</u>
                        </h6>
                        <div style="margin-bottom: 10px">
                            <span class="font-weight-bold">Rp: {{ $beverage->price }} </span> <br>
                            {!! $beverage->description !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ***** Features Restaurant Area End ***** -->
@endsection
