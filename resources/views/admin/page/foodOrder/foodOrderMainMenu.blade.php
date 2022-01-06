@extends('admin.partial.headerfooter')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Food Order</h1>
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
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Type</th>
                            <th scope="col">User</th>
                            <th scope="col">Room</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            @foreach($food_orders as $foodOrder)
                                <tr>
                                    @if($foodOrder->food_status === 'pending')
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $foodOrder->beverage_name }}</td>
                                        <td>{{ $foodOrder->type }}</td>
                                        <td>{{ $foodOrder->name }}</td>
                                        <td>{{ $foodOrder->room_name }}</td>
                                        <td>{{ $foodOrder->quantity }}</td>
                                        <td>{{ $foodOrder->food_status }}</td>
                                        <td>
                                            {{-- ini coba coba --}}
                                            {{-- <a href="{{ route('app\Http\Controllers\FoodOrderController@success', [$foodOrder]) }}" class="btn btn-success"><i class="fas fa-check-square"></i></a> --}}
                                            {{-- <a href="" class="btn btn-success"><i class="fas fa-check-square"></i></a> --}}
                                            {{-- <a href="" class="btn btn-danger"><i class="fas fa-times"></i></a> --}}
                                            <form action="/wanboAdmin/foodOrders/{{ $foodOrder->id }}" method="POST" class="d-inline">
                                                @method('put')
                                                @csrf
                                                <button class="btn bg-success border-0 formBtn">
                                                    <i class="fas fa-check-square"></i>
                                                </button>
                                            </form>
                                            <form action="/wanboAdmin/foodOrders/{{ $foodOrder->id }}" method="POST" class="d-inline">
                                                @method('patch')
                                                @csrf
                                                <button class="btn bg-danger border-0 formBtn">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <?php $i++ ?>
                                    </tr>
                                @endif
                            @endforeach
                            @if ($i == 1) 
                                <tr>
                                    <td colspan="8" style="text-align: center">No Data!</td>
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