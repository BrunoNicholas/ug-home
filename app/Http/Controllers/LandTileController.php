<?php

namespace App\Http\Controllers;

use App\Models\LandTile;
use Illuminate\Http\Request;

class LandTileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('system.titles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system.titles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LandTile  $landTile
     * @return \Illuminate\Http\Response
     */
    public function show(LandTile $landTile)
    {
        return view('system.titles.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LandTile  $landTile
     * @return \Illuminate\Http\Response
     */
    public function edit(LandTile $landTile)
    {
        return view('system.titles.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LandTile  $landTile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LandTile $landTile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LandTile  $landTile
     * @return \Illuminate\Http\Response
     */
    public function destroy(LandTile $landTile)
    {
        //
    }
}
