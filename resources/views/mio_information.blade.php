@extends('layouts.mio_welcome_app')

@section('content')
<!-- Information about Mio -->
<div class="container-fluid">
    <section class="my-padding-welcome-section">
        <!-- Headline -->
        <h1 class="display-5">Information about Mio</h1>

        <div class="row justify-content-center">
            <hr class="col-8">
        </div>

        <!-- Two Column Section -->
        <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
            <div class="row">
                <div class="col-lg-6 my-about-padding">
                    <div class="my-put-things-in-vertically-and-horizontally-center text-center my-welcome-p-size">
                        <p>Mio is an access control system that allows clients to manage their doors smart via smartphone, tablet or PC.
                            To do this, clients create users and determine which person is able to open which door at which time.
                            In addition, all opening transactions are recorded in a log, which clients and users can view at any time.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 my-about-padding">
                    <img src="/Image_Pixabay/User_an_Laptop_und_Smartphone.jpg" class="img-fluid rounded my-put-things-in-vertically-and-horizontally-center" alt="PictureOfUsers">
                </div>
            </div>
            <div class="my-about-padding text-center my-welcome-p-size">
                <p>It is possible to manage more than one door. So you can be a client and have all rights about your home door, for example.
                    And also a user without any rights apart from open a door. This allows you to open the office door, for example.
                    With Mio you can easily handle both of them in only one account.
                </p>
                <p>Manufacturers also have their advantages with Mio.
                    You have to sign up and can offer your hardware on Mio Webshop.
                    The only requirement is that it is compatible with our software.
                </p>
                <p>If you are interested in buying this hardware we offer to come to you and install it to your door.<br>
                    You have problems and something doesn't work?
                    Call us and we help as soon as possible.
                </p>
                <p><b>With Mio you choose quality, service and support.</b></p>
            </div>
        </div>
    </section>
</div>
@endsection