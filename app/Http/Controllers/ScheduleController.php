<?php

namespace App\Http\Controllers;

use App\schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedule = schedule::all();
        return view('schedule.index',compact('schedule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schedule.create');
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
            'tgl_flight' => 'required',
            'tgl_return' => 'required',
            'maskapai' => 'required',
            'route' => 'required'
        ]);
        schedule::create($request->all());
        return redirect('/schedule')->with('status', 'NEW SCHEDULE ADDED!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(schedule $schedule)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        return view ('schedule.edit',compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        schedule::where('id', $schedule->id)
        ->update([
            'tgl_flight' => $request->tgl_flight,
            'tgl_return' => $request->tgl_return,
            'maskapai' => $request->maskapai,
            'route' => $request->route
        ]);
        return redirect('/schedule')->with('succes','DATA EDITED SUCCESS!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule = schedule::find($id);
        $schedule->delete();
        return redirect('/schedule')->with('succes','DATA HAS BEEN DELETED!!');
    }
}
