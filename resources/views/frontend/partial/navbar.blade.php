<!-- ***** Header Area Start ***** -->
<header class="header_area" id="header">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 h-100">
                <nav class="h-100 navbar navbar-expand-lg">
                    <a class="navbar-brand" href="/wanbo" style="width: 200px"><img src="/img/logoWanbo2.png" alt="" style="height: 100%"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                    <!-- Nav -->
                    <div class="collapse navbar-collapse" id="dorneNav">
                        <ul class="navbar-nav mr-auto" id="dorneMenu">
                            @auth
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Warnet</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Reserve</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">My Booking</a>
                                </li>
                            @endauth
                        </ul>
                        <!-- Add listings btn -->
                        @auth
                            <div class="dorne-add-listings-btn">
                                <a href="/wanbo/profile" class="btn dorne-btn">Hello, {{auth()->user()->username}}</a>
                            </div>
                        @else
                            @if (Route::is('login_admin'))
                                <div class="dorne-add-listings-btn">
                                    <a href="/wanbo/login" class="btn dorne-btn">Sign in or Register as User</a>
                                </div>
                            @endif
                            @if (Route::is('login_user'))
                                <div class="dorne-add-listings-btn">
                                    <a href="/wanboAdmin/login" class="btn dorne-btn">Sign in as Admin</a>
                                </div>
                            @endif
                            @if (Route::is('dashboard'))
                                <div class="dorne-add-listings-btn">
                                    <a href="/wanbo/login" class="btn dorne-btn">Sign in or Register</a>
                                </div>
                            @endif
                        @endauth
                        
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->