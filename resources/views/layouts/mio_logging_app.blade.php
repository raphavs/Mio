<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mio Welcome</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/mio_styles.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body class="logging-body">

<!-- Header -->
<header class="my-footer-bg my-fixed-position">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <h3 class="display-4 logging">
                @if (\Request::route()->getName() == 'register')
                    Register
                @elseif(\Request::route()->getName() == 'login.resetpw')
                    Reset your Password
                @elseif(\Request::route()->getName() == 'login')
                    Login
                @endif
                </h3>
            </div>
        </div>
    </div>
</header>

<div>
    @yield('content')
</div>

<!-- footer -->
<footer class="my-footer-bg putdown">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <div class="logo-home-footer-padding">
                    <a href="{{ route('mio.welcome') }}"><img src="/Image/Mio_Logo_cut.jpg" class="rounded" alt="Logo"></a>
                </div>
            </div>
            <div class="col-12">
                <hr class="my-hr-style">
                <h5 class="thisIsMio-padding">THIS IS MIO</h5>
            </div>
        </div>
    </div>
</footer>
</body>
</html>