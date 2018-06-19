<?php

namespace App\Http\Controllers;

use App\DoorsModel;
use App\RelationsModel;
use App\RolesModel;
use App\TransactionsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $id = Auth::id();
        $doors = RelationsModel::where('user_id', $id)->get();
        return view('mio_home', ['doors' => $doors]);
    }

    public function addDoor(Request $request)
    {
        $doorname = $request->input('doorname');

        $new_door = new DoorsModel();
        $new_door->door_name = $doorname;
        $new_door->save();

        $user_id = Auth::id();
        $door_id = DoorsModel::where('door_name', $doorname)->value('id');

        $new_relation = new RelationsModel();
        $new_relation->door_id = $door_id;
        $new_relation->user_id = $user_id;
        $new_relation->role_id = RolesModel::where('name', 'client')->value('id');
        $new_relation->protocol_right = 1;
        $new_relation->access_right = 1;
        $new_relation->mon = 1;
        $new_relation->tue = 1;
        $new_relation->wed = 1;
        $new_relation->thu = 1;
        $new_relation->fri = 1;
        $new_relation->sat = 1;
        $new_relation->sun = 1;
        $new_relation->from_time = '00:00:00';
        $new_relation->to_time = '23:59:00';
        $new_relation->save();

        return redirect('/home');
    }

    public function invokeManageDoor($door)
    {
        if (RelationsModel::where('door_id', DoorsModel::where('door_name', $door)->value('id'))->where('user_id', Auth::id())->get()->count() < 1) {
            return redirect('/home');
        }

        $id = Auth::id();
        $door_id = DoorsModel::where('door_name', $door)->value('id');
        $role_id = RelationsModel::where('user_id',$id)->where('door_id', $door_id)->value('role_id');
        return view('mio_manage_door', ['door' => $door, 'role_id' => $role_id]);
    }

    public function invokeSelectUser($door)
    {
        $door_id = DoorsModel::where('door_name', $door)->value('id');
        $role_id = RolesModel::where('name', 'client')->value('id');

        if (RelationsModel::where('door_id', $door_id)->where('user_id', Auth::id())->where('role_id', $role_id)->get()->count() < 1) {
            return redirect('/home');
        }

        $door_id = DoorsModel::where('door_name', $door)->value('id');
        $users = RelationsModel::where('door_id', $door_id)->where('role_id', RolesModel::where('name', 'user')->value('id'))->get();
        return view('mio_select_user', ['door' => $door, 'users' => $users]);
    }

    public function open ($door)
    {
        if (RelationsModel::where('door_id', DoorsModel::where('door_name', $door)->value('id'))->where('user_id', Auth::id())->get()->count() < 1) {
            return redirect('/home');
        }

        $door_id = DoorsModel::where('door_name', $door)->value('id');
        $user_name = Auth::user()->name;
        date_default_timezone_set("Europe/Berlin");
        $date = date('Y-m-d');
        $time = date(' H:i:s');

        $user = new TransactionsModel;
        $user->user_name = $user_name;
        $user->entrance_date = $date;
        $user->entrance_time = $time;
        $user->door_id = $door_id;
        $user->save();

        return redirect('/home');
    }

}