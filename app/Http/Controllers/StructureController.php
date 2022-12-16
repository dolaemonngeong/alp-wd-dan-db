<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\Villager;
use App\Models\Structure;
use Illuminate\Http\Request;
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
        if($request->has('search')){
            // dd('tes');
            return view('ourlayouts.perangkat.data-perangkat',[
                'title' =>'Perangkat',
                'structures' => Structure::where(
                    'appointed_date','like','%'.$request->search.'%')
                    ->orWhere('resign_date', 'like', '%'.$request->search.'%')
                    ->orWhere('status_jabat', 'like', '%'.$request->search.'%')
                    ->paginate(),
                // 'positions' => Position::whereRelation('position', 'name', 'like','%'.$request->search.'%')->get(),
                // 'villagers' => Villager::whereRelation('villager', 'name', 'like','%'.$request->search.'%')->get(),
            ]);
        }else{
            return view('ourlayouts.perangkat.data-perangkat',[
                'title' =>'Perangkat',
                'structures' => Structure::paginate(10),
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
        // dd("tes");
        return view('ourlayouts.perangkat.add-perangkat', [
            'title' =>'Perangkat',
            'structures' => Structure::all(),
            'positions' => Position::all(),
            'villagers' => Villager::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStructureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStructureRequest $request)
    {
        // dd('tes');
        $this->validate($request, [
            'position_id' => 'required',
            'villager_id' => 'required',
            'appointed_date' => 'required',
            'resign_date' => 'required',
            'status_jabat' => 'required',
            'image' => 'required|image'
        ]);
        // dd('tes2');
        Structure::create([
            'position_id' => $request->position_id,
            'villager_id' => $request->villager_id,
            'appointed_date' => $request->appointed_date,
            'resign_date' => $request->resign_date,
            'image' => $request->file('image')->store('image', 'public'),
        ]);
        // dd('tes3');
        return redirect('/data-perangkat');
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
    public function edit($id)
    {
        return view("ourlayouts.perangkat.updateperangkat", [
            "structure"=>Structure::findOrFail($id),
            'positions' => Position::all(),
            'villagers' => Villager::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStructureRequest  $request
     * @param  \App\Models\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStructureRequest $request, $id)
    {
        $structure = Structure::findOrFail($id);

        if($request->file('image')){
            unlink('storage/'.$structure->image);
            $structure->update([
                'position_id' => $request->position_id,
                'villager_id' => $request->villager_id,
                'appointed_date' => $request->appointed_date,
                'resign_date' => $request->resign_date,
                'status_jabat' => $request->status_jabat,
                'image'=> $request->file('image')->store('image', 'public'),
            ]);
        }else{
            $structure->update([
                'position_id' => $request->position_id,
                'villager_id' => $request->villager_id,
                'appointed_date' => $request->appointed_date,
                'resign_date' => $request->resign_date,
                'status_jabat' => $request->status_jabat,
            ]);
        }
        
        return redirect('/data-perangkat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd("tes");
        $structure = Structure::findOrFail($id);
        $structure->delete();
        return redirect('/data-perangkat');
    }
}
