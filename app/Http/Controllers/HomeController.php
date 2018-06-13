<?php

namespace App\Http\Controllers;

use App\DoorsModel;
use App\MyUsersModel;
use App\RelationsModel;
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
        $id=Auth::id();
        $doors=RelationsModel::where('user_id',$id)->get();
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

    public function addUser($door){
        return view ('mio_adduser',['door'=>$door]);
    }
    public function add(Request $request,$door){
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

}
