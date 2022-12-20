<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< Updated upstream
        //
=======
        // if($request->has('search')){
        //     return view('ourlayouts.pelaporan.data-pelaporan',[
        //         'title' =>'pelaporan',
        //         'reports' => Report::where(
        //             'name','like','%'.$request->search.'%')
        //             ->orWhere('description', 'like', '%'.$request->search.'%')
        //             ->orWhere('phone', 'like', '%'.$request->search.'%')
        //             ->paginate(),
        // ]);
        // }else{
            return view('ourlayouts.pelaporan.data-pelaporan',[
                'title' =>'pelaporan',
                'proses' =>'',
                'search' =>'',
                'reports' => Report::paginate(10)
            ]);
        // }
    }

    public function filterstatus(Request $request){
        // dd('tes');

        // Get filter criteria from the form submission
        $search = $request->input('search');
        $proses = $request->input('proses');

        return view('ourlayouts.pelaporan.data-pelaporan', [
            'pagetitle' =>'pelaporan',
            'search' => $search,
            'proses' => $proses,
            'maintitle' =>'pelaporan',
            'reports' => Report::where(function($query) use ($search) {
                $query->where('name', 'like', '%'.$search.'%')
                      ->orWhere('description', 'like', '%'.$search.'%')
                      ->orWhere('phone', 'like', '%'.$search.'%');
            })
            ->when($proses != '#', function($query) use ($proses) {
                $query->where('proses', $proses);
            })
            ->paginate()
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
<<<<<<< Updated upstream
        //
=======
        return view('ourlayouts.pelaporan.add-pelaporan', [
            'title' =>'pelaporan',
            'reports' => Report::all(),
        ]);
>>>>>>> Stashed changes
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReportRequest $request)
    {
<<<<<<< Updated upstream
        //
=======
        // dd('tes');
        $validatedData = $this->validate($request, [
            'name' => 'required|string|max:60',
            'image' => 'required|image',
            'phone' => 'required|numeric|digits:10',
        ]);

        //kl eror pk ini
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:60'|string|max:60',
        //     'image' => 'required|image',
        //     'description' => 'required|string|max:155',
        //     'phone' => 'required|numeric|digits:13',
        // ]);

        // $validatedData['user_id'] = auth()->user()->id;

        if($request->description=""){
            Report::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'user_id' => auth()->user()->id,
            'image' => $request->file('image')->store('report', 'public'),
        ]);
        }else{
            Report::create([
                'name' => $request->name,
                'description' => $request->description,
                'phone' => $request->phone,
                'user_id' => auth()->user()->id,
                'image' => $request->file('image')->store('report', 'public')
            ]);
        }
        
        
        if(auth()->user()->status == 'admin'){
            // dd('admin');
            return redirect('/data-pelaporan');
        }else{
            // dd('member');
            //cari cara biar ini langsung ada tulisan berhasil
            return redirect('/');
        }

>>>>>>> Stashed changes
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
<<<<<<< Updated upstream
        //
=======
        // dd('t');
        return view("ourlayouts.pelaporan.updatepelaporan",[
            'report' => Report::findOrFail($id),
            'user' => User::all(),
        ]);
>>>>>>> Stashed changes
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReportRequest  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReportRequest $request, Report $report)
    {
<<<<<<< Updated upstream
        //
=======
        // dd('a');
        $report = Report::findOrFail($id);
        // dd('1');
        if($request->file('image')){
            // dd('b');
            unlink('storage/'.$report->image);
            $report->update([
                'name' => $request->name,
                'image' => $request->file('image')->store('report', 'public'),
                'description' => $request->description,
                'phone' => $request->phone,
                'proses' => $request->proses,
                // 'user_id' => auth()->user()->id
            ]);
        }else{
            // dd('c');
            $report->update([
                'name' => $request->name,
                'description' => $request->description,
                'phone' => $request->phone,
                'proses' => $request->proses,
                // 'user_id' => auth()->user()->id
            ]);
        }
// dd('b');
        return redirect('/data-pelaporan');
>>>>>>> Stashed changes
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
<<<<<<< Updated upstream
        //
=======
        $report = Report::findOrFail($id);
        $report->delete();
        unlink('storage/'.$report->image);
        return redirect('/data-pelaporan');
>>>>>>> Stashed changes
    }
}
