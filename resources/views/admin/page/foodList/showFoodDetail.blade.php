@extends('admin.partial.headerfooter')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Food Detail</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">{{ $beverage->beverage_name }}</h3>
                </div> <!-- /.card-body -->

                <div class="card-body">

                    <a href="/wanboAdmin/beverages" class="btn btn-success"><span data-feather="arrow-left"></span> Back to food list</a>
                    <a href="/wanboAdmin/beverages/{{ $beverage->id }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                    <form action="/wanboAdmin/beverages/{{ $beverage->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                            <i class="fas fa-trash-alt"></i> Delete
                        </button>
                    </form>

                    <table class="table table-striped table-sm mt-3">
                        <thead>
                            <tr>
                            <th scope="col">Attributes</th>
                            <th scope="col">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{ $beverage->beverage_name }}</td>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <td>{{ $beverage->type }}</td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>Rp. {{ $beverage->price }}</td>
                            </tr>
                            <tr>    
                                <td>Desc</td>
                                <td>{{ $beverage->description }}</td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div><!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
