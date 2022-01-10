@extends('admin.partial.headerfooter')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Room Detail</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">{{ $room->room_name }}</h3>
                </div> <!-- /.card-body -->

                <div class="card-body">

                    <a href="/wanboAdmin/rooms" class="btn btn-secondary">
                        <i class="fas fa-chevron-left" style="margin-right: 5px"></i>
                        Back to room list
                    </a>
                    <a href="/wanboAdmin/rooms/{{ $room->id }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                    <form action="/wanboAdmin/rooms/{{ $room->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger formBtn" value="{{$room->room_name}}">
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
                                <td>{{ $room->room_name }}</td>
                            </tr>
                            <tr>
                                <td>Desc</td>
                                <td>{{ $room->description }}</td>
                            </tr>
                            <tr>
                                <td>Package related</td>
                                <td>
                                    <table>
                                    @foreach ($packages as $package)
                                        @if ($package->id == $room->package_id)
                                            <tr>
                                                <td>{{ $package->package_name }}</td>
                                                <td>
                                                    <a href="/wanboAdmin/packages/{{ $package->id }}" class="badge bg-info"><i class="fas fa-eye"></i></a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>Branch related</td>
                                <td>
                                    @foreach ($branches as $branch)
                                        @if ($branch->id == $room->store_branch_id)
                                            {{ $branch->store_name }}
                                        @endif
                                    @endforeach
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
