<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Wanbo</title>

    <!-- Favicon -->
    <link rel="icon" href="/frontend/img/core-img/favicon1.png">

    <!-- Core Stylesheet -->
    <link href="/frontend/style.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">

    <!-- Responsive CSS -->
    <link href="/frontend/css/responsive/responsive.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .dorne-welcome-area {
            background-image: url(https://media.gettyimages.com/photos/interior-of-la-bastille-internet-cafe-amsterdam-picture-idAA028564?k=20&m=AA028564&s=612x612&w=0&h=4cLUXImRnW0xR47HKekzB0Vlg1sGXD4VQPXuxSqrwyE=);
            height: 500px;
        }

        @media screen and (max-width: 480px) {
            .dorne-welcome-area {
                height: 300px;
                padding-top: 100px;
                margin-bottom: 75px;
            }

            .dorne-catagory-area {
                display: none;
            }
        }

    </style>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

    @include('frontend.partial.navbar')
    @include('sweetalert::alert')

    <div class="content-wrapper">
        @yield('content')
    </div>

    <!-- ****** Footer Area Start ****** -->
    <footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->

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

    <script>
        // let header = document.getElementsByClassName('breadcumb-area');
        // header[0].style.backgroundImage = "url(https://media.gettyimages.com/photos/interior-of-la-bastille-internet-cafe-amsterdam-picture-idAA028564?k=20&m=AA028564&s=612x612&w=0&h=4cLUXImRnW0xR47HKekzB0Vlg1sGXD4VQPXuxSqrwyE=)";
        // header[0].style.backgroundPosition = 'top';

        $('.dorne-btn').css({
            paddingTop: '10px'
        })

        $('button').css({
            paddingTop: '0'
        })
        
    </script>

    @if (isset($js))
        <script src="{{$js}}"></script>
    @endif
</body>

</html>
