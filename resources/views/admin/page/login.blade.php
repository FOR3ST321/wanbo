<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
    <!-- Favicon -->
    <link rel="icon" href="/frontend/img/core-img/favicon1.png">
    <!-- Core Stylesheet -->
    <link href="/frontend/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="/frontend/css/responsive/responsive.css" rel="stylesheet">
    @include('sweetalert::alert')
</head>

<body class="hold-transition login-page" style="background-image: url(https://media.gettyimages.com/photos/interior-of-la-bastille-internet-cafe-amsterdam-picture-idAA028564?k=20&m=AA028564&s=612x612&w=0&h=4cLUXImRnW0xR47HKekzB0Vlg1sGXD4VQPXuxSqrwyE=); background-size:cover">
    @include('frontend.partial.navbar')

    <div class="login-box" style="margin: 300px 0 200px 0">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="" class="h1"><b>Wanbo</b> Admin</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="/wanboAdmin/auth" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input name="username" type="username"
                            class="form-control @error('username') is-invalid @enderror" placeholder="Username"
                            value="{{ old('username') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>

                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>


                    <div class="container">
                        @error('password')
                            {{ $message }}
                            <br>
                        @enderror

                        @error('username')
                            {{ $message }}
                            <br><br>
                        @enderror

                        @if (session()->has('loginError'))
                            <p class="text-danger">Wrong Username / Password</p>
                        @endif
                    </div>

                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    

    <!-- jQuery-2.2.4 js -->
    <script src="/frontend/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/frontend/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="/frontend/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="/frontend/js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="/frontend/js/active.js"></script>

    <!-- jQuery -->
    <script src="/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/admin/dist/js/adminlte.min.js"></script>
</body>

</html>
