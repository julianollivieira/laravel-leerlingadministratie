<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Vak;
use Illuminate\Http\Request;

class VakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Vak::all();
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
     * @param  \App\Models\Vak  $vak
     * @return \Illuminate\Http\Response
     */
    public function show(Vak $vak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vak  $vak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vak $vak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vak  $vak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vak $vak)
    {
        //
    }
}
