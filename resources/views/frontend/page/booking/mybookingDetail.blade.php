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



    <section class="dorne-listing-destinations-area" style="padding-top: 50px">
        <div class="container">
            <div class="container" style="margin-bottom: 10px">
                <a href="/wanbo/mybooking" class="btn dorne-btn">Back</a>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center" style="margin-bottom: 0">
                        <span></span>
                        <h4>Booking Detail</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ***** Listing Destinations Area Start ***** -->
    <section class="dorne-listing-destinations-area" style="padding-top: 3em;margin-bottom:3em">
        {{-- @dump($bookDetail) --}}
        {{-- @dump($foodOrderList) --}}
        <div class="container">
            <div class="container-fluid">
                <strong>Booking ID: </strong> {{ $bookDetail->orders_id }} <br>
                <strong>Store Name / Room: </strong> {{ $bookDetail->store_name }} / {{ $bookDetail->room_name }} <br>
                <strong>Status: </strong>
                <span
                    class=" @if ($bookDetail->status == 'done')
                    text-success
                @elseif($bookDetail->status == 'canceled')
                    text-danger
                    @endif">
                    {{ ucwords($bookDetail->status) }} <br>
                </span>
                <strong>Schedule: </strong> {{ $bookDetail->schedule }} <br>
                <strong>Total Time: </strong> {{ $bookDetail->total_time }} Minutes <br>
                <strong>Total Price: </strong> Rp: {{ $bookDetail->total_price }} <br>
                <strong>Check In: </strong> {{ $bookDetail->checkin != null ? $bookDetail->checkin : '-' }} <br>
                <strong>Check Out: </strong> {{ $bookDetail->checkout != null ? $bookDetail->checkout : '-' }} <br>
                @if (count($foodOrderList) != 0)
                    <strong>Your Food Order:</strong> <br>
                    <table class="table table-striped table-hover table-responsive text-center" style="margin-top:15px">
                        <thead class="font-weight-bold">
                            <td style="width: 10%">No</td>
                            <td style="width: 30%">Name</td>
                            <td style="width: 10%">Qty</td>
                            <td style="width: 30%">Total Price</td>
                            <td style="width: 20%">Status</td>
                        </thead>
                        <tbody>
                            @foreach ($foodOrderList as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->beverage_name }}</td>
                                    <td>{{ $item->quantity }} pc(s)</td>
                                    <td>Rp: {{ $item->price * $item->quantity }}</td>
                                    <td
                                        class="
                                        @if ($item->food_status == 'success')
                                        text-success
                                        @elseif($item->food_status == 'canceled')
                                        text-danger
                                        @endif>
                                        ">
                                        {{ ucwords($item->food_status) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>


            @if ($bookDetail->status == 'booked')
                <hr>
                <h4 class="text-center">Order Foods</h4>
                <hr>
                <div class="row d-flex justify-content-between">
                    @foreach ($foodList as $item)
                        <div class="card pickroom pickfood col-sm-4 col-lg-3" data-id="{{ $item->id }}"
                            data-toggle="modal" data-target="#exampleModal" data-name="{{ $item->beverage_name }}"
                            data-price="{{ $item->price }}" style="margin:20px 5px;border-radius:10px">
                            <div class="feature-content d-flex align-items-center justify-content-between"
                                style="padding: 20px">
                                <div class="feature-title">
                                    <h5>{{ $item->beverage_name }}</h5>

                                    <p class="room_status" style="color:black">
                                        <strong>Type: </strong> {{ $item->type }} <br>
                                        <strong>Price: </strong> Rp: {{ $item->price }} <br>
                                        {{ $item->description }}
                                    </p>
                                    {{-- <p>{{ $package->computer_spec }}</p> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>


        <!-- Modal -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="foodOrderTitle"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/wanbo/orderfood/{{ request()->id }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="container">
                                <label class="font-weight-bold">Price :</label> Rp: <span id="prices"></span>
                            </div>
                            <div class="container" style="margin-top:10px">
                                <label class="font-weight-bold">Input Quantity:</label>
                                <input class="form-control" type="number" name="qty" id="qty" value="1" required>
                            </div>
                            <div class="container d-flex flex-column" style="margin-top:20px">
                                <label class="font-weight-bold">Pick Payment Options: </label>
                                <select name="Payment" class="form-control">
                                    <option value="cash" selected>Pay at Cashier</option>
                                    <option value="cash">OVO</option>
                                    <option value="cash">Dana</option>
                                    <option value="cash">Gopay</option>
                                </select>
                            </div>
                            <div class="container" style="margin-top:20px">
                                <label class="font-weight-bold">Total Price:</label>
                                <br> <span id="totalPrice">RP: 87</span>
                            </div>
                            <input type="hidden" name="beverage_id" id="beverage_id">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="orderButtonSubmit">Order Food Now!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Listing Destinations Area End ***** -->
@endsection
