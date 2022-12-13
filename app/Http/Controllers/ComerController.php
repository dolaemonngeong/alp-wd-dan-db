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
    public function index(Request $request)
    {
        if($request->has('search')){
            return view('ourlayouts.pendatang.data-pendatang',[
                'title' =>'Pendatang',
                'comers' => Comer::where(
                    'name','like','%'.$request->search.'%')
                    ->orWhere('birth_place', 'like', '%'.$request->search.'%')
                    ->orWhere('birth_date', 'like', '%'.$request->search.'%')
                    ->orWhere('nik', 'like', '%'.$request->search.'%')
                    ->orWhere('phone', 'like', '%'.$request->search.'%')
                    ->orWhere('role', 'like', '%'.$request->search.'%')
                    ->orWhere('gender', 'like', '%'.$request->search.'%')
                    ->orWhere('status', 'like', '%'.$request->search.'%')
                    ->paginate(),
                'villagers' => Villager::whereRelation('villager', 'name', 'like','%'.$request->search.'%')->get()
            ]);
        }else{
            return view('ourlayouts.pendatang.data-pendatang',[
                'title' =>'Pendatang',
                'comers' => Comer::paginate(20),
                'villagers' => Villager::all()
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
