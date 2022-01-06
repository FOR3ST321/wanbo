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
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center" style="margin-bottom: 0">
                        <span></span>
                        <h4>Update Profile</h4>
                    </div>
                    <form method="POST" action="/wanbo/users/{{ $user->id }}" class="mb-5">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <div class="form-control" style="background-color: #e9ecef">{{ $account[0]->username }}</div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus value="{{ old('name', $user->name) }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="hidden" name="membership_type" value="{{ $user->membership_type }}">
                        <input type="hidden" name="account_id" value="{{ $user->account_id }}">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Listing Destinations Area End ***** -->
@endsection
