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
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/Image_Pixabay/carousel1_500.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/Image_Pixabay/carousel2_500.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/Image_Pixabay/carousel3_500.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container-fluid">
    <!-- About-Section -->
    <section class="my-padding-welcome-section">
        <!-- Headline -->
        <h1 class="display-5">About Mio</h1>

        <div class="row justify-content-center">
            <hr class="col-8">
        </div>

        <!-- Two Column Section -->
        <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
            <div class="row">
                <div class="col-lg-6 my-about-padding">
                    <div class="my-put-things-in-vertically-and-horizontally-center text-center my-welcome-p-size">
                        <p>
                            Mio is an access control system that perfectly complements your smart home.
                            It allows you to manage your doors smart and easily with your smartphone, tablet or PC.
                            Mio is what modern home and modern living is all about today.
                        </p>
                        <p>
                            Register within a few minutes. Add your doors to your account and then
                            manage your doors by creating users for them and managing their rights.
                        </p>
                        <br>
                        <a class="btn btn-readmore" role="button" href="{{ route('welcome.info') }}">read more ...</a>
                    </div>
                </div>
                <div class="col-lg-6 my-about-padding">
                    <img src="/Image_Pixabay/User_an_Laptop_und_Smartphone.jpg" class="img-fluid rounded my-put-things-in-vertically-and-horizontally-center" alt="PictureOfUsers">
                </div>
            </div>
        </div>
    </section>

    <!-- User-Section -->
    <section class="my-padding-welcome-section">
        <!-- Headline -->
        <div class="container-fluid">
            <h1 class="display-5">User Groups</h1>
        </div>

        <div class="row justify-content-center">
            <hr class="col-8">
        </div>

        <!-- Three Column Section -->
        <div class="container-fluid">
            <div class="row text-center my-welcome-p-size">
                <div class="col-xs-12 col-sm-6 col-lg-4 my-user-padding">
                    <img src="/Image_Pixabay/user_icon.png" class="img-fluid rounded-circle user-img" alt="User">
                    <h3 class="my-welcome-h3-size">Clients</h3>
                    <p>... manage their doors.</p>
                    <p>They determine who of their users are allowed to open which door at which time.</p>
                    <p>Of course, they can open their doors and view the transactions.</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 my-user-padding">
                    <img src="/Image_Pixabay/user_icon.png" class="img-fluid rounded-circle user-img" alt="User">
                    <h3 class="my-welcome-h3-size">Users</h3>
                    <p>... open doors smart via smartphone, tablet or PC and view also the transactions.</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-4 my-user-padding">
                    <img src="/Image_Pixabay/user_icon.png" class="img-fluid rounded-circle user-img" alt="User">
                    <h3 class="my-welcome-h3-size">Manufacturers</h3>
                    <p>... register their devices. Thus, server and devices can communicate with each other.</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection