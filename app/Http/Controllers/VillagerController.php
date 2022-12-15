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
    public function index(Request $request)
    {
        if($request->has('search')){
            return view('ourlayouts.penduduk.data-penduduk',[
                'title' =>'Penduduk',
                'villagers' => Villager::where(
                    'name','like','%'.$request->search.'%')
                    ->orWhere('birth_place', 'like', '%'.$request->search.'%')
                    ->orWhere('birth_date', 'like', '%'.$request->search.'%')
                    ->orWhere('nik', 'like', '%'.$request->search.'%')
                    ->orWhere('phone', 'like', '%'.$request->search.'%')
                    ->orWhere('role', 'like', '%'.$request->search.'%')
                    ->orWhere('gender', 'like', '%'.$request->search.'%')
                    ->orWhere('status', 'like', '%'.$request->search.'%')
                    ->paginate(),
                // 'books' => Book::whereRelation('villager', 'name', 'like','%'.$request->search.'%')->get()
            ]);
        }else{
            return view('ourlayouts.penduduk.data-penduduk',[
                'title' =>'Penduduk',
                'villagers' => Villager::paginate(20),
                // 'books' => Book::all()
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
        return view('ourlayouts.penduduk.reg-penduduk', [
            'title' =>'Penduduk',
            "positions" => Villager::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVillagerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVillagerRequest $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required',
            'nik' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'gender' => 'required',
        ]);

        Villager::create([
            'name' => $request->name,
            'description' => $request->description,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'nik' => $request->nik,
            'phone' => $request->phone,
            'role' => $request->role,
            'gender' => $request->gender,
            'status' => 'hidup',
        ]);
        return redirect('/data-penduduk');
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
    public function edit($id)
    {
        return view("ourlayouts.penduduk.update-penduduk", [
            "theTitle" => "Membuat Penduduk Baru",
            "villager"=>Position::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVillagerRequest  $request
     * @param  \App\Models\Villager  $villager
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVillagerRequest $request, $id)
    {
        $position = Position::findOrFail($id);

        $position->update([
            "name" => $request->name,
            "birth_place" => $request->birth_place,
            "birth_date" => $request->birth_date,
            "nik" => $request->nik,
            "phone" => $request->phone,
            "role" => $request->role,
            "gender" => $request->gender,
        ]);

        return redirect('/data-penduduk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Villager  $villager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Villager $villager)
    {
        $position = Position::findOrFail($id);

        $position->update([
            "status" => $request->status,
        ]);

        return redirect('/data-penduduk');
    }
}
