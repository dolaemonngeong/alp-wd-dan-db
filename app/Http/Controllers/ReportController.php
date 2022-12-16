<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            return view('ourlayouts.pelaporan.data-pelaporan',[
                'title' =>'pelaporan',
                'reports' => Report::where(
                    'name','like','%'.$request->search.'%')
                    ->orWhere('description', 'like', '%'.$request->search.'%')
                    ->orWhere('phone', 'like', '%'.$request->search.'%')
                    ->paginate(),
        ]);
        }else{
            return view('ourlayouts.pelaporan.data-pelaporan',[
                'title' =>'pelaporan',
                'reports' => Report::paginate(20),
                'users' => User::all()
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
        return view('ourlayouts.pelaporan.createpelaporan', [
            'title' =>'pelaporan',
            'reports' => Report::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReportRequest $request)
    {
        $validatedData = $this->validate($request, [
            'name' => 'required|string|max:60',
            'image' => 'required|image',
            'description' => 'required|string|max:155',
            'phone' => 'required',
        ]);

        //kl eror pk ini
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:60',
        //     'image' => 'required|image',
        //     'description' => 'required|string|max:155',
        //     'phone' => 'required',
        // ]);

        // $validatedData['user_id'] = auth()->user()->id;

        Report::create([
            'name' => $request->name,
            'image' => $request->$request->file('image')->store('image', 'public'),
            'description' => $request->description,
            'phone' => $request->phone,
            'user_id' => auth()->user()->id
        ]);
        
        return redirect('/data-pelaporan');
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
    public function edit($id)
    {
        return view("ourlayouts.pelaporan.updatelaporan",[
            'report' => Report::findOrFail($id),
            'user' => User::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReportRequest  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReportRequest $request, $id)
    {
        $report = Report::findOrFail($id);

        if($request->file('image')){
            unlink('storage/'.$report->image);
            $report->update([
                'name' => $request->name,
                'image' => $request->$request->file('image')->store('image', 'public'),
                'description' => $request->description,
                'phone' => $request->phone,
                'user_id' => auth()->user()->id
            ]);
        }else{
            $report->update([
                'name' => $request->name,
                'description' => $request->description,
                'phone' => $request->phone,
                'user_id' => auth()->user()->id
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = Report::findOrFail($id);
        $report->delete();
        return redirect('/data-pelaporan');
    }
}
