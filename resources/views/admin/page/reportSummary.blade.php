@extends('admin.partial.headerfooter')
{{-- @dump($foodOrderData) --}}
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daily Report Summary</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <hr>

        <div class="container-fluid">
            <div class="form-group col-4">
                <label>Select Summary Date:</label>
                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                    <form action="/wanboAdmin/reportSummary/" method="GET">
                        <input id='datepicker' value="<?= date('Y-m-d') ?>" max="<?= date('Y-m-d') ?>" type="date"
                            class="form-control datetimepicker-input" data-target="#reservationdate" name="date">
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Transaction Report - [Date picked]</h3>
                </div> <!-- /.card-body -->
                <div class="card-body">
                    <div class="container">
                        <strong>Summaries</strong><br><br>
                        <div class="row">
                            <div class="col-4">
                                <div class="info-box">
                                    <span class="info-box-icon bg-info"><i class="fas fa-shopping-cart"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Total order</span>
                                        <span class="info-box-number">1,410</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            
                            <div class="col-4">
                                <div class="info-box">
                                    <span class="info-box-icon bg-info"><i class="fas fa-shopping-cart"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Total Food order</span>
                                        <span class="info-box-number">1,410</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="info-box">
                                    <span class="info-box-icon bg-info"><i class="fas fa-clock"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Total Booking Time</span>
                                        <span class="info-box-number">1,410</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>


                            <div class="col-4">
                                <div class="info-box">
                                    <span class="info-box-icon bg-info"><i class="fas fa-dollar-sign"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Revenue from warnet</span>
                                        <span class="info-box-number">1,410</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="info-box">
                                    <span class="info-box-icon bg-info"><i class="fas fa-dollar-sign"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Revenue from food</span>
                                        <span class="info-box-number">1,410</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="info-box">
                                    <span class="info-box-icon bg-info"><i class="fas fa-file-invoice-dollar"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Total Revenue</span>
                                        <span class="info-box-number">1,410</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    {{-- table order yang finished hari ini --}}
                    <strong>Finished Booking <br> <br></strong>
                    <table class="table table-bordered table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col" style="width:5%">No</th>
                                <th scope="col" style="width:10%">Cust Name</th>
                                <th scope="col" style="width:10%">Room</th>
                                <th scope="col" style="width:10%">Schedule</th>
                                <th scope="col" style="width:10%">Total Time</th>
                                <th scope="col" style="width:10%">Total Payment</th>
                                <th scope="col" style="width:10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookingData as $i)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$i->name}}</td>
                                <td>{{$i->room_name}}</td>
                                <td>{{date_format(date_create($i->schedule),"H:i:s")}}</td>
                                <td>{{$i->total_time}} Min</td>
                                <td>Rp: {{$i->total_price}}</td>
                                <td>
                                    <button class="btn btn-primary">Detail</button>
                                </td>
                            </tr>
                            @endforeach
                            @empty ($bookingData[0]) 
                                <tr>
                                    <td colspan="7" style="text-align: center">No Data!</td>
                                </tr>
                            @endempty
                        </tbody>
                    </table>

                    <hr>

                    {{-- list makanan yang diorder hari ini --}}
                    <strong>Finished Food Order <br> <br></strong>
                    <table class="table table-bordered table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col" style="width:5%">No</th>
                                <th scope="col" style="width:10%">Cust Name</th>
                                <th scope="col" style="width:10%">Room</th>
                                <th scope="col" style="width:10%">Food Name</th>
                                <th scope="col" style="width:10%">Quantity</th>
                                <th scope="col" style="width:10%">Total Payment</th>
                                <th scope="col" style="width:10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($foodOrderData as $i)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$i->name}}</td>
                                <td>{{$i->room_name}}</td>
                                <td>{{$i->beverage_name}}</td>
                                <td>{{$i->quantity}}</td>
                                <td>{{$i->quantity*$i->price}}</td>
                                <td>
                                    <button class="btn btn-primary">Detail</button>
                                </td>
                            </tr>
                            @endforeach
                            @empty ($foodOrderData[0]) 
                                <tr>
                                    <td colspan="7" style="text-align: center">No Data!</td>
                                </tr>
                            @endempty
                        </tbody>
                    </table>
                </div><!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
