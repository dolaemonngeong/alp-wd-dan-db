<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTemplateRequest;
use App\Http\Requests\UpdateTemplateRequest;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            return view('ourlayouts.jenissurat.data-jenissurat',[
                'maintitle' =>'Daftar Jenis Surat',
                'templates' => Template::where(
                    'name','like','%'.$request->search.'%')
                    ->orWhere('description', 'like', '%'.$request->search.'%')
                    ->orWhere('file', 'like', '%'.$request->search.'%')
                    ->get(),
                // 'books' => Book::whereRelation('Template', 'name', 'like','%'.$request->search.'%')->get()
            ]);
        }else{
            return view('ourlayouts.jenissurat.data-jenissurat',[
                'maintitle' =>'Daftar Jenis Surat',
                'templates' => Template::paginate(20),
                // 'books' => Book::all()
            ]);
        }
    }

    public function theview(){
        return view('ourlayouts.template',[
            'templates' => Template::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('ini template create');
        return view('ourlayouts.jenissurat.add-jenissurat', [
            'maintitle' =>'Tambah Jenis Surat',
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

        Template::create([
            'name' => $request->name,
            'description' => $request->description,
            'file' => $request->file('file')->store('template', 'public'),
            'screenshoot' => $request->file('screenshoot')->store('template', 'public'),
        ]);
        return redirect('/data-jenissurat');
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
        return view("ourlayouts.jenissurat.update-jenissurat",[
            'template' => Template::findOrFail($id),
            'maintitle' => 'Ubah Jenis Surat'
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
            $template->update([
                'name' => $request->name,
                'screenshoot' => $request->file('screenshoot')->store('template', 'public'),
                'description' => $request->description,
                // 'user_id' => auth()->user()->id
            ]);
        }
        else if($request->file('file')){
            // dd('b');
            unlink('storage/'.$template->file);
            $template->update([
                'name' => $request->name,
                'file' => $request->file('file')->store('template', 'public'),
                'description' => $request->description,
                // 'user_id' => auth()->user()->id
            ]);
        }
        else if($request->file('file') && $request->file('screenshoot')){
            // dd('b');
            unlink('storage/'.$template->file);
            $template->update([
                'name' => $request->name,
                'file' => $request->file('file')->store('template', 'public'),
                'description' => $request->description,
                // 'user_id' => auth()->user()->id
            ]);
        }else{
            $template->update([
                'name' => $request->name,
                'description' => $request->description,
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
