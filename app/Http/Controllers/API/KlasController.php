<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Klas;
use Illuminate\Http\Request;

class KlasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Klas::all();
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
     * @param  \App\Models\Klas  $klas
     * @return \Illuminate\Http\Response
     */
    public function show(Klas $klas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Klas  $klas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Klas $klas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Klas  $klas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Klas $klas)
    {
        //
    }
}
