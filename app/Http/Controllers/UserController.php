<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            return view('ourlayouts.user.data-user',[
                'title' =>'User',
                'users' => User::where('email','like','%'.$request->search.'%')->orWhere('description', 'like', '%'.$request->search.'%')->paginate()
            ]);
        }else{
            return view('ourlayouts.user.data-user',[
                'title' =>'User',
                 'users' => User::paginate(10),
            ]);
        }
    }
}
