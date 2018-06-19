<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rapha
 * Date: 16.06.2018
 * Time: 21:35
 */

namespace App\Http\Controllers;

use App\DoorsModel;
use App\RelationsModel;
use App\RolesModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AddUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addUser($door)
    {
        $door_id = DoorsModel::where('door_name', $door)->value('id');
        $role_id = RolesModel::where('name', 'client')->value('id');

        if (RelationsModel::where('door_id', $door_id)->where('user_id', Auth::id())->where('role_id', $role_id)->get()->count() < 1) {
            return redirect('/home');
        }

        return view ('mio_add_user', ['door' => $door, 'error' => 'okay']);
    }

    public function storeUser(Request $request, $door)
    {
        if ($request->has('name')) {
            $this->addNewUser($request, $door);
        } else {
            $this->addExistingUser($request, $door);
        }
        return redirect("/home/$door");
    }

    private function addNewUser(Request $request, $door)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $new_user = new User;
        $new_user->name = $request->input('name');
        $new_user->email = $request->input('email');
        $password = Hash::make($request->input('password'));
        $new_user->password = $password;
        $new_user->role()->associate(RolesModel::where('name', 'user')->first());
        $new_user->save();

        $door_id = DoorsModel::where('door_name', $door)->value('id');
        $user_id = User::where('name', $request->input('name'))->value('id');

        $new_relation = new RelationsModel();
        $new_relation->door_id = $door_id;
        $new_relation->user_id = $user_id;
        $new_relation->role_id = RolesModel::where('name', 'user')->value('id');
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

    }

    private function addExistingUser(Request $request, $door)
    {
        $hashedPassword = User::where('email', $request->input('email'))->value('password');
        if ($hashedPassword == null) {
            return view ('mio_add_user', ['door' => $door, 'error' => 'not-exists']);
        }

        if (!Hash::check($request->input('password'), $hashedPassword)) {
            return view ('mio_add_user', ['door' => $door, 'error' => 'wrong-password']);
        }

        $door_id = DoorsModel::where('door_name', $door)->value('id');
        $existing_user_id = User::where('email', $request->input('email'))->value('id');
        $is_user_already_user = RelationsModel::where('door_id', $door_id)->where('user_id', $existing_user_id)->get();

        if ($is_user_already_user->count() > 0) {
            return view ('mio_add_user', ['door' => $door, 'error' => 'already-exists']);
        }

        $new_relation = new RelationsModel();
        $new_relation->door_id = $door_id;
        $new_relation->user_id = $existing_user_id;
        $new_relation->role_id = RolesModel::where('name', 'user')->value('id');
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

    }

}