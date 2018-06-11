

@extends('layouts.mio_welcome_app')
@section('content')
    <!-- Headline -->
    <br>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <img src="Image_Pixabay/user_icon.png" class="img-fluid rounded-circle padding-user-img" alt="Client">
                <h1 class="display-5">Client</h1>
            </div>
            <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
            <p> Clients have to sign in and from then on they can act like administrators.
                They have the right to see the protocol, so which user has open the door at which time.
                Obviously they are possible to open the door and they can give rights to their chosen users.
            </p>
            </div>
        </div>

    </div>

    <hr class="col-8 offset-2">

    <!-- Headline -->
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <img src="Image_Pixabay/user_icon.png" class="img-fluid rounded-circle padding-user-img" alt="User">
                <h1 class="display-5">User</h1>
            </div>
            <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
            <p>Users do not have an administrator account like clients.
                They are chosen from clients and picked up to open doors.
                It is possible to see the protocol but only for themselves. They can't see the transaction of the other users or of the client.
                But the client can give the right to see the whole protocol.</p>
            </div>
        </div>
    </div>

    <hr class="col-8 offset-2">

    <!-- Headline -->
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <img src="Image_Pixabay/user_icon.png" class="img-fluid rounded-circle padding-user-img" alt="Manufacturer">
                <h1 class="display-5">Manufacturer</h1>
            </div>
            <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
            <p>Manufacturer have their own special account. They can sign in their hardware if it is compatible with our software.
                In the webshop people can look and buy. If someone is interested in your hardware, you get a message and we do the contract.</p>
            </div>
        </div>
    </div>

    <!-- User-Section -->
    <br>

@stop


