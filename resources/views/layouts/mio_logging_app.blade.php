<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">

    <title>Mio
        @if (\Request::route()->getName() == 'register')
            Register
        @else
            Sign in
        @endif
    </title>

    <!-- Mio CSS & Bootstrap CSS -->
    <link rel="stylesheet" href="/css/mixOfMioAndBootstrap.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body class="logging-body">

<!-- Header -->
<header class="my-logging-header-style my-fixed-position">
    <h3 class="logging-header">
        @if (\Request::route()->getName() == 'register')
            Register
        @elseif(\Request::route()->getName() == 'login.resetpw')
            Reset your Password
        @elseif(\Request::route()->getName() == 'login')
            Sign in
        @endif
    </h3>
</header>

<main>
    @yield('content')
</main>

<!-- footer -->
<footer class="my-footer-bg putdown d-none d-xl-block">
    <div class="container-fluid text-center">
        <div class="logo-home-footer-padding">
            <a href="{{ route('mio.welcome') }}"><img src="/Image/Mio_Logo.jpg" class="rounded my-logo-size" alt="Logo"></a>
        </div>
        <hr class="my-hr-style">
        <h5 class="thisIsMio-style">THIS IS MIO</h5>
    </div>
</footer>

</body>
</html>