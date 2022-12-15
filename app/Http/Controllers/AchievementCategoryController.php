<?php

namespace App\Http\Controllers;

use App\Models\Achievement_category;
use App\Http\Requests\StoreAchievement_categoryRequest;
use App\Http\Requests\UpdateAchievement_categoryRequest;

class AchievementCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            return view('ourlayouts.achievementcategory.achievementcategory',[
                'title' =>'Achievement category',
                'achievementcategorys' => Position::where('name','like','%'.$request->search.'%')->paginate()
            ]);
        }else{
            return view('ourlayouts.achievementcategory.achievementcategory',[
                'title' =>'Achievement category',
                'achievementcategorys' => Position::paginate(5),
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
        return view('ourlayouts.jabatan.createposition', [
            'title' =>'Jabatan',
            "achievementcategorys" => Position::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAchievement_categoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAchievement_categoryRequest $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        Position::create([
            'name' => $request->name,
        ]);
        return redirect('/jabatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Achievement_category  $achievement_category
     * @return \Illuminate\Http\Response
     */
    public function show(Achievement_category $achievement_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Achievement_category  $achievement_category
     * @return \Illuminate\Http\Response
     */
    public function edit(Achievement_category $achievement_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAchievement_categoryRequest  $request
     * @param  \App\Models\Achievement_category  $achievement_category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAchievement_categoryRequest $request, Achievement_category $achievement_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Achievement_category  $achievement_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achievement_category $achievement_category)
    {
        //
    }
}
