@extends('admin.partial.headerfooter')

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
                      <input value="<?= date('Y-m-d'); ?>" max="<?= date('Y-m-d'); ?>" type="date" class="form-control datetimepicker-input" data-target="#reservationdate">
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
                        <strong>Summaries</strong><br>
                        <div class="row">
                            <div class="col-2">
                                Total Order
                            </div>
                            <div class="col-4">
                                : x
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2">
                                Total Booking Time
                            </div>
                            <div class="col-4">
                                : xxx minute
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2">
                                Total Food Order
                            </div>
                            <div class="col-4">
                                : x
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2">
                                Revenue from warnet
                            </div>
                            <div class="col-4">
                                : Rp.xxx.xxx
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2">
                                Revenue from food
                            </div>
                            <div class="col-4">
                                : Rp.xxx.xxx
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-2">
                                Total Revenue
                            </div>
                            <div class="col-4">
                                : Rp.xxx.xxx
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
                                <th scope="col" style="width:10%">Food Order</th>
                                <th scope="col" style="width:10%">Total Payment</th>
                                <th scope="col" style="width:10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Hidayat</td>
                                <td>Room 3</td>
                                <td>20.00</td>
                                <td>90 min</td>
                                <td>2 item(s)</td>
                                <td>Rp:200.000</td>
                                <td>
                                    <button class="btn btn-primary">Detail</button>
                                </td>
                            </tr>
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
                            <tr>
                                <td>1</td>
                                <td>Hidayat</td>
                                <td>Room 3</td>
                                <td>Bakso</td>
                                <td>3</td>
                                <td>Rp:200.000</td>
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
