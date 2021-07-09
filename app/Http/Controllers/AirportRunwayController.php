<?php

namespace App\Http\Controllers;

use App\Models\AirportRunway;
use App\Models\Airport;
use Illuminate\Http\Request;

class AirportRunwayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = AirportRunway::all();
        
        return view('runway.index', compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $airport = Airport::get();
        return view('runway.create', compact('airport'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AirportRunway::create($request->all());

        return redirect()->route('runway.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = AirportRunway::find($id);

        return view('runway.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = AirportRunway::find($id);
        $airport = Airport::get();

        return view('runway.edit', compact('item', 'airport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = AirportRunway::find($id);
        $item->update($request->all());

        return redirect()->route('runway.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AirportRunway::destroy($id);

        return redirect()->route('runway.index');
    }
}
