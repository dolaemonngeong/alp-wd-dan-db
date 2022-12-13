<?php

namespace App\Http\Controllers;

use App\Models\Structure;
use App\Http\Requests\StoreStructureRequest;
use App\Http\Requests\UpdateStructureRequest;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //design view blm ada
        if($request->has('search')){
            return view('ourlayouts.penduduk.data-penduduk',[
                'title' =>'Penduduk',
                'structures' => Writer::where(
                    'name','like','%'.$request->search.'%')
                    ->orWhere('appointed_date', 'like', '%'.$request->search.'%')
                    ->orWhere('resign_date', 'like', '%'.$request->search.'%')
                    ->paginate(),
                'positions' => Position::whereRelation('position', 'name', 'like','%'.$request->search.'%')->get(),
                'villagers' => Position::whereRelation('villager', 'name', 'like','%'.$request->search.'%')->get(),
            ]);
        }else{
            return view('ourlayouts.penduduk.data-penduduk',[
                'title' =>'Penduduk',
                'structures' => Writer::paginate(10),
                'positions' => Position::all(),
                'villagers' => Villager::all(),
            ]);
        }
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
     * @param  \App\Http\Requests\StoreStructureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStructureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function show(Structure $structure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function edit(Structure $structure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStructureRequest  $request
     * @param  \App\Models\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStructureRequest $request, Structure $structure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Structure $structure)
    {
        //
    }
}
