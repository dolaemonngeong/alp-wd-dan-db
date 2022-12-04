<?php

namespace App\Http\Controllers;

use App\Models\Letter_type;
use App\Http\Requests\StoreLetter_typeRequest;
use App\Http\Requests\UpdateLetter_typeRequest;

class LetterTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreLetter_typeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLetter_typeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Letter_type  $letter_type
     * @return \Illuminate\Http\Response
     */
    public function show(Letter_type $letter_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Letter_type  $letter_type
     * @return \Illuminate\Http\Response
     */
    public function edit(Letter_type $letter_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLetter_typeRequest  $request
     * @param  \App\Models\Letter_type  $letter_type
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLetter_typeRequest $request, Letter_type $letter_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Letter_type  $letter_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Letter_type $letter_type)
    {
        //
    }
}
