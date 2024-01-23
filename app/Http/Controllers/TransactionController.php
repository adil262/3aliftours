<?php

namespace App\Http\Controllers;

use App\capital;
use App\cash;
use App\sales;
use App\purchase;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cash = cash::all();
        return view('cash.index', compact('cash'));
    }
    public function index2()
    {
        $capital = capital::all();
        return view('capital.index', compact('capital'));
    }
    public function index3()
    {
        $sales = sales::all();
        return view('sales.index', compact('sales'));
    }
    public function index4()
    {
        $purchase = purchase::all();
        return view('purchase.index', compact('purchase'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create2()
    {
        return view('capital.create');
    }
    public function create3()
    {
        return view('sales.create');
    }
    public function create4()
    {
        return view('purchase.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
        $request->validate([
            'date_tr' => 'required',
            'balance' => 'required',
            'information_tr' => 'required',
            'price_tr' => 'required'
        ]);
        capital::create($request->all());
        return redirect('/capital')->with('status', 'NEW CAPITAL ADDED!!');
    }
    public function store3(Request $request)
    {
        $request->validate([
            'date_tr' => 'required',
            'balance' => 'required',
            'information_tr' => 'required',
            'price_tr' => 'required'
        ]);
        sales::create($request->all());
        return redirect('/sales')->with('status', 'NEW SALES ADDED!!');
    }
    public function store4(Request $request)
    {
        $request->validate([
            'date_tr' => 'required',
            'balance' => 'required',
            'information_tr' => 'required',
            'price_tr' => 'required'
        ]);
        purchase::create($request->all());
        return redirect('/purchase')->with('status', 'NEW PURCHASE ADDED!!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(capital $capital)
    {
        return view ('capital.edit',compact('capital'));
    }
    public function edit3(sales $sales)
    {
        return view ('sales.edit',compact('sales'));
    }
    public function edit4(purchase $purchase)
    {
        return view ('purchase.edit',compact('purchase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaction $transaction)
    {
        transaction::where('id', $transaction->id)
        ->update([
            'date_tr' => $request->date_tr,
            'balance' => $request->balance,
            'price_tr' => $request->price_tr,
            'information_tr' => $request->information_tr
        ]);
        return redirect('/capital')->with('succes','DATA EDITED SUCCESS!!');
    }
    public function update3(Request $request, sales $sales)
    {
        sales::where('id', $sales->id)
        ->update([
            'date_tr' => $request->date_tr,
            'balance' => $request->balance,
            'price_tr' => $request->price_tr,
            'information_tr' => $request->information_tr
        ]);
        return redirect('/sales')->with('succes','DATA EDITED SUCCESS!!');
    }
    public function update4(Request $request, purchase $purchase)
    {
        purchase::where('id', $purchase->id)
        ->update([
            'date_tr' => $request->date_tr,
            'balance' => $request->balance,
            'price_tr' => $request->price_tr,
            'information_tr' => $request->information_tr
        ]);
        return redirect('/purchase')->with('succes','DATA EDITED SUCCESS!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaction $transaction)
    {
        //
    }
}
