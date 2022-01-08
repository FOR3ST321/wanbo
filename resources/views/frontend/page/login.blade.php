@extends('frontend.partial.headerfooter')
{{-- @dump(auth()->user()); --}}
@include('sweetalert::alert')


@section('content')

    <!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay" style="height:800px;background-image: url(https://media.gettyimages.com/photos/interior-of-la-bastille-internet-cafe-amsterdam-picture-idAA028564?k=20&m=AA028564&s=612x612&w=0&h=4cLUXImRnW0xR47HKekzB0Vlg1sGXD4VQPXuxSqrwyE=);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    {{-- <div class="hero-content">
                        <h4>Login Here</h4>
                    </div> --}}
                    <!-- Hero Search Form -->
                    <div class="hero-search-form">
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </symbol>
                        </svg>
                        @if (session()->has('success'))
                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 mr-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                <div>
                                    {{ session('success') }}
                                </div>
                            </div>
                        @endif
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places"
                                role="tab" aria-controls="nav-places" aria-selected="true">Login</a>
                            <a class="nav-item nav-link" id="nav-events-tab" href="/wanbo/register" role="tab"
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
                                            <input style="border-radius:5px;height:60px" type="text"
                                                class="form-control input-style" placeholder="Username" name='username'>
                                        </div>
                                        <div class="col-12" style="margin:20px 0px 20px 0px">
                                            <input style="border-radius:5px;height:60px" type="password"
                                                class="form-control" placeholder="Password" name='password'>
                                        </div>
                                        <div class="col-12" style="margin:20px 0px 20px 0px">
                                            <button type="submit" class="btn dorne-btn" style="border-radius: 5px">Login</button>
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
                                        <p class="text-danger">Login Failed</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->
@endsection
