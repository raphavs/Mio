@extends('layouts.mio_welcome_app')
@section('content')
    <!-- Headline -->
    <br>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="display-5">Features</h1>
            </div>
        </div>
    </div>

    <hr class="col-8 offset-2">

    <!-- Two Column Section Doors-->
    <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 my-about-padding">
                    <div class="my-put-things-in-vertically-and-horizontally-center text-center">
                        <p>In this overview you can see all available doors, no matter whether you are user or client. If you choose
                        on of the doors you go to the menu.</p>
                    </div>
                </div>
                <div class="col-lg-6 my-about-padding">
                    <img src="/BilderfuerFeature/Doors.jpg" class="img-fluid rounded my-put-things-in-vertically-and-horizontally-center" alt="PictureOfDoors">
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- Two Column Section menu -->
    <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 my-about-padding">
                    <div class="my-put-things-in-vertically-and-horizontally-center text-center">
                        <p>In menu you can open your door, manage rights for users or see the transactions in a protocol.</p>
                    </div>
                </div>
                <div class="col-lg-6 my-about-padding">
                    <img src="/BilderfuerFeature/Menu.jpg" class="img-fluid rounded my-put-things-in-vertically-and-horizontally-center" alt="PictureOfMenu">
                </div>
            </div>
        </div>
    </div>

    <hr>

    <!-- Two Column Section protocol -->
    <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 my-about-padding">
                    <div class="my-put-things-in-vertically-and-horizontally-center text-center">
                        <p>If you choose "see Transactions" you get a view about who opened the door at which time.
                        You can also search for an user or a date.</p>
                    </div>
                </div>
                <div class="col-lg-6 my-about-padding">
                    <img src="/BilderfuerFeature/Protocol.jpg" class="img-fluid rounded my-put-things-in-vertically-and-horizontally-center" alt="PictureOfProtocol">
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- Two Column Section user -->
    <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 my-about-padding">
                    <div class="my-put-things-in-vertically-and-horizontally-center text-center">
                        <p>If you choose "manage Rights" you get an overwiew about all users who have access to this door.
                        Then you can select one or add a new user.</p>
                    </div>
                </div>
                <div class="col-lg-6 my-about-padding">
                    <img src="/BilderfuerFeature/Benutzer.jpg" class="img-fluid rounded my-put-things-in-vertically-and-horizontally-center" alt="PictureOfUsers">
                </div>
            </div>
        </div>
    </div>

    <hr>
    <!-- Two Column Section rights-->
    <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 my-about-padding">
                    <div class="my-put-things-in-vertically-and-horizontally-center text-center">
                        <p>Here you can add whether your user get the Access Right and the right to see the whole protocol or not.</p>
                    </div>
                </div>
                <div class="col-lg-6 my-about-padding">
                    <img src="/BilderfuerFeature/Rights.jpg" class="img-fluid rounded my-put-things-in-vertically-and-horizontally-center" alt="PictureOfRight">
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- Two Column Section AccessRight -->
    <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 my-about-padding">
                    <div class="my-put-things-in-vertically-and-horizontally-center text-center">
                        <p>If you give the user the Access Right you can pick the days you give him access and the time.</p>
                    </div>
                </div>
                <div class="col-lg-6 my-about-padding">
                    <img src="/BilderfuerFeature/Rechte.jpg" class="img-fluid rounded my-put-things-in-vertically-and-horizontally-center" alt="PictureOfAccessRight">
                </div>
            </div>
        </div>
    </div>

    @stop