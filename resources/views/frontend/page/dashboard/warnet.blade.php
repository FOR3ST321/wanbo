@extends('frontend.partial.headerfooter')

@section('content')

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(/frontend/img/bg-img/hero-1.jpg)"></div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Listing Destinations Area Start ***** -->
    <section class="dorne-listing-destinations-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center" style="margin-bottom: 0">
                        <span></span>
                        <h4>Wanbo's Warnet(s)</h4>
                    </div>
                    <table class="table table-striped table-hover" style="margin-bottom: 100px">
                            <thead>
                            <tr>
                            <th scope="col" style="width:5%">#</th>
                            <th scope="col" style="width:20%">Store Name</th>
                            <th scope="col" style="width:65%">Address</th>
                            <th scope="col" style="width:10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($branches as $branch)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $branch->store_name }}</td>
                                    <td>{{ ucwords($branch->address) }}</td>
                                    <td>
                                        <form action="/wanbo/dashboard" method="get" class="d-inline">
                                            @csrf
                                            <button class="btn bg-primary border-0 formBtn" value="{{ $branch->id }}" name="id" style="cursor: pointer;color:white">
                                                <i class="fa fa-search pr-2" aria-hidden="true"></i> Discover
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            @empty ($branches[0]) 
                                <tr>
                                    <td colspan="4" style="text-align: center">No Data!</td>
                                </tr>
                            @endempty
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Listing Destinations Area End ***** -->
@endsection
