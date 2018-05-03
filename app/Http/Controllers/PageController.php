<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rapha
 * Date: 03.05.2018
 * Time: 17:49
 */

namespace App\Http\Controllers;


class PageController
{

    public function invokeWelcome(){
        return view('mio_welcome');
    }

    public function invokeInformation(){
        return view('mio_information');
    }

    public function invokePeople(){
        return view('mio_people');
    }

    public function invokeFeatures(){
        return view('mio_features');
    }

    public function invokeHome(){
        return view('mio_home');
    }

}