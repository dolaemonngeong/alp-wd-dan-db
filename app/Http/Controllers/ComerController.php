<?php

namespace App\Http\Controllers;

use App\Models\Comer;
use App\Http\Requests\StoreComerRequest;
use App\Http\Requests\UpdateComerRequest;

class ComerController extends Controller
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
     * @param  \App\Http\Requests\StoreComerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comer  $comer
     * @return \Illuminate\Http\Response
     */
    public function show(Comer $comer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comer  $comer
     * @return \Illuminate\Http\Response
     */
    public function edit(Comer $comer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComerRequest  $request
     * @param  \App\Models\Comer  $comer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComerRequest $request, Comer $comer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comer  $comer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comer $comer)
    {
        //
    }
}
