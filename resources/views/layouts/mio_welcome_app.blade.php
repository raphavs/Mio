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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-xl my-navbar-font my-navbar-bg sticky-top">
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
                <a class="nav-link {{ (\Request::route()->getName() == 'mio.welcome') ? 'active-site' : '' }}"
                   href="{{ route('mio.welcome') }}">Welcome to Mio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (\Request::route()->getName() == 'welcome.features') ? 'active-site' : '' }}"
                   href="{{ route('welcome.features') }}">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (\Request::route()->getName() == 'welcome.info') ? 'active-site' : '' }}"
                   href="{{ route('welcome.info') }}">Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (\Request::route()->getName() == 'welcome.people') ? 'active-site' : '' }}"
                   href="{{ route('welcome.people') }}">People</a>
            </li>
            <li class="nav-item my-li-btn-margin">
                <a class="btn btn-logging my-li-btn-center" role="button" href="{{ route('login') }}">Sign in</a>
            </li>
            <li class="nav-item my-li-btn-margin">
                <a class="btn btn-logging my-li-btn-center" role="button" href="{{ route('register') }}">Create Account</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Slogan -->
<header>
    <div class="text-center">
        <h3 class="my-header-style">Manage your doors smart.</h3>
    </div>
</header>

<main>
    @yield('content')
</main>

<!-- footer -->
<footer class="my-footer-bg">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-lg-4">
                <hr class="my-hr-style">
                <h5 class="my-footer-header">Contact</h5>
                <hr class="my-hr-style">
                <div class="my-footer-paragraph-margin">
                    <p>$$ phone number $$</p>
                    <p>$$ email $$</p>
                    <p>$$ address $$</p>
                    <p>$$ city $$</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="logo-footer-padding">
                    <img src="/Image/Mio_Logo.jpg" class="rounded my-logo-size" alt="Logo">
                </div>
                <div class="my-footer-paragraph-margin">
                    <p>Privacy Policy</p>
                    <p>Feedback</p>
                </div>
                <div class="icons-in-center text-center">
                    <a href="#" class="fa fa-github fa-2x"></a>
                    <a href="#" class="fa fa-xing fa-2x"></a>
                    <a href="#" class="fa fa-linkedin fa-2x"></a>
                    <a href="#" class="fa fa-instagram fa-2x"></a>
                    <a href="#" class="fa fa-facebook fa-2x"></a>
                    <a href="#" class="fa fa-twitter fa-2x"></a>
                    <a href="#" class="fa fa-snapchat fa-2x"></a>
                </div>
            </div>
            <div class="col-lg-4">
                <hr class="my-hr-style">
                <h5 class="my-footer-header">Information</h5>
                <hr class="my-hr-style">
                <div class="my-footer-paragraph-margin">
                    <p>Charge</p>
                    <p>Devices</p>
                    <p>Security</p>
                    <p>Terms of Use</p>
                </div>
            </div>
        </div>
        <div class="text-center">
            <hr class="my-hr-style">
            <h5 class="thisIsMio-style">THIS IS MIO</h5>
        </div>
    </div>
</footer>
</body>
</html>