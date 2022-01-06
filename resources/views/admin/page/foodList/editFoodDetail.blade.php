@extends('admin.partial.headerfooter')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Beverage Detail</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid" style="margin-bottom:20px">
            <a href="/wanboAdmin/beverages" class="btn btn-success">
                <i class="fas fa-chevron-left" style="margin-right: 5px"></i>
                Back to beverage list
            </a>
        </div>

        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <form method="POST" action="/wanboAdmin/beverages/{{ $beverage->id }}" class="mb-5"> 
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="beverage_name" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('beverage_name') is-invalid @enderror" id="beverage_name" name="beverage_name" autofocus value="{{ old('beverage_name', $beverage->beverage_name) }}">
                            @error('beverage_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <select name="type" class="custom-select">
                                @foreach ($types as $type)
                                    @if (old('type', $beverage->type) == $type)
                                        <option value="{{ $type }}" selected>{{ $type }}</option>
                                    @else
                                        <option value="{{ $type }}">{{ $type }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price <span class="text-danger">*</span></label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $beverage->price) }}">
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <div class="form-floating">
                                <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Insert beverage's description" name="description" id="description" >{{ old('description', $beverage->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Beverage</button>
                    </form>
                </div><!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
