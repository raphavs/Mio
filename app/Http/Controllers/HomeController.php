<?php

namespace App\Http\Controllers;

use App\DoorsModel;
use App\RelationsModel;
use App\RolesModel;
use App\TransactionsModel;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
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
        return view('mio_home')->with('doors', $doors);
    }

    public function invokeManageDoor($door)
    {
        $id = Auth::id();
        $door_id = DoorsModel::where('door_name', $door)->value('id');
        $role_id = RelationsModel::where('user_id',$id)->where('door_id', $door_id)->value('role_id');
        return view('mio_manage_door', ['door' => $door, 'role_id' => $role_id])->with('role_id', $role_id);
    }

    public function invokeSelectUser($door)
    {
        $door_id = DoorsModel::where('door_name', $door)->value('id');
        $users = RelationsModel::where('door_id', $door_id)->where('role_id', 3)->get();
        return view('mio_select_user', ['door' => $door])->with('users', $users);
    }

    public function addUser($door)
    {
        return view ('mio_adduser',['door'=>$door]);
    }

    public function add(Request $request,$door)
    {
        $user=new User;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $password = Hash::make($request->input('password'));
        $user->password=$password;
        $user->save();

        $id=Auth::id();
        $doors=RelationsModel::where('user_id',$id)->get();
        return view('mio_home')->with('doors', $doors);
    }


    public function open ($door)
    {
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

        $id = Auth::id();
        $role_id = RelationsModel::where('user_id',$id)->where('door_id', $door_id)->value('role_id');
        return view('mio_manage_door', ['door' => $door])->with('role_id', $role_id);

    }
}
