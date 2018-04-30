<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mio</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../public/css/bootstrap.css">
    <link rel="stylesheet" href="../../../public/css/myStyles.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg my-navbar-font my-navbar-bg sticky-top">
    <a class="navbar-brand" href="#">
        <img src="../../assets/Image/Mio_Logo_cut.jpg" class="rounded" alt="Logo">
    </a>
    <button class="navbar-toggler navbar-dark" type="button"
            data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link active-site" href="#">Mio Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">People</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Information</a>
            </li>
            <li class="nav-item">
                <button class="btn btn-outline-login" type="button">Login</button>
            </li>
            <li class="nav-item">
                <button class="btn btn-create-account" type="button">Create Account</button>
            </li>
        </ul>
    </div>
</nav>

<!-- Slogan -->
<header>
    <div class="text-center">
        <div class="my-header-style">
            <h3>Manage your doors smart.</h3>
        </div>
    </div>
</header>

<br>
<br>
<br>

<main class="py-4">
    @yield('content')
</main>

<br>
<br>
<br>

<!-- footer -->
<footer class="my-footer-bg">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-4">
                <hr class="my-hr-style">
                <h5>Contact</h5>
                <hr class="my-hr-style">
                <p>+49 123 - 987654321</p>
                <p>mio@htwg-konstanz.de</p>
                <p>Alfred-Wachtel Straße 1</p>
                <p>78462 Constance, Germany</p>
            </div>
            <div class="col-md-4">
                <div>
                    <hr class="my-hr-style">
                    <img src="../../../resources/assets/Image/Mio_Logo_cut.jpg" class="rounded" alt="Logo">
                    <hr class="my-hr-style">
                </div>
                <br>
                <div>
                    <p>Privacy Policy</p>
                    <p>Feedback</p>
                </div>
            </div>
            <div class="col-md-4">
                <hr class="my-hr-style">
                <h5>Information</h5>
                <hr class="my-hr-style">
                <p>Charge</p>
                <p>Devices</p>
                <p>Security</p>
                <p>Terms of Use</p>
            </div>
            <div class="col-12">
                <hr class="my-hr-style">
                <h5>&copy; mio.de</h5>
            </div>
        </div>
    </div>
</footer>

</body>
</html>