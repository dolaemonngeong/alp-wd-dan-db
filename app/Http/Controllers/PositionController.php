<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;
use App\Http\Requests\StorePositionRequest;
use App\Http\Requests\UpdatePositionRequest;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            return view('ourlayouts.jabatan.jabatan',[
                'title' =>'Jabatan',
                'positions' => Position::where('name','like','%'.$request->search.'%')->paginate()
            ]);
        }else{
            return view('ourlayouts.jabatan.jabatan',[
                'title' =>'Jabatan',
                'positions' => Position::paginate(5),
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
        return view('ourlayouts.jabatan.createposition', [
<<<<<<< Updated upstream
            'title' =>'Jabatan',
            "positions" => Position::all()
=======
            'title' =>'Tambah Jabatan',
            'positions' => Position::all()
>>>>>>> Stashed changes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePositionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePositionRequest $request)
    {
        $this->validate($request, [
<<<<<<< Updated upstream
            'name' => 'required'
=======
            'name' => 'required|string|max:60',
            'description' => 'required'
>>>>>>> Stashed changes
        ]);

        Position::create([
            'name' => $request->name,
        ]);
        return redirect('/jabatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function show(Position $position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("ourlayouts.jabatan.updateposition", [
<<<<<<< Updated upstream
            "theTitle" => "Membuat Jabatan Baru",
=======
            "maintitle" => "Perbarui Jabatan",
>>>>>>> Stashed changes
            "position"=>Position::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePositionRequest  $request
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePositionRequest $request, Position $position)
    {
        $position = Position::findOrFail($id);

        $position->update([
            "name" => $request->name
        ]);

        return redirect('/jabatan');
        // return view("updatejabatan", [
        //     "position"=>Position::findOrFail($id),
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function destroy(Position $position)
    {
        $position = Position::findOrFail($id);

        $position->delete();

        return redirect('/jabatan');
    }
}
