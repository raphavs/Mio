<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rapha
 * Date: 03.05.2018
 * Time: 17:49
 */

namespace App\Http\Controllers;


class WelcomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function invokeWelcome()
    {
        return view('mio_welcome');
    }

    public function invokeFeatures()
    {
        return view('mio_features');
    }

    public function invokeInformation()
    {
        return view('mio_information');
    }

    public function invokeContact()
    {
        return view('mio_contact_and_data_privacy');
    }

    public function invokeLogin()
    {
        return view('mio_login');
    }

    public function invokeRegister()
    {
        return view('mio_register');
    }

    public function invokeMail()
    {
        return view('mio_email');
    }

}