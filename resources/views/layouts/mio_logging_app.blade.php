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
</head>
<body class="logging-body">

<!-- Header -->
<header class="my-logging-header-style my-fixed-position">
    <div class="container-fluid text-center">
        <h3 class="display-5 logging">
            @if (\Request::route()->getName() == 'register')
                Register
            @elseif(\Request::route()->getName() == 'login.resetpw')
                Reset your Password
            @elseif(\Request::route()->getName() == 'login')
                Sign in
            @endif
        </h3>
    </div>
</header>

<main>
    @yield('content')
</main>

<!-- footer -->
<footer class="my-footer-bg putdown d-none d-xl-block">
    <div class="container-fluid text-center">
        <div class="logo-home-footer-padding">
            <a href="{{ route('mio.welcome') }}"><img src="/Image/Mio_Logo.jpg" class="rounded" alt="Logo"></a>
        </div>
        <hr class="my-hr-style">
        <h5 class="thisIsMio-style">THIS IS MIO</h5>
    </div>
</footer>
</body>
</html>