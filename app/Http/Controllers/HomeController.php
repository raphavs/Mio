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

        return view('mio_home', ['doors' => $doors, 'error' => 'okay']);
    }

    public function addDoor(Request $request)
    {
        $doorname = $request->input('doorname');

        if (DoorsModel::where('door_name', $doorname)->get()->count() > 0) {
            $id = Auth::id();
            $doors = RelationsModel::where('user_id', $id)->get();
            return view('mio_home', ['doors' => $doors, 'error' => 'already-exists']);
        }

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

        date_default_timezone_set("Europe/Berlin");
        $week_day = date('w');

        switch($week_day) {
            case 1:
                $week_day = 'mon';
                break;
            case 2:
                $week_day = 'tue';
                break;
            case 3:
                $week_day = 'wed';
                break;
            case 4:
                $week_day = 'thu';
                break;
            case 5:
                $week_day = 'fri';
                break;
            case 6:
                $week_day = 'sat';
                break;
            case 7:
                $week_day = 'sun';
                break;
        }

        $relation_row = RelationsModel::where('user_id', $id)->where('door_id', $door_id)->first();

        return view('mio_manage_door', ['door' => $door, 'relation_row' => $relation_row, 'week_day' => $week_day]);
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

    public function openPseudo($door)
    {
        if (RelationsModel::where('door_id', DoorsModel::where('door_name', $door)->value('id'))->where('user_id', Auth::id())->get()->count() < 1) {
            return redirect('/home');
        }
        return redirect("/home/$door");
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