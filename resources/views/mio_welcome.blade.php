@extends('layouts.mio_welcome_app')

@section('content')
<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/Image_Pixabay/carousel1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/Image_Pixabay/carousel2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/Image_Pixabay/carousel3.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<br>
<br>
<br>

<!-- About-Section -->
<section>
    <!-- Headline -->
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="display-5">About Mio</h1>
            </div>
        </div>
    </div>

    <hr class="col-8 offset-2">

    <!-- Two Column Section -->
    <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-md-12 col-lg-7 my-about-padding">
                    <div class="my-put-things-in-vertically-and-horizontally-center">
                        <p>Mio is an access control system that allows clients to manage their doors smart via smartphone, tablet or PC.
                            To do this, clients create users and determine which person is able to open which door at which time.
                            In addition, all opening transactions are recorded in a log, which clients and users can view at any time.</p>
                        <a id="my-readmore-btn" class="btn btn-readmore" role="button" href="{{ route('welcome.features') }}">read more ...</a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5 my-about-padding">
                    <img src="/Image_Pixabay/User_an_Laptop_und_Smartphone.jpg" class="img-fluid rounded my-put-things-in-vertically-and-horizontally-center" alt="PictureOfUsers">
                </div>
            </div>
        </div>
    </div>
</section>

<br>
<br>
<br>

<!-- User-Section -->
<section>
    <!-- Headline -->
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="display-5">User Groups</h1>
            </div>
            <hr>
        </div>
    </div>

    <hr class="col-8 offset-2">

    <!-- Three Column Section -->
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-xs-12 col-sm-6 col-md-4 my-user-padding">
                <img src="/Image_Pixabay/user_icon.png" class="img- my-make-img-round padding-user-img" alt="User">
                <h3 class="font-weight-bold">Clients</h3>
                <p>... manage their doors. They determine who of their users is allowed to open which door at which time.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 my-user-padding">
                <img src="/Image_Pixabay/user_icon.png" class="img-fluid my-make-img-round padding-user-img" alt="User">
                <h3 class="font-weight-bold">Users</h3>
                <p>... open doors easily via smartphone, tablet or PC.</p>
            </div>
            <div class="col-xs-12 col-md-4 my-user-padding">
                <img src="/Image_Pixabay/user_icon.png" class="img-fluid my-make-img-round padding-user-img" alt="User">
                <h3 class="font-weight-bold">Manufacturers</h3>
                <p>... register their devices. Thus, server and devices can communicate with each other.</p>
            </div>
        </div>
    </div>
</section>
@endsection