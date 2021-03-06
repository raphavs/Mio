@extends('layouts.mio_welcome_app')

@section('content')
<div class="container-fluid">
    <div class="my-padding-welcome-section">
        <!-- Headline -->
        <h1 class="display-5">Features</h1>

        <div class="row justify-content-center">
            <hr class="col-8">
        </div>

        <!-- Two Column Section Doors-->
        <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
            <div class="row my-welcome-p-size">
                <div class="col-lg-7 col-md-6 col-12 my-about-padding">
                    <div class="my-put-things-in-vertically-and-horizontally-center text-center">
                        <p>In this overview you can see all available doors of your account, no matter if you are a user or
                            a client. If you choose on of the doors you go to the menu.</p>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-4 col-md-6 col-12 my-about-padding">
                    <img src="/PictureFeature/Doors.jpg" class="img-fluid rounded my-put-things-in-vertically-and-horizontally-center" alt="PictureOfDoors">
                </div>
            </div>
        </div>
        <hr>
        <!-- Two Column Section Doors-->
        <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
            <div class="row my-welcome-p-size">
                <div class="col-lg-7 col-md-6 col-12 my-about-padding">
                    <div class="my-put-things-in-vertically-and-horizontally-center text-center">
                        <p>As a client you have the possibility to add doors to your account. Just enter the door name and
                            the ID of your device. After that click on the Button "Add door".</p>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-4 col-md-6 col-12 my-about-padding">
                    <img src="/PictureFeature/Add_Door.jpg" class="img-fluid rounded my-put-things-in-vertically-and-horizontally-center" alt="PictureOfAddDoors">
                </div>
            </div>
        </div>
        <hr>
        <!-- Two Column Section menu -->
        <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
            <div class="row my-welcome-p-size">
                <div class="col-lg-7 col-md-6 col-12 my-about-padding">
                    <div class="my-put-things-in-vertically-and-horizontally-center text-center">
                        <p>In this menu you can open your door, manage rights for users, add users or see the transactions
                            in a protocol. Indeed you can't click the buttons "Manage Rights" and "Add User" if you are a user and not a client.
                            At the top you see the chosen door.</p>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-4 col-md-6 col-12 my-about-padding">
                    <img src="/PictureFeature/Manage_Door.jpg" class="img-fluid rounded my-put-things-in-vertically-and-horizontally-center" alt="PictureOfMenu">
                </div>
            </div>
        </div>
        <hr>
        <!-- Two Column Section protocol -->
        <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
            <div class="row my-welcome-p-size">
                <div class="col-lg-7 col-md-6 col-12 my-about-padding">
                    <div class="my-put-things-in-vertically-and-horizontally-center text-center">
                        <p>If you choose "See Transactions" you get a view about who opened the door at which time.
                            You can also search for a user or a date. If you don't have the protocol right you can see your entries only.</p>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-4 col-md-6 col-12 my-about-padding">
                    <img src="/PictureFeature/Transactions.jpg" class="img-fluid rounded my-put-things-in-vertically-and-horizontally-center" alt="PictureOfProtocol">
                </div>
            </div>
        </div>
        <hr>
        <!-- Two Column Section AccessRight -->
        <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
            <div class="row my-welcome-p-size">
                <div class="col-lg-7 col-md-6 col-12 my-about-padding">
                    <div class="my-put-things-in-vertically-and-horizontally-center text-center">
                        <p>If you choose "Add User" you can add a user to the chosen door. Generally the new user gets all rights.</p>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-4 col-md-6 col-12 my-about-padding">
                    <img src="/PictureFeature/Add_User.jpg" class="img-fluid rounded my-put-things-in-vertically-and-horizontally-center" alt="PictureOfAddUser">
                </div>
            </div>
        </div>
        <hr>
        <!-- Two Column Section user -->
        <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
            <div class="row my-welcome-p-size">
                <div class="col-lg-7 col-md-6 col-12 my-about-padding">
                    <div class="my-put-things-in-vertically-and-horizontally-center text-center">
                        <p>If you choose "Manage Rights" you get an overwiew about all users who have access to this door.
                            Then you can select one.</p>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-4 col-md-6 col-12 my-about-padding">
                    <img src="/PictureFeature/Select_User.jpg" class="img-fluid rounded my-put-things-in-vertically-and-horizontally-center" alt="PictureOfUsers">
                </div>
            </div>
        </div>
        <hr>
        <!-- Two Column Section rights-->
        <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
            <div class="row my-welcome-p-size">
                <div class="col-lg-7 col-md-6 col-12 my-about-padding">
                    <div class="my-put-things-in-vertically-and-horizontally-center text-center">
                        <p>Here you can make settings whether your user should get the access right and the protocol right or not.</p>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-4 col-md-6 col-12 my-about-padding">
                    <img src="/PictureFeature/Rights.jpg" class="img-fluid rounded my-put-things-in-vertically-and-horizontally-center" alt="PictureOfRight">
                </div>
            </div>
        </div>
        <hr>
        <!-- Two Column Section AccessRight -->
        <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
            <div class="row my-welcome-p-size">
                <div class="col-lg-7 col-md-6 col-12 my-about-padding">
                    <div class="my-put-things-in-vertically-and-horizontally-center text-center">
                        <p>If you give the user the access right you can pick the days and the time you give him access.</p>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-4 col-md-6 col-12 my-about-padding">
                    <img src="/PictureFeature/Rights_Ext.jpg" class="img-fluid rounded my-put-things-in-vertically-and-horizontally-center" alt="PictureOfAccessRight">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection