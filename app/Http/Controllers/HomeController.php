<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function invokeHome()
    {
        return view('mio_home');
    }

    public function invokeProfile()
    {
        return view('mio_profile');
    }

    public function invokeManageDoor(Request $request, $door)
    {
        return view('mio_manage_door', ['door' => $door]);
    }

    public function invokeSelectUser(Request $request, $door)
    {
        return view('mio_select_user', ['door' => $door]);
    }

    public function invokeRights(Request $request, $door, $user)
    {
        return view('mio_rights', ['door' => $door, 'user' => $user]);
    }

}
