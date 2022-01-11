@extends('admin.partial.headerfooter')
{{-- @dump($food_orders) --}}
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Food Order History</h1>
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
                    <table class="table table-striped table-sm table-hover text-center">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col" style="width:15%">Date Time</th>
                            <th scope="col">Name</th>
                            <th scope="col">User</th>
                            <th scope="col">Room</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($food_orders as $foodOrder)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $foodOrder->updated_at }}</td>
                                    <td>{{ $foodOrder->beverage_name }}</td>
                                    <td>{{ $foodOrder->name }}</td>
                                    <td>{{ $foodOrder->room_name }}</td>
                                    <td>{{ $foodOrder->quantity }} Item(s)</td>
                                    <td>Rp: {{ $foodOrder->price }}</td>
                                    @if ($foodOrder->food_status == 'success')
                                        <td class="text-bold text-success">
                                    @else
                                        <td class="text-bold text-danger">
                                    @endif
                                    {{ ucwords($foodOrder->food_status) }}</>
                                </tr>
                            @endforeach
                            @if (count($food_orders) == 0) 
                                <tr>
                                    <td colspan="7" style="text-align: center">No Data!</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-start" style="margin-top: 20px;">
                        {{$food_orders->links()}}
                    </div>
                </div><!-- /.card-body -->
                
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection