<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $transaction = Transaction::all();
        // return view('dashboard.transaction.index', [
        //     'title' => 'Transaction',
        //     'transactions' => $transaction
        return view('dashboard.transaction.index', [
            'title' => 'Transaction',
            'transactions' => Transaction::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.transaction.create', [
            'title' => 'Create Transaction',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required',
            'type' => 'required',
            'total' => 'required',
            'title' => 'required',
            'category_id' => 'required'
        ]);

        $validated['user_id'] = auth()->user()->id;

        Transaction::create($validated);

        return redirect('/dashboard/transaction')->with('success', 'New transaction has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        return view('dashboard.transaction.edit', [
            'title' => 'Edit Transaction',
            'transaction' => $transaction,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return redirect()->back()->with('error', "Transaction Not found!");
        }

        $transaction->date = $request->date;
        $transaction->type = $request->type;
        $transaction->total = $request->total;
        $transaction->title = $request->title;
        $transaction->category_id = $request->category_id;
        $transaction->save();

        return redirect()->intended('/dashboard/transaction')->with('success', "Successfully update transaction!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        Transaction::destroy($transaction->id);
        return redirect('/dashboard/transaction')->with('success', 'Transaction has been deleted!');
    }
}
