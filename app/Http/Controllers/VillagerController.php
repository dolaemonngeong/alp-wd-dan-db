<?php

namespace App\Http\Controllers;

use App\Models\Villager;
use App\Http\Requests\StoreVillagerRequest;
use App\Http\Requests\UpdateVillagerRequest;

class VillagerController extends Controller
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
     * @param  \App\Http\Requests\StoreVillagerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVillagerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Villager  $villager
     * @return \Illuminate\Http\Response
     */
    public function show(Villager $villager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Villager  $villager
     * @return \Illuminate\Http\Response
     */
    public function edit(Villager $villager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVillagerRequest  $request
     * @param  \App\Models\Villager  $villager
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVillagerRequest $request, Villager $villager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Villager  $villager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Villager $villager)
    {
        //
    }
}
