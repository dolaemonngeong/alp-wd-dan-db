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
        // if($request->has('search')){
        //     $searchTerm = $request->search;
        //     return view('ourlayouts.perangkat.data-perangkat',[
        //         'title' =>'Perangkat',
        //         'structures' => Structure::where(function($query) use ($searchTerm){
        //             $query->where('appointed_date','like','%'.$searchTerm.'%')
        //             ->orWhere('resign_date', 'like', '%'.$searchTerm.'%')
        //             ->orWhere('status_jabat', 'like', '%'.$searchTerm.'%');
        //         })->orWhereHas('villager', function($query) use ($searchTerm){
        //             $query->where('name','like','%'.$searchTerm.'%');
        //         })->orWhereHas('position', function($query) use ($searchTerm){
        //             $query->where('name','like','%'.$searchTerm.'%');
        //         })->paginate(),
        //     ]);
        // }else{
            return view('ourlayouts.perangkat.data-perangkat',[
                'title' =>'Perangkat',
                'search' =>'',
                'status_jabat' =>'',
                'structures' => Structure::paginate(10),
                'positions' => Position::all(),
                'villagers' => Villager::all(),
            ]);
        //}
    }

    public function filterstatus(Request $request){

        // Get filter criteria from the form submission
        $search = $request->input('search');
        $status_jabat = $request->input('status_jabat');

        return view('ourlayouts.perangkat.data-perangkat', [
            'pagetitle' =>'perangkat',
            'search' => $search,
            'status_jabat' => $status_jabat,
            'maintitle' =>'perangkat',
            'structures' => Structure::select("*")
            ->with('position','villager')
            ->when($search !='', function($query) use ($search) {
                $query->whereHas('villager', function($query) use ($search) {
                    $query->where('name', 'like', '%'.$search.'%');
                })
                ->orWhere('appointed_date', 'like', '%'.$search.'%')
                ->orWhere('resign_date', 'like', '%'.$search.'%');
            })
            ->when($status_jabat != '#', function($query) use ($status_jabat) {
                $query->where('status_jabat', $status_jabat);
            })
            ->paginate(10)
        ]);
    }

    public function showGraphic()
    {
        //inisialisasi
        $sumVillagers = Villager::where('status','hidup')->count();
        $girls = Villager::where('status','hidup')->where('gender','perempuan')->count();
        $boys = Villager::where('status','hidup')->where('gender','laki-laki')->count();
        $percentageGirls = $girls / $sumVillagers * 100;
        $percentageBoys = $boys / $sumVillagers * 100;

        //kategori usia
        $now = Carbon::now();
        $ageGender = Villager::select('age_category',
        Villager::raw("SUM(CASE WHEN gender = 'laki-laki' THEN 1 ELSE 0 END) as male,
            SUM(CASE WHEN gender = 'perempuan' THEN 1 ELSE 0 END) as female"))
            ->join(Villager::raw("(SELECT id,
                CASE
                    WHEN DATE_FORMAT(NOW(), '%Y') - DATE_FORMAT(birth_date, '%Y') - (DATE_FORMAT(NOW(), '00-%m-%d') < DATE_FORMAT(birth_date, '00-%m-%d')) < 1 THEN 'bayi'
                    WHEN DATE_FORMAT(NOW(), '%Y') - DATE_FORMAT(birth_date, '%Y') - (DATE_FORMAT(NOW(), '00-%m-%d') < DATE_FORMAT(birth_date, '00-%m-%d')) BETWEEN 1 AND 11 THEN 'anak-anak'
                    WHEN DATE_FORMAT(NOW(), '%Y') - DATE_FORMAT(birth_date, '%Y') - (DATE_FORMAT(NOW(), '00-%m-%d') < DATE_FORMAT(birth_date, '00-%m-%d')) BETWEEN 12 AND 17 THEN 'remaja'
                    WHEN DATE_FORMAT(NOW(), '%Y') - DATE_FORMAT(birth_date, '%Y') - (DATE_FORMAT(NOW(), '00-%m-%d') < DATE_FORMAT(birth_date, '00-%m-%d')) BETWEEN 18 AND 64 THEN 'dewasa'
                ELSE 'lansia'
                END as age_category
                FROM villagers) as sub"), function($join)
            {
                $join->on('villagers.id', '=', 'sub.id');
            })
            ->where('status','hidup')
            ->groupBy('age_category')
            ->get();

        //buat grafik status
        $villagers1 = Villager::select('gender', 'status')->get();

        //buat grafik peran
        $villagers2 = Villager::select('gender', 'role','status')->get();

        return view('ourlayouts.penduduk.graphic-penduduk', [
            'sumVillagers' => $sumVillagers,
            'percentageGirls' => $percentageGirls,
            'percentageBoys' => $percentageBoys,
            'ageGender' => $ageGender,
            'villagers1' => $villagers1,
            'villagers2' => $villagers2,
        ]);
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
        // dd('tes');
        // $this->validate($request, [
        //     'position_id' => 'required',
        //     'villager_id' => 'required',
        //     'appointed_date' => 'required',
        //     'resign_date' => 'required',
        //     'status_jabat' => 'required',
        //     'image' => 'required|image'
        // ]);
        // dd('tes2');
        // $villagers = Villager::all();
        // foreach($villagers as $villager){
        //     if($request->villager_id == $villager->id){
        //         return redirect('/add-perangkat');
        //     }else{
                Structure::create([
                    'position_id' => $request->position_id,
                    'villager_id' => $request->villager_id,
                    'appointed_date' => $request->appointed_date,
                    'resign_date' => $request->resign_date,
                    'image' => $request->file('image')->store('image', 'public'),
                ]);
                // dd('tes3');
                return redirect('/data-perangkat');
        //     }
        // }
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
        return view("ourlayouts.perangkat.updateperangkat", [
            'maintitle' => 'Ubah Perangkat',
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
        // dd("tes");
        $structure = Structure::findOrFail($id);
        $structure->delete();
        unlink('storage/'.$structure->image);
        return redirect('/data-perangkat');
    }
}
