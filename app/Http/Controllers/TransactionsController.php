<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionsController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('account')->get();
        return view('transactions', compact('transactions'));
    }

    
    public function create()
    {
        $accounts = Account::all();
        return view('transactionCreate', compact('accounts'));
    }

    public function store(TransactionRequest $request)
    {
        DB::beginTransaction();
        $transaction = new Transaction;
        $transaction->account_id = $request->account;
        $transaction->type = $request->type;
        $transaction->amount = $request->amount;
        $transaction->created_at = date('Y-m-d', strtotime($request->date));
        $transaction->save();
        $account = Account::where('id', $request->account)->first();
        $account->balance = ($account->balance + $request->amount);
        $account->update();
        DB::commit();

        return redirect('transactions')->with('message', 'A transaction has been successfully added');
    
    }
    
}
