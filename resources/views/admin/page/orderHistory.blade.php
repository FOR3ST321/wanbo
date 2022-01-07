@extends('admin.partial.headerfooter')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Order History</h1>
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
                            <th scope="col">Room</th>
                            <th scope="col">User</th>
                            <th scope="col">Status</th>
                            <th scope="col">Schedule</th>
                            <th scope="col">Check In</th>
                            <th scope="col">Check Out</th>
                            <th scope="col">Total Time</th>
                            <th scope="col">Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            @foreach($orders as $order)
                                @if($order->status !== 'pending' && $order->status !== 'paid' && $order->status !== 'booked')
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $order->room_name }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ ucwords($order->status) }}</td>
                                        <td>{{ $order->schedule }}</td>
                                        <td>{{ $order->checkin }}</td>
                                        <td>{{ $order->checkout }}</td>
                                        <td>{{ $order->total_time }} Min</td>
                                        <td>RP: {{ $order->total_price }}</td>
                                        <?php $i++ ?>
                                    </tr>
                                @endif
                            @endforeach
                            @if ($i == 1) 
                                <tr>
                                    <td colspan="7" style="text-align: center">No Data!</td>
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
