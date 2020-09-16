<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Opleiding;
use Illuminate\Http\Request;

class OpleidingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Opleiding::all();
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
     * @param  \App\Models\Opleiding  $opleiding
     * @return \Illuminate\Http\Response
     */
    public function show(Opleiding $opleiding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Opleiding  $opleiding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Opleiding $opleiding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Opleiding  $opleiding
     * @return \Illuminate\Http\Response
     */
    public function destroy(Opleiding $opleiding)
    {
        //
    }
}
