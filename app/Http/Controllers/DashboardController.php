<?php

namespace App\Http\Controllers;

use App\Models\Comer;
use App\Models\Letter;
use App\Models\Report;
use App\Models\Villager;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminview(){
        $sumComers = Comer::count();
        $sumVillagers = Villager::where('status','hidup')->count();
        $sumLetters = Letter::where('proses','menunggu')->count();
        $sumReports = Report::where('proses','menunggu')->count();

        return view('admin.index', [
            'sumComers' => $sumComers,
            'sumVillagers' => $sumVillagers,
            'sumLetters' => $sumLetters,
            'sumReports' => $sumReports,
            'letters' => Letter::paginate(10),
        ]);
    }
}
