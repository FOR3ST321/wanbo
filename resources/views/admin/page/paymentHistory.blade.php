@extends('admin.partial.headerfooter')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Payment History</h1>
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
                    <table class="table table-striped table-hover table-sm text-center">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Schedule</th>
                            <th scope="col">Room</th>
                            <th scope="col">User</th>
                            <th scope="col">Status</th>
                            {{-- <th scope="col">Check In</th>
                            <th scope="col">Check Out</th> --}}
                            <th scope="col">Total Time</th>
                            <th scope="col">Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                                {{-- @if($order->status !== 'canceled' && $order->status !== 'failed' && $order->status !== 'pending') --}}
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $order->schedule }}</td>
                                        <td>{{ $order->room_name }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td class="text-bold 
                                        @if($order->status == 'done')
                                        text-success
                                        @endif
                                        ">{{ ucwords($order->status) }}</td>
                                        {{-- <td>{{ $order->checkin }}</td>
                                        <td>{{ $order->checkout }}</td> --}}
                                        <td>{{ $order->total_time }} min</td>
                                        <td>Rp {{ $order->total_price }}</td>
                                    </tr>
                                {{-- @endif --}}
                            @endforeach
                            @if (count($orders) == 0) 
                                <tr>
                                    <td colspan="9" style="text-align: center">No Data!</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-start" style="margin-top: 20px;">
                        {{$orders->links()}}
                    </div>
                </div><!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- /.content -->
@endsection
