<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Http\Requests\StoreAchievementRequest;
use App\Http\Requests\UpdateAchievementRequest;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if($request->has('search')){
            return view('ourlayouts.prestasi.',[
                'title' =>'Prestasi',
                'achievements' => Achievement::where(
                    'name','like','%'.$request->search.'%')
                    ->orWhere('status', 'like', '%'.$request->search.'%')
                    ->paginate(),
                // 'books' => Book::whereRelation('Achievement', 'name', 'like','%'.$request->search.'%')->get()
            ]);
        }else{
            return view('ourlayouts.prestasi.data-penduduk',[
                'title' =>'Prestasi',
                'achievements' => Achievement::paginate(20),
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
        return view('ourlayouts.prestasi.add-prestasi', [
            'maintitle' =>'Tambah Prestasi Desa',
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAchievementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAchievementRequest $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:60',
            'image' => 'required|image',
            'category_id' => 'required',
            'description' => 'required|string|max:500',
            'date_achievement' => 'required'
        ]);

        Achievement::create([
            'name' => $request->name,
            'image'=>$request->file('image')->store('letter', 'public'),
            'category_id' => $request->category_id,
            'description' => $request->description,
            'date_achievement' => $request->date_achievement,
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function show(Achievement $achievement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("ourlayouts.prestasi.update-prestasi",[
            'achievement' => Achievement::findOrFail($id),
            'category' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAchievementRequest  $request
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAchievementRequest $request, Achievement $achievement)
    {
        $achievement = Achievement::findOrFail($id);

        if($request->file('file')){
            // dd('t');
            unlink('storeage/'.$request->file);
            $achievement->update([
                'name' => $request->name,
                'image'=>$request->file('image')->store('achievement', 'public'),
                'category_id' => $request->category_id,
                'description' => $request->description,
                'date_achievement' => $request->date_achievement,
            ]);
        }else{
            // dd('a');
            $achievement->update([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'date_achievement' => $request->date_achievement,
            ]);
        }
        return redirect('/data-surat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achievement $achievement)
    {
        $achievement = Achievement::findOrFail($id);
        $achievement->delete();
        unlink('storage/'.$achievement->file);
        return redirect('/data-prestasi');
    }
}
