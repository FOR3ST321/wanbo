@extends('admin.partial.headerfooter')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Branch</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <a href="/wanboAdmin/account/{{ $store_branch->account_id }}" class="btn btn-primary">Back to profile</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="/wanboAdmin/store_branch/{{ $store_branch->id }}" class="mb-5"> 
                        @csrf
                        <div class="mb-3">
                            <label for="store_name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('store_name') is-invalid @enderror" id="store_name" name="store_name" value="{{ old('store_name',$store_branch->store_name) }}">
                            @error('store_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <div class="form-floating">
                                <textarea class="form-control @error('address') is-invalid @enderror" placeholder="Insert store branch's address" name="address" id="address" >{{ old('address',$store_branch->address) }}</textarea>
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" name="account_id" value={{ auth()->user()->id }}>
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </form>
                </div><!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
