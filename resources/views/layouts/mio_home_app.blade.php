<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mio Home</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/myStyles.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg my-navbar-font my-navbar-bg sticky-top">
    <a class="navbar-brand" href="{{ route('mio_home') }}">
        <img src="/Image/Mio_Logo_cut.jpg" class="rounded" alt="Logo">
    </a>
    <button class="navbar-toggler navbar-dark" type="button"
            data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (\Request::route()->getName() == 'mio_home') ? 'active-site' : '' }}"
                   href="{{ route('mio_home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (\Request::route()->getName() == 'home_profile') ? 'active-site' : '' }}"
                   href="{{ route('home_profile') }}">My Profile</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-create-account" role="button" href="{{ route('mio_welcome') }}">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<div>
    @yield('content')
</div>

<!-- footer -->
<footer class="my-footer-bg">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <div class="logo-footer-padding">
                    <img src="/Image/Mio_Logo_cut.jpg" class="rounded" alt="Logo">
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