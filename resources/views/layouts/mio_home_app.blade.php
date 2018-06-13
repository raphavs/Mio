<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mio Home</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/mio_styles.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<div class="my-fixed-position">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md my-navbar-font my-navbar-bg">
        <a href="{{ route('mio.home') }}">
            <img src="/Image/Mio_Logo_NavBar.jpg" class="rounded my-logo-size" alt="Logo">
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
                    <a class="nav-link {{ (\Request::route()->getName() == 'mio.home') ? 'active-site' : '' }}"
                       href="{{ route('mio.home') }}">My Doors</a>
                </li>
                <li class="nav-item my-li-btn-margin">
                    <a class="btn btn-logging my-li-btn-center" role="button" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Username -->
    <header>
        <div class="text-center">
            <h3 id="my-user-header-style">{{ Auth::user()->name }}</h3>
        </div>
    </header>
</div>

<main>
    @yield('content')
</main>

<!-- footer -->
<footer class="my-footer-bg putdown d-none d-xl-block">
    <div class="container-fluid text-center">
        <h5 class="thisIsMio-padding-home">THIS IS MIO</h5>
        <hr class="my-hr-style">
    </div>
</footer>
</body>
</html>