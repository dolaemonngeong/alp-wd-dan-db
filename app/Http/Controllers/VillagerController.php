<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Villager;
use Illuminate\Http\Request;
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
        // if($request->has('query')){
        //
        //     return view('ourlayouts.penduduk.data-penduduk',[
        //         'pagetitle' =>'Penduduk',
        //         'maintitle' =>'Penduduk',
        //         'villagers' => Villager::where(
        //             'name','like','%'.$request->input('query').'%')
        //             // ->orWhere('birth_place', 'like', '%'.$request->input('query').'%')
        //             // ->orWhere('birth_date', 'like', '%'.$request->input('query').'%')
        //             ->orWhere('nik', 'like', '%'.$request->input('query').'%')
        //             // ->orWhere('phone', 'like', '%'.$request->input('query').'%')
        //             // ->orWhere('role', 'like', '%'.$request->input('query').'%')
        //             // ->orWhere('gender', 'like', '%'.$request->input('query').'%')
        //             // ->orWhere('status', 'like', '%'.$request->input('query').'%')
        //             ->paginate(),
        //     ]);
        // }else{
            return view('ourlayouts.penduduk.data-penduduk',[
                'title' =>'Penduduk',
                'villagers' => Villager::paginate(100),
                'search' => '',
                'status' => '',
            ]);
        // }
    }

    public function filterstatus(Request $request){
        // dd('tes');

        // ambil dari form
        $search = $request->input('search');
        $status = $request->input('status');

        return view('ourlayouts.penduduk.data-penduduk', [
            'pagetitle' =>'Penduduk',
            'search' => $search,
            'status' => $status,
            'maintitle' =>'Penduduk',
            'villagers' => Villager::where(function($query) use ($search) {
                $query->where('name', 'like', "%$search%")
                      ->orWhere('nik', 'like', "%$search%")
                      ->orWhere('phone', 'like', "%$search%");
            })
            ->when($status != '#', function($query) use ($status) {
                $query->where('status', $status);
            })
            ->paginate()
        ]);
    }

    public function showGraphic()
    {
        //awal
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
        return view('ourlayouts.penduduk.reg-penduduk', [
            'pagetitle' =>'Rgistrasi Penduduk',
            'maintitle' =>'Rgistrasi Penduduk',
            "villagers" => Villager::all()
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
            'name' => 'required|string|max:60',
            'birth_place' => 'required',
            'birth_date' => 'required',
            'nik' => 'required|numeric|digits:16',
            'phone' => 'required|numeric|digits:12',
            'role' => 'required',
            'gender' => 'required',
        ]);

        Villager::create([
            'name' => $request->name,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'nik' => $request->nik,
            'phone' => $request->phone,
            'role' => $request->role,
            'gender' => $request->gender,
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
    public function edit(Villager $villager)
    {
        return view("ourlayouts.penduduk.update-penduduk", [
            "maintitle" => "Perbarui Penduduk",
            "pagetitle" => "Perbarui Penduduk",
            "villager"=>Villager::findOrFail($id)
        ]);
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
        //dd("tes");
        // dd($villager->status);
        // $villager = Villager::where('id', $id)->update([
        //     "status" => $request->status,
        // ]);
       // dd($request->status);
        // $cek=$villager->update([
        //     "status" => 'meninggal',
        // ]);
    //    dd($request->id);
    //    dd($request->status);
    //    dd($villager);
    //    dd("tes2");
    //     //dd($cek);
    //     return redirect('/data-penduduk');
    }
}
