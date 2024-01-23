<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\purchase;

class PurchaseController extends Controller
{
    public function index4(purchase $purchase)
    {
        $purchase = purchase::all();
        return view('purchase.index', compact('purchase'));
    }
    public function create4()
    {
        return view('purchase.create');
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
    public function edit4(purchase $purchase)
    {
        return view ('purchase.edit',compact('purchase'));
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

}
