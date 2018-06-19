<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rapha
 * Date: 18.06.2018
 * Time: 01:13
 */

namespace App\Http\Controllers;

use App\DoorsModel;
use App\RelationsModel;
use App\RolesModel;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function manage()
    {
        $role_id_admin = RolesModel::where('name', 'admin')->value('id');
        $admins = User::where('role_id', $role_id_admin)->get();

        $role_id_client = RolesModel::where('name', 'client')->value('id');
        $clients = User::where('role_id', $role_id_client)->get();

        $role_id_user = RolesModel::where('name', 'user')->value('id');
        $users = User::where('role_id', $role_id_user)->get();

        return view ('mio_admin', ['admins' => $admins ,'clients' => $clients, 'users' => $users]);
    }

    public function deleteUser(Request $request)
    {
        $user_id = $request->input('id');

        $all_relations_of_user = RelationsModel::where('user_id', $user_id)->get();
        foreach ($all_relations_of_user as $r) {
            $r->delete();
        }

        $user_to_delete = User::find($user_id);
        $user_to_delete->delete();

        return redirect('/admin');
    }

    public function manageClient($user)
    {
        if (User::where('name', $user)->where('role_id', RolesModel::where('name', 'client')->value('id'))->get()->count() < 1) {
            return redirect('/admin');
        }

        $user_row = User::where('name', $user)->first();
        $doors = RelationsModel::where('user_id', $user_row->id)->where('role_id', RolesModel::where('name', 'client')->value('id'))->get();

        return view('mio_admin_ext', ['user_row' => $user_row, 'doors' => $doors]);
    }

    public function delete(Request $request, $user)
    {
        if ($request->has('user-id')) {

            $user_id = $request->input('user-id');

            $doors = RelationsModel::where('user_id', $user_id)->where('role_id', RolesModel::where('name', 'client')->value('id'))->get();

            foreach ($doors as $d) {
                $all_relations_of_that_door = RelationsModel::where('door_id', $d->door_id)->get();
                foreach ($all_relations_of_that_door as $r) {
                    $r->delete();
                }
            }

            $all_relations_of_user = RelationsModel::where('user_id', $user_id)->get();
            foreach ($all_relations_of_user as $r) {
                $r->delete();
            }

            $user_to_delete = User::find($user_id);
            $user_to_delete->delete();

            foreach ($doors as $one_door) {
                $door_to_delete = DoorsModel::find($one_door->door_id);
                $door_to_delete->delete();
            }

            return redirect('/admin');

        } else {

            $door_id = $request->input('door-id');

            $all_relations_of_door = RelationsModel::where('door_id', $door_id)->get();
            foreach ($all_relations_of_door as $r) {
                $r->delete();
            }

            $door_to_delete = DoorsModel::find($door_id);
            $door_to_delete->delete();

            return redirect("/admin/$user");

        }

    }

}