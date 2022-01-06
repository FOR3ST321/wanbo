@extends('admin.partial.headerfooter')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Package</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid" style="margin-bottom:20px">
            <a href="/wanboAdmin/packages" class="btn btn-success">
                <i class="fas fa-chevron-left" style="margin-right: 5px"></i>
                Back to package list
            </a>
        </div>

        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <form method="POST" action="/wanboAdmin/packages/{{ $package->id }}" class="mb-5"> 
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="package_name" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('package_name') is-invalid @enderror" id="package_name" name="package_name" autofocus value="{{ old('package_name', $package->package_name) }}">
                            @error('package_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price_per_hour" class="form-label">Price/hour <span class="text-danger">*</span></label>
                            <input type="number" class="form-control @error('price_per_hour') is-invalid @enderror" id="price_per_hour" name="price_per_hour" value="{{ old('price_per_hour', $package->price_per_hour) }}">
                            @error('price_per_hour')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="computer_spec" class="form-label">Computer Specification</label>
                            <div class="form-floating">
                                <textarea class="form-control @error('computer_spec') is-invalid @enderror" placeholder="Insert computer's spesification" name="computer_spec" id="computer_spec" >{{ old('computer_spec', $package->computer_spec) }}</textarea>
                                @error('computer_spec')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                            <div class="form-floating">
                                <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Insert package's description" name="description" id="description" >{{ old('description',$package->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="photo_url" class="form-label">Photo url</label>
                            <input type="url" class="form-control @error('photo_url') is-invalid @enderror" id="photo_url" name="photo_url" autofocus value="{{ old('photo_url', $package->photo_url) }}">
                            @error('photo_url')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <button type="button" class="btn btn-secondary btn-sm mt-2" id="preview">Preview url</button>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Package</button>
                    </form>
                </div><!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
