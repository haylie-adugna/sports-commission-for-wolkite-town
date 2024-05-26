<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\models\matchs;
use App\models\Events;
use App\Models\League;
use App\Models\Clubs;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function dashboard()
    {
        $usersByRole = Role::leftJoin('role_user', 'roles.id', '=', 'role_user.role_id')
                        ->leftJoin('users', 'role_user.user_id', '=', 'users.id')
                        ->select('roles.title as role', DB::raw('COUNT(users.id) as count'))
                        ->groupBy('roles.title')
                        ->get();

    return view('dashboard', compact('usersByRole'));
    }

    public function home()
    {
        $clubs = Clubs::with(['leagues'])->get();
        $matchs = Matchs::with(['clubs'])->get();
        $events = events::latest()->take(5)->get();


        return view('frontend.home', compact('matchs', 'clubs', 'events'));
    }
    public function football()
    {
        $clubs = Clubs::with(['leagues'])->get();
        $matchs = Matchs::with(['clubs'])->get();
        $events = events::latest()->take(5)->get();


        return view('frontend.football.football', compact('matchs', 'clubs', 'events'));
    }
    public function vollyball()
    {
        $leagues = League::with(['clubs'])->get();
        $matchs = Matchs::with(['clubs'])->get();
        $events = events::latest()->take(5)->get();


        return view('frontend.football.football', compact('matchs', 'leagues', 'events'));
    }
    public function basketball()
    {
        $leagues = League::with(['clubs'])->get();
        $matchs = Matchs::with(['clubs'])->get();
        $events = events::latest()->take(5)->get();


        return view('frontend.basketball.basketball', compact('matchs', 'leagues', 'events'));
    }
    public function culturalgames()
    {
        $leagues = League::with(['clubs'])->get();
        $matchs = Matchs::with(['clubs'])->get();
        $events = events::latest()->take(5)->get();


        return view('frontend.culturalgames.culturalgames', compact('matchs', 'leagues', 'events'));
    }



}
