@extends('admin.partial.headerfooter')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit New Room</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid" style="margin-bottom:20px">
            <a href="/wanboAdmin/rooms" class="btn btn-success">
                <i class="fas fa-chevron-left" style="margin-right: 5px"></i>
                Back to room list
            </a>
        </div>

        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <form method="POST" action="/wanboAdmin/rooms/{{ $room->id }}" class="mb-5"> 
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="room_name" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('room_name') is-invalid @enderror" id="room_name" name="room_name" autofocus value="{{ old('room_name',$room->room_name) }}">
                            @error('room_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <div class="form-floating">
                                <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Insert room's description" name="description" id="description" >{{ old('description',$room->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="package_id" class="form-label">Related Package</label>
                            <select name="package_id" class="custom-select">
                                @foreach ($packages as $package)
                                    @if (old('package_id',$room->package_id) == $package->id)
                                        <option value="{{ $package->id }}" selected>{{ $package->package_name }}</option>
                                    @else
                                        <option value="{{ $package->id }}">{{ $package->package_name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="store_branch_id" value="1">
                        <button type="submit" class="btn btn-primary">Update Room</button>
                    </form>
                </div><!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
