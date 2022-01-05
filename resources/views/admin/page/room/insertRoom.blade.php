@extends('admin.partial.headerfooter')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Insert New Room</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <form method="POST" action="/wanboAdmin/rooms" class="mb-5"> 
                        @csrf
                        <div class="mb-3">
                            <label for="room_name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('room_name') is-invalid @enderror" id="room_name" name="room_name" autofocus value="{{ old('room_name') }}">
                            @error('room_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <div class="form-floating">
                                <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Insert room's description" name="description" id="description" >{{ old('description') }}</textarea>
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
                                    @if (old('package_id') == $package->id)
                                        <option value="{{ $package->id }}" selected>{{ $package->package_name }}</option>
                                    @else
                                        <option value="{{ $package->id }}">{{ $package->package_name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="store_branch_id" value="1">
                        <button type="submit" class="btn btn-primary">Insert Room</button>
                    </form>
                </div><!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection