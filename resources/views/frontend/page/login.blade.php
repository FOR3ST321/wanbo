@extends('frontend.partial.headerfooter')
{{-- @dump(auth()->user()); --}}



@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(/frontend/img/bg-img/hero-1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    {{-- <div class="hero-content">
                        <h4>Login Here</h4>
                    </div> --}}
                    <!-- Hero Search Form -->
                    <div class="hero-search-form">
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places"
                                role="tab" aria-controls="nav-places" aria-selected="true">Login</a>
                            <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab"
                                aria-controls="nav-events" aria-selected="false">Register</a>
                        </div>
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel"
                                aria-labelledby="nav-places-tab">
                                <h6>Login to start your session</h6>
                                <form action="/wanbo/auth" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12" style="margin:20px 0px 20px 0px">
                                            <input style="border-radius:0;height:60px" type="text"
                                                class="form-control input-style" placeholder="Username" name='username'>
                                        </div>
                                        <div class="col-12" style="margin:20px 0px 20px 0px">
                                            <input style="border-radius:0;height:60px" type="password"
                                                class="form-control" placeholder="Password" name='password'>
                                        </div>
                                        <div class="col-12" style="margin:20px 0px 20px 0px">
                                            <button type="submit" class="btn dorne-btn">Send</button>
                                        </div>
                                    </div>
                                    {{-- <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2"
                                            aria-hidden="true"></i> Search</button> --}}
                                </form>

                                <div class="container">
                                    @error('password')
                                        {{ $message }}
                                        <br>
                                    @enderror
            
                                    @error('username')
                                        {{ $message }}
                                        <br><br>
                                    @enderror
            
                                    @if (session()->has('loginError'))
                                        <p class="text-danger">Email / Pass salah</p>
                                    @endif
                                </div>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->
@endsection
