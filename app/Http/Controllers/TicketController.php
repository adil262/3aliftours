<?php

namespace App\Http\Controllers;

use App\ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticket = ticket::all();
        return view('ticket.index',compact('ticket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ticket.create');
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
            'name_ticket' => 'required',
            'type_ticket' => 'required',
            'lenght' => 'required',
            'price' => 'required'
        ]);
        ticket::create($request->all());
        return redirect('/ticket')->with('status', 'NEW SCHEDULE ADDED!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        return view ('ticket.edit',compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        ticket::where('id', $ticket->id)
        ->update([
            'name_ticket' => $request->name_ticket,
            'type_ticket' => $request->type_ticket,
            'lenght' => $request->lenght,
            'price' => $request->price
        ]);
        return redirect('/ticket')->with('succes','DATA EDITED SUCCESS!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = ticket::find($id);
        $ticket->delete();
        return redirect('/ticket')->with('succes','DATA HAS BEEN DELETED!!');
    }
}
