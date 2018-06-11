<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />

    <title>Mio Welcome</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/mio_styles.css">

    <script>
        $(function() {
            var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
            var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
            $("html").css({"width":w,"height":h});
            $("body").css({"width":w,"height":h});
        });
    </script>
</head>
<body class="logging-body">

<!-- Header -->
<header class="my-logging-header-style my-fixed-position">
    <div class="container-fluid">
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