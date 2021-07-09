<?php

namespace App\Http\Controllers;

use App\Models\RunwaySurface;
use App\Models\AirportRunway;
use Illuminate\Http\Request;

class RunwaySurfaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = RunwaySurface::all();
        return view('surface.index', compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $runway = AirportRunway::all();
        return view('surface.create', compact('runway'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        RunwaySurface::create($request->all());

        return redirect()->route('surface.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = RunwaySurface::find($id);

        return view('surface.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = RunwaySurface::find($id);
        $runway = AirportRunway::all();

        return view('surface.edit', compact('item', 'runway'));
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
        $item = RunwaySurface::find($id);
        $item->update($request->all());

        return redirect()->route('surface.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RunwaySurface::destroy($id);

        return redirect()->route('surface.index');
    }
}
