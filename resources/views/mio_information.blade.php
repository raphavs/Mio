@extends('layouts.mio_welcome_app')

@section('content')
    <br>
    <br>
    <br>

    <h1 class="display-1 text-center">Information</h1>

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
                    <div class="col-md-12 col-lg-6 my-about-padding">
                        <p>Mio is an access control system that allows clients to manage their doors smart via smartphone, tablet or PC.
                            To do this, clients create users and determine which person is able to open which door at which time.
                            In addition, all opening transactions are recorded in a log, which clients and users can view at any time.</p>
                        <a id="my-readmore-btn" class="btn btn-readmore" role="button">read more ...</a>
                    </div>
                    <div class="col-md-12 col-lg-6 my-about-padding">
                        <img src="/Image/Smartphone_Laptop.jpg" class="img-fluid rounded" alt="PictureOfUser">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>
    <br>
    <br>
@endsection