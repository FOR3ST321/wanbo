@extends('frontend.partial.headerfooter')

@section('content')

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(/frontend/img/bg-img/hero-1.jpg)"></div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Listing Destinations Area Start ***** -->
    <section class="dorne-listing-destinations-area section-padding-100-50">
        <div class="container">
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
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="z-index: 10000">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Insert Password to Continue</h5>
                            {{-- <button type="button" class="close-black" data-dismiss="modal" aria-label="Close"></button> --}}
                        </div>
                        <form action="/wanbo/accounts/{{ $user[0]->account_id }}/edit" method="post">
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
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center" style="margin-bottom: 0">
                        <span></span>
                        <h4>User Profile</h4>
                    </div>
                    {{-- {{ dd($user) }} --}}
                    <table class="table mt-2">
                        <tbody>
                            <tr>
                                <th scope="row">Username</th>
                                <td>{{ $user[0]->username }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Password</th>
                                <td>************ &ensp; <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#staticBackdrop">change</button></td>
                            </tr>
                            <tr>
                                <th scope="row">Name</th>
                                <td>{{ $user[0]->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>{{ $user[0]->email }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Membership</th>
                                <td>{{ $user[0]->membership_type }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/wanbo/users/{{ $user[0]->id }}/edit" class="btn btn-warning">Edit profile</a>
                                </td>
                                <td>
                                    <a href="/wanbo/logout" class="btn btn-danger" style="float:right">Logout</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Listing Destinations Area End ***** -->
@endsection
