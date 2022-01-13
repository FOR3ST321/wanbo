@extends('frontend.partial.headerfooter')

@section('content')

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(/frontend/img/bg-img/hero-1.jpg)"></div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Listing Destinations Area Start ***** -->
    <section class="dorne-listing-destinations-area section-padding-100-50">
        <div class="container">
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </symbol>
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </symbol>
            </svg>
            @if (session()->has('success'))
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 mr-2" width="24" height="24" role="img" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div>
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            @if (session()->has('fail'))
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 mr-2" width="24" height="24" role="img" aria-label="Danger:">
                        <use xlink:href="#exclamation-triangle-fill" />
                    </svg>
                    <div>
                        {{ session('fail') }}
                    </div>
                </div>
            @endif


            <div class="container-fluid">
                <h3 class="text-center">Reserve Warnet Room</h3>
                <hr>

                <h5>Please Choose Your Desired Package :</h5>

                <div class="row d-flex justify-content-between">
                    @foreach ($packages as $package)
                        <div class="single-features-area col-sm-12 col-lg-5" style="margin:20px 5px;border-radius:10px"
                        data-id="{{$package->id}}" data-title="{{$package->package_name}}">
                            <div class="d-flex justify-content-center">
                                <img src="{{ $package->photo_url }}" alt="" style="height: 10em;margin-top:2em">
                            </div>
                            <!-- Price -->
                            <div class="feature-content d-flex align-items-center justify-content-between"
                                style="padding: 60px 20px 20px 20px">
                                <div class="feature-title">
                                    <h5>{{ $package->package_name }}</h5>
                                    
                                    <p><strong>Rp. {{ $package->price_per_hour }}/hour</strong> <br>
                                        {{ $package->description }} Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga sint cum exercitationem mollitia vitae, placeat assumenda, deserunt error beatae, illo corporis laudantium officiis dolorem! Alias aliquid veritatis molestiae nemo cumque!</p>
                                    {{-- <p>{{ $package->computer_spec }}</p> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- @dump($packages) --}}
            </div>
        </div>
    </section>
    <!-- ***** Listing Destinations Area End ***** -->
@endsection
