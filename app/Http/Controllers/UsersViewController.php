<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Games;
use App\Models\Clubs;
use App\Models\Matchs;
use App\Models\Events;
use App\Models\League;
use App\Models\Venues;
use App\Models\players;

class UsersViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function games()
    {
        $games= games::all();

        return view('backend.userview.games', compact('games'));
    }

    public function clubs()
    {
        $clubs= clubs::all();

        return view('backend.userview.clubs', compact('clubs'));
    }
    public function matchs()
    {
        $matchs = Matchs::with(['Team1', 'Team2', 'Commentator', 'Promoter'])
                    ->orderBy('created_at', 'desc')
                    ->get();


        return view('backend.userview.matchs', compact('matchs'));
    }
    public function events()
{
    $events = Events::orderBy('created_at', 'desc')->get();

    return view('backend.userview.events', compact('events'));
}


    public function leagues()
    {
        $leagues= leagues::all();

        return view('backend.userview.leagues', compact('leagues'));
    }
    public function players()
    {
        $players= players::all();

        return view('backend.userview.players', compact('players'));
    }
    public function venue()
    {
        $venues = Venues::all();

        return view('backend.userview.venue', compact('venues'));
    }
}
