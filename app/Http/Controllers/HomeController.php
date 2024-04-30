<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\models\matchs;
use App\models\Events;
use App\Models\League;
class HomeController extends Controller
{

    public function dashboard()
    {
        return view('dashboard');
    }
    public function home()
    {
        $leagues = League::with(['clubs'])->get();
        $matchs = Matchs::with(['clubs'])->get();
        $events = events::all();


        return view('frontend.home', compact('matchs', 'leagues', 'events'));
    }


}
