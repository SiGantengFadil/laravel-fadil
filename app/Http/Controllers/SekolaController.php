<?php

namespace App\Http\Controllers;

use App\Models\Sekola;
use App\Http\Requests\StoreSekolaRequest;
use App\Http\Requests\UpdateSekolaRequest;

class SekolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSekolaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSekolaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sekola  $sekola
     * @return \Illuminate\Http\Response
     */
    public function show(Sekola $sekola)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sekola  $sekola
     * @return \Illuminate\Http\Response
     */
    public function edit(Sekola $sekola)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSekolaRequest  $request
     * @param  \App\Models\Sekola  $sekola
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSekolaRequest $request, Sekola $sekola)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sekola  $sekola
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sekola $sekola)
    {
        //
    }
}
