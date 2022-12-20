<?php

namespace App\Http\Controllers;

use App\Models\Template;
use App\Http\Requests\StoreTemplateRequest;
use App\Http\Requests\UpdateTemplateRequest;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if($request->has('search')){
            return view('ourlayouts.jenisSurat.data-jenisSurat',[
                'title' =>'Jenis Surat',
                'templates' => Template::where(
                    'name','like','%'.$request->search.'%')
                    ->orWhere('description', 'like', '%'.$request->search.'%')
                    ->orWhere('file', 'like', '%'.$request->search.'%')
                    ->get(),
                // 'books' => Book::whereRelation('Template', 'name', 'like','%'.$request->search.'%')->get()
            ]);
        }else{
            return view('ourlayouts.jenisSurat.data-jenisSurat',[
                'title' =>'Jenis Surat',
                // 'templates' => Template::paginate(20),
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
        return view('ourlayouts.jenissurat.add-jenissurat', [
            'title' =>'jenis surat',
            'templates' => Template::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTemplateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTemplateRequest $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:60',
            'description' => 'required|string|max:100',
            'file' => 'required',
            'screenshoot' => 'required|image',
        ]);

        Report::create([
            'name' => $request->name,
            'description' => $request->description,
            'file' => $request->file('file')->store('report', 'public'),
            'screenshoot' => $request->file('screenshoot')->store('report', 'public'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function show(Template $template)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("ourlayouts.jenissurat.updatejenissurat",[
            'template' => Template::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTemplateRequest  $request
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTemplateRequest $request, $id)
    {
        $template = Template::findOrFail($id);
        // dd('1');
        if($request->file('screenshoot')){
            // dd('b');
            unlink('storage/'.$template->screenshoot);
            $report->update([
                'name' => $request->name,
                'image' => $request->file('image')->store('report', 'public'),
                'description' => $request->description,
                'phone' => $request->phone,
                'proses' => $request->proses,
                // 'user_id' => auth()->user()->id
            ]);
        }
        if($request->file('file')){
            // dd('b');
            unlink('storage/'.$template->file);
            $report->update([
                'name' => $request->name,
                'file' => $request->file('file')->store('report', 'public'),
                'description' => $request->description,
                'phone' => $request->phone,
                'proses' => $request->proses,
                // 'user_id' => auth()->user()->id
            ]);
        }
            
        return redirect('/data-jenissurat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
