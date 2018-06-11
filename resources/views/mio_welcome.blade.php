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

<!-- About-Section -->
<section class="my-margin-welcome-section">
    <!-- Headline -->
    <div class="container-fluid text-center">
        <h1 class="display-5">About Mio</h1>
    </div>

    <div class="row justify-content-center">
        <hr class="col-8">
    </div>

    <!-- Two Column Section -->
    <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
        <div class="row">
            <div class="col-lg-6 my-about-padding">
                <div class="my-put-things-in-vertically-and-horizontally-center text-center">
                    <p class="my-welcome-p-size">Mio is an access control system that allows clients to manage their doors smart via smartphone, tablet or PC.
                        To do this, clients create users and determine which person is able to open which door at which time.
                        In addition, all opening transactions are recorded in a log, which clients and users can view at any time.</p>
                    <a id="my-readmore-btn" class="btn btn-readmore" role="button" href="{{ route('welcome.info') }}">read more ...</a>
                </div>
            </div>
            <div class="col-lg-6 my-about-padding">
                <img src="/Image_Pixabay/User_an_Laptop_und_Smartphone.jpg" class="img-fluid rounded my-put-things-in-vertically-and-horizontally-center" alt="PictureOfUsers">
            </div>
        </div>
    </div>
</section>

<!-- User-Section -->
<section class="my-margin-welcome-section">
    <!-- Headline -->
    <div class="container-fluid text-center">
        <h1 class="display-5">User Groups</h1>
    </div>

    <div class="row justify-content-center">
        <hr class="col-8">
    </div>

    <!-- Three Column Section -->
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-xs-12 col-sm-6 col-lg-4 my-user-padding">
                <img src="/Image_Pixabay/user_icon.png" class="img-fluid rounded-circle user-img" alt="User">
                <h3 class="my-welcome-h3-size">Clients</h3>
                <p class="col-xl-10 offset-xl-1 my-welcome-p-size">... manage their doors. They determine who of their users is allowed to open which door at which time.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 my-user-padding">
                <img src="/Image_Pixabay/user_icon.png" class="img-fluid rounded-circle user-img" alt="User">
                <h3 class="my-welcome-h3-size">Users</h3>
                <p class="col-xl-10 offset-xl-1 my-welcome-p-size">... open doors easily via smartphone, tablet or PC.</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-lg-4 my-user-padding">
                <img src="/Image_Pixabay/user_icon.png" class="img-fluid rounded-circle user-img" alt="User">
                <h3 class="my-welcome-h3-size">Manufacturers</h3>
                <p class="col-xl-10 offset-xl-1 my-welcome-p-size">... register their devices. Thus, server and devices can communicate with each other.</p>
            </div>
        </div>
    </div>
</section>
@endsection