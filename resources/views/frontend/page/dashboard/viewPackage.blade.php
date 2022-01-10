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
            </div>
        </div>
    </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** About Area Start ***** -->
    <section class="dorne-about-area section-padding-0-100">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-search-form mt-3 mb-3 d-flex justify-content-center" style="background-color: #130929;padding:50px 20px;border-radius:5px">
                        <div class="tab-pane fade show active" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                            <h2 style="color:white;text-align:center;margin-bottom:30px">{{ $package->package_name }}</h4>
                            <img src="{{ $package->photo_url }}" alt="">
                            <h4 style="color:white;text-align:center;margin-bottom:30px">Price: Rp {{ $package->price_per_hour }}/hour</h4>
                            <h4 style="color:white;text-align:center;margin-bottom:30px">Specification: {{ $package->computer_spec }}</h4>
                            <h4 style="color:white;text-align:center;margin-bottom:30px">Description: {{ $package->description }}</h4>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    <!-- ***** About Area End ***** -->
@endsection