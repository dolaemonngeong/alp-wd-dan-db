<?php

namespace App\Http\Controllers;

use App\Models\Comer;
use App\Models\Villager;
use Illuminate\Http\Request;
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
<<<<<<< Updated upstream
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
=======
        $sort = $request->query('sort');
        $search = $request->query('search');
        $comers = Comer::select('*')
        ->with('villager') 
        ->when($search !='', function($query) use ($search) {
            $query->whereHas('villager', function($query) use ($search) {
                $query->where('name', 'like', '%'.$search.'%');
            })
            ->orWhere('name', 'like', '%'.$search.'%');
        })
        ->when($sort != '#', function($query) use ($sort) {
            if ($sort === 'asc') {
                $query->orderBy('birth_date', 'asc');
            } else if ($sort === 'desc') {
                $query->orderBy('birth_date', 'desc');
            }
        })
        ->paginate(10);

        // if ($search) {
        //     $comers->where('name', 'like', '%'.$search.'%')
        //     ->orWhereHas('villager','name','like','%'.$search.'%');
        // }

        // $comers = $comers->get();

        return view('ourlayouts.pendatang.data-pendatang', [
            'comers' => $comers,
            'search' => $search,
            'sort' => $sort,
        ]);
        // if($request->has('search')){
        //     return view('ourlayouts.pendatang.data-pendatang',[
        //         'title' =>'Pendatang',
        //         'comers' => Comer::where(
        //             'name','like','%'.$request->search.'%')
        //             ->orWhere('birth_place', 'like', '%'.$request->search.'%')
        //             ->orWhere('birth_date', 'like', '%'.$request->search.'%')
        //             ->orWhere('nik', 'like', '%'.$request->search.'%')
        //             ->orWhere('phone', 'like', '%'.$request->search.'%')
        //             ->orWhere('role', 'like', '%'.$request->search.'%')
        //             ->orWhere('gender', 'like', '%'.$request->search.'%')
        //             // ->orWhere('status', 'like', '%'.$request->search.'%')
        //             ->paginate(),
        //         // 'villagers' => Villager::whereRelation('name', 'like','%'.$request->search.'%')->get()
        //     ]);
        // }else{
        //     return view('ourlayouts.pendatang.data-pendatang',[
        //         'title' =>'Pendatang',
        //         'comers' => Comer::paginate(100),
        //         'villagers' => Villager::all()
        //     ]);
        // }
    }

    public function showGraphic(){

        $males = Comer::where('gender', 'laki-laki')->count();
        $females = Comer::where('gender', 'perempuan')->count();

        return view('ourlayouts.pendatang.graphic-pendatang', [
            'males' => $males,
            'females' => $females
        ]);
>>>>>>> Stashed changes
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ourlayouts.pendatang.reg-pendatang', [
            'maintitle' =>'Registrasi Pendatang',
            'comers' => Comer::all(),
            'villagers' => Villager::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComerRequest $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:60',
            'birth_place' => 'required',
            'birth_date' => 'required',
            'nik' => 'required|numeric|digits:16',
            'phone' => 'required|numeric|digits:13',
            'role' => 'required',
            'gender' => 'required',
            'villager_id' => 'required',
        ]);

        Comer::create([
            'name' => $request->name,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'nik' => $request->nik,
            'phone' => $request->phone,
            'role' => $request->role,
            'gender' => $request->gender,
            'villager_id' => $request->villager_id,
        ]);
        return redirect('/data-pendatang');
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
    public function edit($id)
    {
        return view("ourlayouts.pendatang.update-pendatang", [
            'maintitle' => 'Ubah pendatang',
            "comer"=>Comer::findOrFail($id),
            'villagers' => Villager::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComerRequest  $request
     * @param  \App\Models\Comer  $comer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComerRequest $request, $id)
    {
        $comer = Comer::findOrFail($id);

        $comer->update([
            "name" => $request->name,
            "birth_place" => $request->birth_place,
            "birth_date" => $request->birth_date,
            "nik" => $request->nik,
            "phone" => $request->phone,
            "role" => $request->role,
            "gender" => $request->gender,
            "villager_id" => $request->villager_id,
        ]);

        return redirect('/data-pendatang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comer  $comer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comer = Comer::findOrFail($id);

        $comer->delete();

        return redirect('/data-pendatang');
    }
}
