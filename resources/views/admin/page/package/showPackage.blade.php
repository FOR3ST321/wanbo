@extends('admin.partial.headerfooter')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Package Detail</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">{{ $package->package_name }}</h3>
                </div> <!-- /.card-body -->

                <div class="card-body">

                    <a href="/wanboAdmin/packages" class="btn btn-success">
                        <i class="fas fa-chevron-left" style="margin-right: 5px"></i>
                        Back to package list
                    </a>
                    <a href="/wanboAdmin/packages/{{ $package->id }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                    <form action="/wanboAdmin/packages/{{ $package->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger formBtn" value="{{$package->package_name}}">
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
                                <td>{{ $package->package_name }}</td>
                            </tr>
                            <tr>
                                <td>Price/hour</td>
                                <td>Rp {{ $package->price_per_hour }}</td>
                            </tr>
                            <tr>
                                <td>Computer Spec</td>
                                <td>{{ $package->computer_spec }}</td>
                            </tr>
                            <tr>    
                                <td>Desc</td>
                                <td>{{ $package->description }}</td>
                            </tr>
                            <tr>
                                <td>Associated Room</td>
                                <td>
                                    <table>
                                    @foreach ($rooms as $room)
                                        @if ($room->package_id == $package->id)
                                            <tr>
                                                {{-- <td>{{ $loop->iteration }}</td> --}}
                                                <td>{{ $room->room_name }}</td>
                                                <td>
                                                    <a href="/wanboAdmin/rooms/{{ $room->id }}" class="badge bg-info"><i class="fas fa-eye"></i></a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </table>
                                </td>
                            </tr>
                            <tr>    
                                <td>Photo</td>
                                <td><img src="{{ $package->photo_url }}" alt="photo"></td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div><!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
