<?php

namespace App\Http\Controllers;

use App\costumer;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costumer = costumer::all();
        return view('costumer.index',compact('costumer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('costumer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_cos' => 'required',
            'nohp_cos' => 'required',
            'address_cos' => 'required',
            'email_cos' => 'required'
        ]);
        costumer::create($request->all());
        return redirect('/costumer')->with('status', 'NEW COSTUMER ADDED!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\costumer  $costumer
     * @return \Illuminate\Http\Response
     */
    public function show(costumer $costumer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\costumer  $costumer
     * @return \Illuminate\Http\Response
     */
    public function edit(Costumer $costumer)
    {
        return view('costumer.edit', compact('costumer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\costumer  $costumer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Costumer $costumer)
    {
        Costumer::where('id', $costumer->id)
        ->update([
            'name_cos' => $request->name_cos,
            'nohp_cos' => $request->nohp_cos,
            'address_cos' => $request->address_cos,
            'email_cos' => $request->email_cos
        ]);
        return redirect('/costumer')->with('succes','DATA EDITED SUCCESS!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\costumer  $costumer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $costumer = costumer::find($id);
        $costumer->delete();
        return redirect('/costumer')->with('succes','DATA HAS BEEN DELETED!!');
    }
}
