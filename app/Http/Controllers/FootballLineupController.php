<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lineup\FootballLineupCreateRequest;
use App\Models\FootballLineup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FootballLineupController extends Controller
{
    public function index()
    {
        $footballLineups = FootballLineup::all();
        return view('backend.lineup.football.index', compact('footballLineups'));
    }
    public function create()
    {
        return view('backend.lineup.football.create');
    }

    public function store(FootballLineupCreateRequest $request)
    {
        // Validate the request using the FootballLineupCreateRequest

        // Get the authenticated user's club ID

// Process the main squad players
for ($i = 1; $i <= 11; $i++) {
    FootballLineup::create([
        'jersey_number' => $request->input("jerseyNumber{$i}"),
        'player_name' => $request->input("playerName{$i}"),
        'position' => $request->input("position{$i}"),
        'captain' => $request->input('captain') == $i,
    ]);
}

// Process the substitute players
for ($i = 1; $i <= 3; $i++) {
    FootballLineup::create([
        'jersey_number' => $request->input("substituteJerseyNumber{$i}"),
        'player_name' => $request->input("substitutePlayerName{$i}"),
        'position' => $request->input("substitutePosition{$i}"),
        'reason_for_substitution' => $request->input("substituteReason{$i}"),
    ]);
}


        // Redirect to a success page or route
        return redirect()->route('football_lineup.create')->with('status', 'Football lineup created successfully!');
    }
    public function show($id)
    {
        $footballLineup = FootballLineup::findOrFail($id);

        return view('backend.lineup.football.show', compact('footballLineup'));
    }
    public function edit($id)
    {
        $footballLineup = FootballLineup::findOrFail($id);

        return view('backend.lineup.football.update', compact('footballLineup'));
    }
    public function update(FootballLineupCreateRequest $request, $id)
    {
        // Validation and update logic from the previous example
    }

    public function destroy($id)
    {
        $footballLineup = FootballLineup::findOrFail($id);
        $footballLineup->delete();

        return redirect()->route('football-lineup.index')->with('success', 'Football lineup deleted successfully!');
    }

}
