@extends('admin.partial.headerfooter')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Room List</h1>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </symbol>
            </svg>
            @if (session()->has('success'))
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 mr-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                        {{ session('success') }}
                    </div>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <a href="/wanboAdmin/rooms/create" class="btn btn-primary">+ Insert new room</a>
                </div> <!-- /.card-body -->
                <div class="card-body">
                    <p class="text-danger">* You can't delete room data if it already has an order</p>
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                            <th scope="col" style="width:10%">#</th>
                            <th scope="col" style="width:30%">Name</th>
                            <th scope="col" style="width:30%">Package</th>
                            <th scope="col" style="width:30%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rooms as $room)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $room->room_name }}</td>
                                    <td>{{ $room->package->package_name }}</td>

                                    <td>
                                        <a href="/wanboAdmin/rooms/{{ $room->id }}" class="btn bg-info"><i class="fas fa-eye"></i> Detail</a>
                                        <a href="/wanboAdmin/rooms/{{ $room->id }}/edit" class="btn bg-warning"><i class="fas fa-edit"></i> Edit</a>
                                        
                                        @if (count($room->order) > 0)
                                            <button class="btn bg-danger border-0 formBtn" disabled>
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </button>
                                        @else
                                        <form action="/wanboAdmin/rooms/{{ $room->id }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn bg-danger border-0 formBtn" value="{{$room->room_name}}">
                                            <i class="fas fa-trash-alt"></i> Delete
                                        </button>
                                        </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            @empty ($rooms[0]) 
                                <tr>
                                    <td colspan="4" style="text-align: center">No Data!</td>
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
