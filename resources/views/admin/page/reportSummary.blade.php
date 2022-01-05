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

                </div><!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
