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

    public function showTransactions(Request $request, $door)
    {
        $username = $request->input('username');
        $date = $request->input('date');

        $transactions = TransactionsModel::where('client_name', 'LIKE', '%' . $username . '%')->where('entrance_date', 'LIKE', '%' . $date . '%')->get();

        return view('mio_transactions', ['door' => $door])->with('transactions', $transactions);
    }

}