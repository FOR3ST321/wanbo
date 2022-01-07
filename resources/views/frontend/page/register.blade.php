@extends('frontend.partial.headerfooter')
{{-- @dump(auth()->user()); --}}



@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay" style="height:1000px;background-image: url(https://media.gettyimages.com/photos/interior-of-la-bastille-internet-cafe-amsterdam-picture-idAA028564?k=20&m=AA028564&s=612x612&w=0&h=4cLUXImRnW0xR47HKekzB0Vlg1sGXD4VQPXuxSqrwyE=);">
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
                            <a class="nav-item nav-link" id="nav-places-tab" href="/wanbo/login"
                                role="tab" aria-controls="nav-places" aria-selected="true">Login</a>
                            <a class="nav-item nav-link active" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab"
                                aria-controls="nav-events" aria-selected="false">Register</a>
                        </div>
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                                <h6>Registration</h6>
                                <form action="/wanbo/register" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12" style="margin:20px 0px 0px 0px">
                                            <input style="border-radius:5px;height:60px;" type="text"
                                                class="form-control input-style @error('name') is-invalid @enderror" placeholder="Name" name='name' value="{{ old('name') }}">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12" style="margin:20px 0px 0px 0px">
                                            <input style="border-radius:5px;height:60px" type="email"
                                                class="form-control @error('email') is-invalid @enderror" placeholder="Email" name='email' value="{{ old('email') }}">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="membership_type" value="bronze">
                                        <input type="hidden" name="account_id" value="2">
                                        <div class="col-12" style="margin:20px 0px 0px 0px">
                                            <input style="border-radius:5px;height:60px" type="text"
                                                class="form-control @error('username') is-invalid @enderror" placeholder="Username" name='username' value="{{ old('username') }}">
                                            @error('username')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12" style="margin:20px 0px 0px 0px">
                                            <input style="border-radius:5px;height:60px" type="password"
                                                class="form-control @error('password') is-invalid @enderror" placeholder="Password" name='password'>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12" style="margin:20px 0px 0px 0px">
                                            <input style="border-radius:5px;height:60px" type="password"
                                                class="form-control" placeholder="Confirm Password" name='password_confirmation'>
                                        </div>
                                        <input type="hidden" name="is_admin" value="0">
                                        <div class="col-12" style="margin:10px 0px 0px 0px">
                                            <div class="form-check ml-4">
                                                <input class="form-check-input" type="checkbox" id="flexCheckDefault" required>
                                                <label class="form-check-label" for="flexCheckDefault" style="color: white">
                                                    I agree with Wanbo <a href="">Terms and Conditions</a>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12" style="margin:10px 0px 0px 0px">
                                            <button type="submit" class="btn dorne-btn" id="account_register" style="border-radius: 5px">Register</button>
                                        </div>
                                    </div>
                                </form>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="exclamation-triangle-fill" fill="white" viewBox="0 0 16 16">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </symbol>
                                </svg>
                                <div class="d-flex col-12 mt-3">
                                    <svg class="bi flex-shrink-0 mr-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                    <p style="color: white">Remember your Username and Password for login.</p>
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
