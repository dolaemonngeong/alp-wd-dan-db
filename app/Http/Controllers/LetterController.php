<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use App\Models\Template;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLetterRequest;
use App\Http\Requests\UpdateLetterRequest;

class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // if($request->has('search')){
        //     // dd('tes');
        //     return view('ourlayouts.surat.data-surat',[
        //         'title' =>'Surat',
        //         'letters' => Letter::where(
        //             'name','like','%'.$request->search.'%')
        //             ->orWhere('email', 'like', '%'.$request->search.'%')
        //             ->orWhere('phone', 'like', '%'.$request->search.'%')
        //             ->orWhere('file', 'like', '%'.$request->search.'%')
        //             ->orWhere('message', 'like', '%'.$request->search.'%')
        //             ->paginate(),
        //         // 'templates' => Template::whereRelation('template', 'name', 'like','%'.$request->search.'%')->get(),
        //     ]);
        // }else{
            return view('ourlayouts.surat.data-surat',[
                'title' =>'Surat',
                'proses' =>'',
                'search' =>'',
                'letters' => Letter::paginate(10)
            ]);
        //}
    }

    public function filterstatus(Request $request){
        // dd('tes');

        // Get filter criteria from the form submission
        $search = $request->input('search');
        $proses = $request->input('proses');

        return view('ourlayouts.surat.data-surat', [
            'pagetitle' =>'surat',
            'search' => $search,
            'proses' => $proses,
            'maintitle' =>'surat',
            'letters' => Letter::where(function($query) use ($search) {
                $query->where('name', 'like', '%'.$search.'%')
                      ->orWhere('phone', 'like', '%'.$search.'%')
                      ->orWhere('email', 'like', '%'.$search.'%');
            })
            ->when($proses != '#', function($query) use ($proses) {
                $query->where('proses', $proses);
            })
            ->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ourlayouts.surat.add-surat', [
            'maintitle' =>'Pelayanan Surat Online',
            'templates' => Template::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLetterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLetterRequest $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:60',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:10',
            'template_id' => 'required',
            'file' => 'required'
        ]);

        // if($request->message=""){
            // dd('ga masuk');
            // Letter::create([
            //         'name' => $request->name,
            //         'email' => $request->email,
            //         'phone' => $request->phone,
            //         'template_id' => $request->template_id,
            //         'file'=>$request->file('file')->store('letter', 'public'),
            //         'user_id' => auth()->user()->id,
            // ]);
        // }else{
            Letter::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'template_id' => $request->template_id,
                'file'=>$request->file('file')->store('letter', 'public'),
                'user_id' => auth()->user()->id,
                'message' => $request->message
            ]);
        //}

        if(auth()->user()->status == 'admin'){
            // dd('admin');
            return redirect('/data-surat');
        }else{
            // dd('member');
            //cari cara biar ini langsung ada tulisan berhasil
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function show(Letter $letter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("ourlayouts.surat.update-suratonline",[
            'letter' => Letter::findOrFail($id),
            'templates' => Template::all(),
            'maintitle' => 'Perbarui Surat Online'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLetterRequest  $request
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLetterRequest $request, $id)
    {
        // dd('a');
        $letter = Letter::findOrFail($id);

        if($request->file('file')){
            // dd('t');
            unlink('storage/'.$request->file);
            $letter->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'template_id' => $request->template_id,
                'file'=>$request->file('file')->store('letter', 'public'),
                'message' => $request->message,
                'proses' => $request->proses,
            ]);
        }else{
            // dd('a');
            $letter->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'template_id' => $request->template_id,
                'message' => $request->message,
                'proses' => $request->proses,
            ]);
        }
        return redirect('/data-surat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $letter = Letter::findOrFail($id);
        $letter->delete();
        unlink('storage/'.$letter->file);
        return redirect('/data-surat');
    }
}
