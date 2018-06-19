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
use App\TransactionsModel;
use Illuminate\Routing\Controller;
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
        if (DoorsModel::where('door_name', $door)->get()->count() < 1) {
            return redirect('/home');
        }

        $id = Auth::id();
        $door_id = DoorsModel::where('door_name', $door)->value('id');
        $protocol_right = RelationsModel::where('user_id', $id)->where('door_id', $door_id)->value('protocol_right');

        if ($protocol_right == 0) {
            $transactions = TransactionsModel::where('door_id', $door_id)->where('user_name', Auth::user()->name)->get();
        } else {
            $transactions = TransactionsModel::where('door_id', $door_id)->get();
        }

        $role_id = RelationsModel::where('user_id', $id)->where('door_id', $door_id)->value('role_id');
        return view('mio_transactions', ['door' => $door, 'transactions' => $transactions, 'role_id' => $role_id]);
    }

    public function submitFilterAJAX(Request $request, $door)
    {
        if (!$request->ajax()) {
            return redirect("/home/$door/transactions");
        }

        if ($request->has('username')) {
            $transactions = $this->submitFilter($request, $door);
        } else {
            $transactions = $this->submitFilterDate($request, $door);
        }

        if ($transactions->count() <= 0) {
            return view('ajax.mio_transactions_empty');
        } else {
            return view('ajax.mio_transactions', ['transactions' => $transactions]);
        }
    }

    private function submitFilter(Request $request, $door)
    {
        $door_id = DoorsModel::where('door_name', $door)->value('id');

        if (empty($request->input('username')) and empty($request->input('date'))) {
            $username = '%' . $request->input('username') . '%';
            $date = '%' . $request->input('date') . '%';
            $transactions = TransactionsModel::where('user_name', 'LIKE', $username)->where('entrance_date', 'LIKE', $date)->where('door_id', $door_id)->get();

        } else if (empty($request->input('username'))) {
            $username = '%' . $request->input('username') . '%';
            $date = $request->input('date');
            $transactions = TransactionsModel::where('user_name', 'LIKE', $username)->where('entrance_date', $date)->where('door_id', $door_id)->get();

        } else if (empty($request->input('date'))) {
            $username = $request->input('username');
            $date = '%' . $request->input('date') . '%';
            $transactions = TransactionsModel::where('user_name', $username)->where('entrance_date', 'LIKE', $date)->where('door_id', $door_id)->get();

        } else {
            $username = $request->input('username');
            $date = $request->input('date');
            $transactions = TransactionsModel::where('user_name', $username)->where('entrance_date', $date)->where('door_id', $door_id)->get();
        }

        return $transactions;
    }

    private function submitFilterDate(Request $request, $door)
    {
        $door_id = DoorsModel::where('door_name', $door)->value('id');

        if (empty($request->input('date'))) {
            $date = '%' . $request->input('date') . '%';
            $transactions = TransactionsModel::where('user_name', Auth::user()->name)->where('entrance_date', 'LIKE', $date)->where('door_id', $door_id)->get();
        } else {
            $date = $request->input('date');
            $transactions = TransactionsModel::where('user_name', Auth::user()->name)->where('entrance_date', $date)->where('door_id', $door_id)->get();
        }

        return $transactions;
    }

    public function filterAJAX(Request $request, $door)
    {
        if (!$request->ajax()) {
            return redirect("/home/$door/transactions");
        }

        if ($request->has('username')) {
            $transactions = $this->filterLIKE($request, $door);
        } else {
            $transactions = $this->filterLikeDate($request, $door);
        }

        if ($transactions->count() <= 0) {
            return view('ajax.mio_transactions_empty');
        } else {
            return view('ajax.mio_transactions', ['transactions' => $transactions]);
        }
    }

    private function filterLIKE(Request $request, $door)
    {
        $door_id = DoorsModel::where('door_name', $door)->value('id');

        $username = '%' . $request->input('username') . '%';
        $date = '%' . $request->input('date') . '%';

        return TransactionsModel::where('user_name', 'LIKE', $username)->where('entrance_date', 'LIKE', $date)->where('door_id', $door_id)->get();
    }

    private function filterLikeDate(Request $request, $door)
    {
        $door_id = DoorsModel::where('door_name', $door)->value('id');
        $date = '%' . $request->input('date') . '%';
        return TransactionsModel::where('user_name', Auth::user()->name)->where('entrance_date', 'LIKE', $date)->where('door_id', $door_id)->get();
    }

}