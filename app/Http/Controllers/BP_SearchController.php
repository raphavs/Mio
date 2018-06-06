<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rapha
 * Date: 08.05.2018
 * Time: 00:15
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\TransactionsModel;
use Illuminate\Http\Request;

class BP_SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showTransactions($door)
    {
        $transactions = TransactionsModel::all();
        return view('mio_transactions', ['door' => $door])->with('transactions', $transactions);
    }

    public function submitFilterAJAX(Request $request)
    {
        $transactions = $this->submitFilter($request);
        if ($transactions->count() <= 0) {
            return view('ajax.mio_transactions_empty');
        } else {
            return view('ajax.mio_transactions')->with('transactions', $transactions);
        }
    }

    private function submitFilter(Request $request)
    {
        $username = $request->input('username');
        $date = '%' . $request->input('date') . '%';

        if (empty($username)) {
            $username = '%' . $request->input('username') . '%';
            $transactions = TransactionsModel::where('user_name', 'LIKE', $username)->where('entrance_date', 'LIKE', $date)->get();
        } else {
            $transactions = TransactionsModel::where('user_name', $username)->where('entrance_date', 'LIKE', $date)->get();
        }
        return $transactions;
    }

    public function filterAJAX(Request $request)
    {
        $transactions = $this->filterLIKE($request);
        if ($transactions->count() <= 0) {
            return view('ajax.mio_transactions_empty');
        } else {
            return view('ajax.mio_transactions')->with('transactions', $transactions);
        }
    }

    private function filterLIKE(Request $request)
    {
        $username = '%' . $request->input('username') . '%';
        $date = '%' . $request->input('date') . '%';

        $transactions = TransactionsModel::where('user_name', 'LIKE', $username)->where('entrance_date', 'LIKE', $date)->get();
        return $transactions;
    }

}