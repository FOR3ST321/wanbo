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
                    <h5 style="margin-bottom: 20px">Server Time : {{date('d-m-Y H:i:s')}}</h5>

                    <table class="table table-bordered table-hover table-sm text-center">
                        <thead>
                            <tr>
                                <th scope="col" style="width:4%">No</th>
                                <th scope="col" style="width:10%">Room name</th>
                                <th scope="col" style="width:7%">Type</th>
                                <th scope="col" style="width:18%">Status</th>
                                <th scope="col" style="width:15%">Schedule</th>
                                <th scope="col" style="width:15%">Total Time</th>
                                <th scope="col" style="width:10%">Time left</th>
                                <th scope="col" style="width:15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($billingData as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->room_name}}</td>
                                    <td>{{$item->package_name}}</td>
                                    @if ($item->status == null)
                                        <td class="text-bold">Empty</td>
                                        <td colspan="4" style="text-align:center;background-color:#a89999">-</td>
                                    @else
                                        <td>Used - [{{$item->name}}]</td>
                                        <td>{{date_format(date_create($item->schedule), 'H:i')}}</td>
                                        <td>{{$item->total_time}} Min</td>
                                        <td>33 min</td>
                                        <td>
                                            <button class="btn btn-primary">Detail</button>
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
                    <table class="table table-bordered table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col" style="width:8%">No</th>
                                <th scope="col" style="width:10%">Cust Name</th>
                                <th scope="col" style="width:10%">Room</th>
                                <th scope="col" style="width:15%">Schedule</th>
                                <th scope="col" style="width:15%">Total Time</th>
                                <th scope="col" style="width:15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Hidayat</td>
                                <td>Room 3</td>
                                <td>20.00</td>
                                <td>90 min</td>
                                <td>
                                    <button class="btn btn-primary">Detail</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.card-body -->
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
