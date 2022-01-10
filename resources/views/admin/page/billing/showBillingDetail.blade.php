@extends('admin.partial.headerfooter')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Billing Detail</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                </div> <!-- /.card-body -->

                <div class="card-body">

                    <button onclick="history.back()" class="btn btn-secondary">
                        <i class="fas fa-chevron-left" style="margin-right: 5px"></i>
                        Back to main menu
                    </button>

                    <table class="table table-striped table-sm mt-3">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 40%">Attributes</th>
                                <th scope="col">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Room Name</td>
                                <td>{{ $billingData->room_name }}</td>
                            </tr>
                            <tr>
                                <td>User</td>
                                <td>{{ $billingData->name }}</td>
                            </tr>

                            <tr>
                                <td>Status</td>
                                <td>{{ ucwords($billingData->status) }}</td>
                            </tr>

                            @if ($billingData->name != 'Guest')
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $billingData->email }}</td>
                                </tr>
                                <tr>
                                    <td>Membership</td>
                                    <td>{{ $billingData->membership_type }}</td>
                                </tr>
                            @endif

                            <tr>
                                <td>Unique ID</td>
                                <td>{{ $billingData->unique_id }}</td>
                            </tr>
                            <tr>
                                <td>Total Time</td>
                                <td>{{ $billingData->total_time }} Minutes</td>
                            </tr>

                            <tr>
                                <td>Schedule</td>
                                <td>{{ $billingData->schedule }}</td>
                            </tr>

                            <?php
                            $doneTime = new DateTime($billingData->schedule);
                            $doneTime->modify("+$billingData->total_time minutes");
                            
                            $secondsDiff = abs(strtotime(date('Y-m-d H:i:s')) - strtotime($doneTime->format('Y-m-d H:i:s')));
                            $minDiff = floor($secondsDiff / 60);
                            $secondsDiff -= $minDiff * 60;
                            ?>

                            @if ($billingData->checkin)
                                <tr>
                                    <td>Check in</td>
                                    <td>{{ $billingData->checkin }}</td>
                                </tr>
                            @endif

                            @if ($billingData->status == 'booked')
                                <tr>
                                    <td>Done Time</td>
                                    <td>{{ $doneTime->format('H:i') }}</td>
                                </tr>

                                <tr>
                                    <td>Time Left</td>
                                    <td>{{ $minDiff }} min {{ $secondsDiff }} sec</td>
                                </tr>
                            @endif
                            
                            @if ($billingData->status == 'done')
                                <tr>
                                    <td>Check Out</td>
                                    <td>{{$billingData->checkout}}</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>


                    <hr>
                    <h5>Food Ordered</h5>

                    <table class="table table-bordered table-hover table-sm text-center">
                        <thead>
                            <tr>
                                <th scope="col" style="width:4%">No</th>
                                <th scope="col" style="width:10%">Food name</th>
                                <th scope="col" style="width:7%">Type</th>
                                <th scope="col" style="width:10%">Price</th>
                                <th scope="col" style="width:10%">Quantity</th>
                                <th scope="col" style="width:10%">Total Price</th>
                                <th scope="col" style="width:10%">Status</th>
                                <th scope="col" style="width:15%">Order Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($foodOrderData as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->beverage_name}}</td>
                                    <td>{{$item->type}}</td>
                                    <td>Rp: {{$item->price}}</td>
                                    <td>{{$item->quantity}} pcs</td>
                                    <td>Rp: {{$item->price * $item->quantity}}</td>
                                    <td class = "text-bold 
                                    @if ($item->food_status == 'success')
                                    text-success
                                    @else
                                    @if ($item->food_status == 'canceled')
                                    text-danger
                                    @endif
                                    @endif ">{{ucwords($item->food_status)}}</td>

                                    <td>{{$item->created_at}}</td>
                                </tr>
                            @endforeach

                            @if (count($foodOrderData) == 0)
                                <tr>
                                    <td class="text-bold" style="background-color: #d6d6d6" colspan="8">Order food data empty!</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div><!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
