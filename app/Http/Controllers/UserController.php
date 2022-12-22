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
                'users' => User::where('email','like','%'.$request->search.'%')
                ->orWhere('name', 'like', '%'.$request->search.'%')
                ->orWhere('status', 'like', '%'.$request->search.'%')
                ->paginate(10)
            ]);
        }else{
            return view('ourlayouts.user.data-user',[
                'title' =>'User',
                 'users' => User::paginate(10),
            ]);
        }
    }
}
