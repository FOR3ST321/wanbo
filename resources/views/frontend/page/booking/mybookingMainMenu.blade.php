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
                <h3 class="text-center">My Booking</h3>
                <hr>

                @if (count($booking['ongoing']) != 0)
                    <div class="container-fluid">
                        <h5>Ongoing Booking :</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci atque a obcaecati, velit
                            tenetur ratione nihil fugiat. Blanditiis ullam id, fugit laborum, tempora atque, dolor cum eos
                            molestias quos beatae.</p>
                        <hr>
                    </div>
                @endif

                @if (count($booking['upcoming']) != 0)
                    <div class="container-fluid">
                        <h5>Upcoming Booking :</h5>

                        @foreach ($booking['upcoming'] as $item)
                            <div class="col-12 card"
                                style="border:2px solid #9f80e9;background-color:#f3f3f3;margin:20px 0px">
                                <div class="card-body">
                                    <h5>{{ $item->store_name }} - Room {{ $item->room_name }}</h5>
                                    <p>
                                        <strong>Branch Address: </strong> {{ ucwords($item->address) }} <br>
                                        <strong>Schedule: </strong> {{ ucwords($item->schedule) }} <br>
                                        <strong>Status: </strong> {{ ucwords($item->status) }} <br>
                                        <strong>Unique Code: </strong> {{ ucwords($item->unique_id) }} <br>

                                    </p>

                                    <div class="row">
                                        <button id="checkInBooking" class="btn dorne-btn"
                                            style="margin:10px;cursor: pointer;">
                                            Check in now
                                        </button>

                                        <button id="cancelBooking" class="btn dorne-btn"
                                            style="margin:10px;background-color:rgb(224, 45, 45);cursor: pointer;">
                                            Cancel Booking
                                        </button>
                                    </div>

                                </div>
                            </div>
                        @endforeach



                        <hr>
                    </div>
                @endif

                @dump($booking['done'])
                @if (count($booking['done']) != 0)
                    <div class="container-fluid">
                        <h5>Finished/Canceled Booking :</h5>

                        @foreach ($booking['done'] as $item)
                            <div class="col-12 card"
                                style="border:2px solid #9f80e9;background-color:#f3f3f3;margin:20px 0px">
                                <div class="card-body">
                                    <h5>{{ $item->store_name }} - Room {{ $item->room_name }}</h5>
                                    <p>
                                        <strong>Schedule: </strong> {{ ucwords($item->schedule) }} <br>
                                        <strong>Check in: </strong> {{ ($item->checkin == null)? "-" : $item->checkin }} <br>
                                        <strong>Check out: </strong> {{ ($item->checkout == null)? "-" : $item->checkout }} <br>
                                        <strong>Total time: </strong> {{ $item->total_time }} minutes <br>
                                        <strong>Total price: </strong> Rp: {{ $item->total_price }} <br>
                                        
                                        <strong>Status: </strong> {{ ucwords($item->status) }} <br>
                                    </p>

                                    <div class="row">
                                        <button id="checkInBooking" class="btn dorne-btn"
                                            style="margin:10px;cursor: pointer;">
                                            Detail
                                        </button>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

            </div>
            {{-- @dump($booking) --}}
        </div>
    </section>
    <!-- ***** Listing Destinations Area End ***** -->
@endsection