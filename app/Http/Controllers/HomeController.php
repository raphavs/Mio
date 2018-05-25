<?php

namespace App\Http\Controllers;

use App\DoorsModel;
use App\MyUsersModel;
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
        $doors = DoorsModel::all();
        return view('mio_home')->with('doors', $doors);
    }

    public function invokeProfile()
    {
        return view('mio_profile');
    }

    public function invokeManageDoor($door)
    {
        return view('mio_manage_door', ['door' => $door]);
    }

    public function invokeSelectUser($door)
    {
        $my_users = MyUsersModel::all();
        return view('mio_select_user', ['door' => $door])->with('my_users', $my_users);
    }

    public function invokeRights($door, $user)
    {
        return view('mio_rights', ['door' => $door, 'user' => $user]);
    }

    public function invokeRightsExt($door, $user)
    {
        return view('mio_rights_ext', ['door' => $door, 'user' => $user]);
    }

}
