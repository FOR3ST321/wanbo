@extends('admin.partial.headerfooter')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </symbol>
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
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
            @if (session()->has('fail'))
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 mr-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        {{ session('fail') }}
                    </div>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="class-header">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning ml-2 mt-3" data-toggle="modal" data-target="#staticBackdrop">
                        Update Profile
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Insert Password</h5>
                                    {{-- <button type="button" class="close-black" data-dismiss="modal" aria-label="Close"></button> --}}
                                </div>
                                <form action="/wanboAdmin/account/{{ $account->id }}/edit" method="post">
                                    @csrf
                                    <div class="modal-body">
                                            <input type="password" name="password" id="password" class="form-control" autofocus>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <table class="table table-striped table-sm mt-3">
                        {{-- <thead>
                            <tr>
                            <th scope="col">Attributes</th>
                            <th scope="col">Value</th>
                            </tr>
                        </thead> --}}
                        <tbody>
                            <tr>
                                <td>Username</td>
                                <td>{{ $account->username }}</td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>************</td>
                            </tr>
                            <tr>
                                <td>Associated Branch</td>
                                <td>
                                    <table>
                                    @foreach ($store_branches as $branch)
                                        @if ($branch->account_id == $account->id)
                                            <tr>
                                                <td>{{ $branch->store_name }}</td>
                                                <td>
                                                    <a href="/wanboAdmin/store_branch/{{ $branch->id }}/edit" class="badge bg-info"><i class="fas fa-eye"></i></a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </table>
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
