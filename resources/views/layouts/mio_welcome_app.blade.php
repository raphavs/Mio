<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="3wpuyun9QgG9ijXoQjdUWpycM3XJidpvTqI8qTgOePQ"/>
    <meta name="description" content="Mio - Manage your doors smart. Mio is an access control system that allows modern living and modern home."/>

    <title>Mio - Manage your doors smart.</title>

    <!-- Mio CSS & Bootstrap CSS -->
    <link rel="stylesheet" href="/css/mixOfMioAndBootstrap.css">

    <!-- Social Media Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-xl my-navbar-font my-navbar-bg my-sticky-top">
    <a href="{{ route('mio.welcome') }}">
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
                <a class="nav-link {{ (\Request::route()->getName() == 'welcome.contact') ? 'active-site' : '' }}"
                   href="{{ route('welcome.contact') }}">Contact</a>
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
    <h3 class="my-header-style">Manage your doors smart.</h3>
</header>

<main>
    @yield('content')
</main>

<!-- footer -->
<footer class="my-footer-bg">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-lg-4">
                <div class="my-put-things-in-vertically-and-horizontally-center my-footer-padding">
                    <img src="/Image/Mio_Logo.jpg" class="rounded my-logo-size" alt="Logo">
                </div>
            </div>
            <div class="col-lg-4">
                <h5 class="my-footer-header">Information</h5>
                <hr class="my-hr-style col-6">
                <div class="my-footer-paragraph-margin offset-1 col-10">
                    <a class="my-welcome-a-link" href="/information"><p class="my-welcome-p-link">Information about Mio</p></a>
                    <a class="my-welcome-a-link" href="/contact"><p class="my-welcome-p-link">Imprint</p></a>
                    <a class="my-welcome-a-link" href="/contact#mio-data-privacy"><p class="my-welcome-p-link">Data Privacy Statement</p></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="my-put-things-in-vertically-and-horizontally-center my-footer-padding">
                    <a href="https://github.com/" class="fa fa-github fa-2x" target="_blank"></a>
                    <!-- <a href="#" class="fa fa-xing fa-2x"></a> -->
                    <a href="https://twitter.com/" class="fa fa-twitter fa-2x" target="_blank"></a>
                    <!-- <a href="https://de.linkedin.com/" class="fa fa-linkedin fa-2x" target="_blank"></a> -->
                    <a href="https://www.instagram.com/" class="fa fa-instagram fa-2x" target="_blank"></a>
                    <!-- <a href="#" class="fa fa-facebook fa-2x"></a> -->
                    <a href="https://www.snapchat.com/l/de-de/" class="fa fa-snapchat fa-2x" target="_blank"></a>
                    <a href="https://www.google.de/" class="fa fa-google fa-2x" target="_blank"></a>
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