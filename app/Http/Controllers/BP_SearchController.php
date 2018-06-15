<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rapha
 * Date: 08.05.2018
 * Time: 00:15
 */

namespace App\Http\Controllers;

use App\DoorsModel;
use App\RelationsModel;
use Illuminate\Routing\Controller;
use App\TransactionsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BP_SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showTransactions($door)
    {
        $id = Auth::id();
        $door_id = DoorsModel::where('door_name', $door)->value('id');
        $role_id = RelationsModel::where('user_id', $id)->where('door_id', $door_id)->value('role_id');
        $protocol_right = RelationsModel::where('user_id', $id)->where('door_id', $door_id)->value('protocol_right');

        if ($protocol_right != 1) {
            $transactions = TransactionsModel::where('door_id', $door_id)->where('user_name', Auth::user())->get();
        } else {
            $transactions = TransactionsModel::where('door_id', $door_id)->get();
        }

        return view('mio_transactions', ['door' => $door, 'transactions' => $transactions]);
    }

    public function submitFilterAJAX(Request $request)
    {
        $transactions = $this->submitFilter($request);
        if ($transactions->count() <= 0) {
            return view('ajax.mio_transactions_empty');
        } else {
            return view('ajax.mio_transactions', ['transactions' => $transactions]);
        }
    }

    private function submitFilter(Request $request)
    {
        if (empty($request->input('username')) and empty($request->input('date'))) {
            $username = '%' . $request->input('username') . '%';
            $date = '%' . $request->input('date') . '%';
            $transactions = TransactionsModel::where('user_name', 'LIKE', $username)->where('entrance_date', 'LIKE', $date)->get();

        } else if (empty($request->input('username'))) {
            $username = '%' . $request->input('username') . '%';
            $date = $request->input('date');
            $transactions = TransactionsModel::where('user_name', 'LIKE', $username)->where('entrance_date', $date)->get();

        } else if (empty($request->input('date'))) {
            $username = $request->input('username');
            $date = '%' . $request->input('date') . '%';
            $transactions = TransactionsModel::where('user_name', $username)->where('entrance_date', 'LIKE', $date)->get();

        } else {
            $username = $request->input('username');
            $date = $request->input('date');
            $transactions = TransactionsModel::where('user_name', $username)->where('entrance_date', $date)->get();
        }

        return $transactions;
    }

    public function filterAJAX(Request $request)
    {
        $transactions = $this->filterLIKE($request);
        if ($transactions->count() <= 0) {
            return view('ajax.mio_transactions_empty');
        } else {
            return view('ajax.mio_transactions', ['transactions' => $transactions]);
        }
    }

    private function filterLIKE(Request $request)
    {
        $username = '%' . $request->input('username') . '%';
        $date = '%' . $request->input('date') . '%';

        return TransactionsModel::where('user_name', 'LIKE', $username)->where('entrance_date', 'LIKE', $date)->get();
    }

}