<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFinanceRequest;
use App\Http\Requests\UpdateFinanceRequest;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // if($request->has('search')){
        //     return view('ourlayouts.keuangan.data-keuangan',[
        //         'title' =>'Keuangan',
        //         'finances' => Finance::where('description','like','%'.$request->search.'%')->orWhere('volume', 'like', '%'.$request->search.'%')->orWhere('unit', 'like', '%'.$request->search.'%')->orWhere('date', 'like', '%'.$request->search.'%')->orWhere('price', 'like', '%'.$request->search.'%')->orWhere('total', 'like', '%'.$request->search.'%')->paginate()
        //     ]);
        // }else{
        //     return view('ourlayouts.keuangan.data-keuangan',[
        //         'title' =>'Keuangan',
        //         'finances' => Finance::paginate(10),
        //     ]);
        // }
        $sort = $request->query('sort');
        $search = $request->query('search');
        $totkeuangan = Finance::sum('total') ;
        $finances = Finance::select('*')
        ->when($search !='', function($query) use ($search) {
            $query->where('description', 'like', '%'.$search.'%')
            ->orWhere('price', 'like', '%'.$search.'%')
            ->orWhere('total', 'like', '%'.$search.'%');
        })
        ->when($sort != '#', function($query) use ($sort) {
            if ($sort === 'asc') {
                $query->orderBy('date', 'asc');
            } else if ($sort === 'desc') {
                $query->orderBy('date', 'desc');
            }
        })
        ->paginate(10);
        return view('ourlayouts.keuangan.data-keuangan', [
            'finances' => $finances,
            'search' => $search,
            'sort' => $sort,
            'totkeuangan' => $totkeuangan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ourlayouts.keuangan.add-keuangan', [
            'title' =>'Keuangan',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFinanceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFinanceRequest $request)
    {
        // $this->validate($request, [
        //     'description' => 'required',
        //     'volume' => 'required',
        //     'unit' => 'required',
        //     'date' => 'required',
        //     'price' => 'required'
        // ]);

        Finance::create([
            'description' => $request->description,
            'volume' => $request->volume,
            'unit' => $request->unit,
            'date' => $request->date,
            'price' => $request->price,
            'total' => $request->volume * $request->price
        ]);
        return redirect('/data-keuangan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function show(Finance $finance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("ourlayouts.keuangan.updatekeuangan", [
            "theTitle" => "Ubah Keuangan",
            "finance"=>Finance::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFinanceRequest  $request
     * @param  \App\Models\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFinanceRequest $request, $id)
    {
        $finance = Finance::findOrFail($id);

        $finance->update([
            "description" => $request->description,
            "volume" => $request->volume,
            "unit" => $request->unit,
            "date" => $request->date,
            "price" => $request->price,
            "total" => $request->volume * $request->price
        ]);

        return redirect('/data-keuangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $finance = Finance::findOrFail($id);

        $finance->delete();

        return redirect('/data-keuangan');
    }
}
