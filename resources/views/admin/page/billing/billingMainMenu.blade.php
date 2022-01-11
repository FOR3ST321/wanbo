@extends('admin.partial.headerfooter')
{{-- @dump($billingData); --}}
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Welcome to Wanbo Admin, {{ auth()->user()->username }} !</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-success card-outline">
                <div class="card-header">
                    <h3 class="card-title"> Billing Info</h3>
                </div> <!-- /.card-body -->
                <div class="card-body">


                    <div class="row" style="margin-bottom: 20px">
                        <div class="col-6">
                            <button class="btn btn-success" data-toggle="modal" data-target="#newBooking">+ Create New
                                Booking</button>
                        </div>
                        <div class="col-6">
                            <h5 class="float-right">Server Time : {{ date('d-m-Y H:i:s') }}</h5>
                        </div>
                    </div>

                    <table class="table table-bordered table-hover table-sm text-center">
                        <thead>
                            <tr>
                                <th scope="col" style="width:4%">No</th>
                                <th scope="col" style="width:10%">Room name</th>
                                <th scope="col" style="width:7%">Type</th>
                                <th scope="col" style="width:18%">Status</th>
                                <th scope="col" style="width:10%">Schedule</th>
                                <th scope="col" style="width:10%">Total Time</th>
                                <th scope="col" style="width:10%">Done Time</th>
                                <th scope="col" style="width:10%">Time left</th>
                                <th scope="col" style="width:15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($billingData as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->room_name }}</td>
                                    <td>{{ $item->package_name }}</td>
                                    @if ($item->status == null)
                                        <td class="text-bold text-danger">Empty</td>
                                        <td colspan="5" style="text-align:center;background-color:#a89999">-</td>
                                    @else
                                        <td>Used - [{{ $item->name }}]</td>
                                        <td>{{ date_format(date_create($item->schedule), 'H:i') }}</td>
                                        <td>{{ $item->total_time }} min</td>
                                        <?php
                                        $doneTime = new DateTime($item->schedule);
                                        $doneTime->modify("+$item->total_time minutes");
                                        
                                        $secondsDiff = abs(strtotime(date('Y-m-d H:i:s')) - strtotime($doneTime->format('Y-m-d H:i:s')));
                                        $minDiff = floor($secondsDiff / 60);
                                        $secondsDiff -= $minDiff * 60;
                                        ?>
                                        <td>{{ $doneTime->format('H:i') }}</td>
                                        <td>{{ $minDiff }} min {{ $secondsDiff }} sec</td>
                                        <td>
                                            <a href='/wanboAdmin/detailBilling/{{$item->order_id}}' class="btn btn-primary">
                                                <em class="fas fa-info-circle"></em>
                                            </a>
                                            <form action="/wanboAdmin/billing/{{ $item->order_id }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                <button class="btn bg-danger border-0 stopBillingBtn"
                                                    value="{{ $item->room_name }}">
                                                    <em class="fas fa-stop-circle"></em>
                                                </button>
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div><!-- /.card-body -->
            </div>

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title"> Upcoming Booking Today</h3>
                </div> <!-- /.card-body -->
                <div class="card-body">
                    <table class="table table-bordered table-hover table-sm text-center">
                        <thead>
                            <tr>
                                <th scope="col" style="width:3%">No</th>
                                <th scope="col" style="width:10%">Cust Name</th>
                                <th scope="col" style="width:10%">Room</th>
                                <th scope="col" style="width:15%">Schedule</th>
                                <th scope="col" style="width:15%">Total Time</th>
                                <th scope="col" style="width:15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($upcomingBilling as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->room_name }}</td>
                                    <td>{{ date_format(date_create($item->schedule), 'H:i') }}</td>
                                    <td>{{ $item->total_time }} Min</td>

                                    <td>
                                        {{-- <button class="btn btn-primary">
                                            <em class="fas fa-info-circle"></em>
                                        </button> --}}
                                        <form action="/wanboAdmin/billing/{{ $item->order_id }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            <button class="btn bg-danger border-0 cancelBookingBtn"
                                                value="{{ $item->name }}">
                                                <em class="fas fa-times"></em>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            @empty ($upcomingBilling[0]) 
                                <tr>
                                    <td colspan="6" style="text-align: center">No Upcoming Booking!</td>
                                </tr>
                            @endempty
                        </tbody>
                    </table>
                </div><!-- /.card-body -->
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


    <!-- Modal -->
    <div class="modal fade" id="newBooking" tabindex="-1" role="dialog" aria-labelledby="newBookingTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create New Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="/wanboAdmin/guestBooking" class="mb-5">
                        @csrf
                        <div class="mb-3">
                            <label for="room_name" class="form-label">User</label>
                            <input type="text" class="form-control " value="Guest" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="room_id" class="form-label">Room</label>
                            <select name="room_id" class="custom-select">
                                @foreach ($billingData as $data)
                                    @if ($data->status == null)
                                        <option value="{{ $data->rooms_id }}">{{ $data->room_name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="total_time" class="form-label">Duration</label>
                            <select name="total_time" class="custom-select">
                                @for ($i = 60; $i <= 600; $i += 30)
                                    <option value="{{ $i }}">{{ $i }} minutes</option>
                                @endfor
                            </select>
                        </div>

                        {{-- <div class="mb-3">
                            <label for="time" class="form-label">Start Time</label>
                            <input name="time" type="time" class="form-control " value="{{date('H:i')}}" disabled>
                        </div> --}}



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create Booking!</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
