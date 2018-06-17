<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rapha
 * Date: 26.05.2018
 * Time: 00:07
 */

namespace App\Http\Controllers;

use App\RelationsModel;
use App\User;
use App\DoorsModel;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BP_AdjustController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function invokeRights(Request $request, $door, $user)
    {
        $user_id = User::where('name', $user)->value('id');
        $request->session()->put('current_user_id', $user_id);
        $door_id = DoorsModel::where('door_name', $door)->value('id');
        $request->session()->put('current_door_id', $door_id);
        $access_right = RelationsModel::where('user_id', $user_id)->where('door_id', $door_id)->value('access_right');
        $protocol_right = RelationsModel::where('user_id', $user_id)->where('door_id', $door_id)->value('protocol_right');
        return view('mio_rights', ['door' => $door, 'user' => $user, 'access_right' => $access_right, 'protocol_right' => $protocol_right]);
    }

    public function invokeRightsExt(Request $request, $door, $user)
    {
        if (empty($request->input('access_option'))) {
            $request->session()->put('access_right',
                RelationsModel::where('user_id', User::where('name', $user)->value('id'))
                              ->where('door_id', DoorsModel::where('door_name', $door)->value('id'))->value('access_right'));
        } else {
            $request->session()->put('access_right', $request->input('access_option') == 'true' ? 1 : 0);
        }

        if (empty($request->input('protocol_option'))) {
            $request->session()->put('protocol_right',
                RelationsModel::where('user_id', User::where('name', $user)->value('id'))
                              ->where('door_id', DoorsModel::where('door_name', $door)->value('id'))->value('protocol_right'));
        } else {
            $request->session()->put('protocol_right', $request->input('protocol_option') == 'true' ? 1 : 0);
        }

        $access_right = $request->session()->get('access_right','There is no Access Right');
        if ($access_right == 0) {

            $protocol_right = $request->session()->get('protocol_right','There is no Protocol Right');

            $current_user = RelationsModel::where('user_id', $request->session()->get('current_user_id', 'There is no User-ID'))
                                          ->where('door_id', $request->session()->get('current_door_id', 'There is no Door-ID'))->first();

            $current_user->access_right = $access_right;
            $current_user->protocol_right = $protocol_right;

            $current_user->save();

            return redirect('/home');

        } else {

            $mon = RelationsModel::where('user_id', User::where('name', $user)->value('id'))
                                 ->where('door_id', DoorsModel::where('door_name', $door)->value('id'))->value('mon');
            $tue = RelationsModel::where('user_id', User::where('name', $user)->value('id'))
                                 ->where('door_id', DoorsModel::where('door_name', $door)->value('id'))->value('tue');
            $wed = RelationsModel::where('user_id', User::where('name', $user)->value('id'))
                                 ->where('door_id', DoorsModel::where('door_name', $door)->value('id'))->value('wed');
            $thu = RelationsModel::where('user_id', User::where('name', $user)->value('id'))
                                 ->where('door_id', DoorsModel::where('door_name', $door)->value('id'))->value('thu');
            $fri = RelationsModel::where('user_id', User::where('name', $user)->value('id'))
                                 ->where('door_id', DoorsModel::where('door_name', $door)->value('id'))->value('fri');
            $sat = RelationsModel::where('user_id', User::where('name', $user)->value('id'))
                                 ->where('door_id', DoorsModel::where('door_name', $door)->value('id'))->value('sat');
            $sun = RelationsModel::where('user_id', User::where('name', $user)->value('id'))
                                 ->where('door_id', DoorsModel::where('door_name', $door)->value('id'))->value('sun');

            $from_time = RelationsModel::where('user_id', User::where('name', $user)->value('id'))
                                       ->where('door_id', DoorsModel::where('door_name', $door)->value('id'))->value('from_time');
            $to_time = RelationsModel::where('user_id', User::where('name', $user)->value('id'))
                                     ->where('door_id', DoorsModel::where('door_name', $door)->value('id'))->value('to_time');

            return view('mio_rights_ext', ['door' => $door, 'user' => $user, 'mon' => $mon, 'tue' => $tue,
                'wed' => $wed, 'thu' => $thu, 'fri' => $fri, 'sat' => $sat, 'sun' => $sun,
                'from_time' => $from_time, 'to_time' => $to_time]);

        }

    }

    public function store(Request $request)
    {
        $current_user = RelationsModel::where('user_id', $request->session()->get('current_user_id', 'There is no User-ID'))
                                      ->where('door_id', $request->session()->get('current_door_id', 'There is no Door-ID'))->first();

        $current_user->access_right = $request->session()->get('access_right','There is no Access Right');
        $current_user->protocol_right = $request->session()->get('protocol_right','There is no Protocol Right');

        $request->has('MON') ? $current_user->mon = 1 : $current_user->mon = 0;
        $request->has('TUE') ? $current_user->tue = 1 : $current_user->tue = 0;
        $request->has('WED') ? $current_user->wed = 1 : $current_user->wed = 0;
        $request->has('THU') ? $current_user->thu = 1 : $current_user->thu = 0;
        $request->has('FRI') ? $current_user->fri = 1 : $current_user->fri = 0;
        $request->has('SAT') ? $current_user->sat = 1 : $current_user->sat = 0;
        $request->has('SUN') ? $current_user->sun = 1 : $current_user->sun = 0;

        switch ($request->input('my-from-range')) {
            case 0:  $current_user->from_time = "00:00:00"; break;
            case 1:  $current_user->from_time = "01:00:00"; break;
            case 2:  $current_user->from_time = "02:00:00"; break;
            case 3:  $current_user->from_time = "03:00:00"; break;
            case 4:  $current_user->from_time = "04:00:00"; break;
            case 5:  $current_user->from_time = "05:00:00"; break;
            case 6:  $current_user->from_time = "06:00:00"; break;
            case 7:  $current_user->from_time = "07:00:00"; break;
            case 8:  $current_user->from_time = "08:00:00"; break;
            case 9:  $current_user->from_time = "09:00:00"; break;
            case 10: $current_user->from_time = "10:00:00"; break;
            case 11: $current_user->from_time = "11:00:00"; break;
            case 12: $current_user->from_time = "12:00:00"; break;
            case 13: $current_user->from_time = "13:00:00"; break;
            case 14: $current_user->from_time = "14:00:00"; break;
            case 15: $current_user->from_time = "15:00:00"; break;
            case 16: $current_user->from_time = "16:00:00"; break;
            case 17: $current_user->from_time = "17:00:00"; break;
            case 18: $current_user->from_time = "18:00:00"; break;
            case 19: $current_user->from_time = "19:00:00"; break;
            case 20: $current_user->from_time = "20:00:00"; break;
            case 21: $current_user->from_time = "21:00:00"; break;
            case 22: $current_user->from_time = "22:00:00"; break;
            case 23: $current_user->from_time = "23:00:00";
        }

        switch ($request->input('my-to-range')) {
            case 1:  $current_user->to_time = "01:00:00"; break;
            case 2:  $current_user->to_time = "02:00:00"; break;
            case 3:  $current_user->to_time = "03:00:00"; break;
            case 4:  $current_user->to_time = "04:00:00"; break;
            case 5:  $current_user->to_time = "05:00:00"; break;
            case 6:  $current_user->to_time = "06:00:00"; break;
            case 7:  $current_user->to_time = "07:00:00"; break;
            case 8:  $current_user->to_time = "08:00:00"; break;
            case 9:  $current_user->to_time = "09:00:00"; break;
            case 10: $current_user->to_time = "10:00:00"; break;
            case 11: $current_user->to_time = "11:00:00"; break;
            case 12: $current_user->to_time = "12:00:00"; break;
            case 13: $current_user->to_time = "13:00:00"; break;
            case 14: $current_user->to_time = "14:00:00"; break;
            case 15: $current_user->to_time = "15:00:00"; break;
            case 16: $current_user->to_time = "16:00:00"; break;
            case 17: $current_user->to_time = "17:00:00"; break;
            case 18: $current_user->to_time = "18:00:00"; break;
            case 19: $current_user->to_time = "19:00:00"; break;
            case 20: $current_user->to_time = "20:00:00"; break;
            case 21: $current_user->to_time = "21:00:00"; break;
            case 22: $current_user->to_time = "22:00:00"; break;
            case 23: $current_user->to_time = "23:00:00"; break;
            case 24: $current_user->to_time = "23:59:00";
        }

        $current_user->save();

        return redirect('/home');
    }

}