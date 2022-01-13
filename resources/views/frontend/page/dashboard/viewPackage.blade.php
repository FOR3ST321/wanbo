@extends('frontend.partial.headerfooter')

@section('content')
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    {{-- @dump($package) --}}

    <!-- ***** Welcome Area Start ***** -->
    {{-- <section class="dorne-welcome-area bg-img bg-overlay" >
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
    </section> --}}
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(/frontend/img/bg-img/hero-1.jpg)"></div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** About Area Start ***** -->
    <section class="dorne-about-area section-padding-0-200">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-20">
                    <a href="javascript:history.back()" class="btn dorne-btn" style="margin-top: 20px"><em class="fas fa-angle-left"></em> Back</a>
                    <div class="hero-search-form mt-3 mb-3 d-flex justify-content-center" style="background-color: #130929;padding:50px 20px;border-radius:5px">
                        <div class="tab-pane fade show active" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                            <div class="isi-card">
                                <h1 style="color:white;text-align:center;margin-bottom:30px">{{ $package->package_name }}</h1>
                                <div style="display: flex;justify-content:center; margin-bottom:50px; border-top:3px solid white;padding-top:30px">
                                    <img src="{{ $package->photo_url }}" alt="" >
                                </div>
                            </div>
                            <div class="isi-card " style="padding:0 50px ">
                                <h4 style="color:white;text-align:center;margin-bottom:30px"><span style="color:#9f80e9">Price: </span> <br/> Rp. {{ $package->price_per_hour }}/hour</h4>
                                <h4 style="color:white;text-align:center;margin-bottom:30px"><span style="color:#9f80e9">Specification: </span> <br/> {{ $package->computer_spec }}</h4>
                                <h4 style="color:white;text-align:center;margin-bottom:30px"><span style="color:#9f80e9">Description: </span> <br/> {{ $package->description }}</h4>
                                <hr style="border: 2px solid white;margin-top:100px">
                                <div class="container col-sm-12 col-xl-6">
                                    {{-- form otw pilih room --}}
                                    <form action="#" method="post" class="d-flex flex-column justify-content-center">
                                        <h4 style="color:white;text-align:center;margin-bottom:30px"><span style="color:#9f80e9">Choose date to Book:</h4>
                                        <input type="date" name="tanggal-order" style="height:2.5em" min="{{date('Y-m-d')}}" value="{{date('Y-m-d')}}">

                                        <br>

                                        <h4 style="color:white;text-align:center;margin-bottom:30px"><span style="color:#9f80e9">Choose total time:</h4>
                                        <input type="date" name="tanggal-order" style="height:2.5em" min="{{date('Y-m-d')}}" value="{{date('Y-m-d')}}">
                                        {{-- <br> --}}
                                        <input type="hidden" name="package_id" value="{{$package->id}}">
                                        <button type="submit" class="btn dorne-btn" style="margin-top:20px">Next</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    <!-- ***** About Area End ***** -->
@endsection