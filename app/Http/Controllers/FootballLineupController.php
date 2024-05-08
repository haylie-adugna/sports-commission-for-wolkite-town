<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lineup\FootballLineupCreateRequest;
use App\Models\FootballLineup;
use Illuminate\Http\Request;
use App\Models\Clubs;
use App\Models\MatchRecored;
use App\Models\Player;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class FootballLineupController extends Controller
{
    public function index()
{
    $footballclubLineup = FootballLineup::with(['user', 'club']) ->get();

    return view('backend.lineup.football.index', compact('footballclubLineup'));
}

public function create()
{
    $currentDate = now();
    // Fetch all match records where action is 'red_card'
    $matchRecords = MatchRecored::where('action', 'red_card')->where('expires_at', '>=', $currentDate)->get();

    // Initialize an empty array to store player IDs with red card
    $playerIdsWithRedCard = [];

    // Extract player IDs from match records
    foreach ($matchRecords as $matchRecord) {
        $playerIdsWithRedCard[] = $matchRecord->player_id;
    }

    // Fetch players who haven't received a red card
    $players = Player::whereNotIn('id', $playerIdsWithRedCard)->get();

    // Return the view with players data
    return view('backend.lineup.football.create', compact('players'));
}


    public function store(FootballLineupCreateRequest $request)
    {
        $clubs = Clubs::where('coach_name_id', Auth::user()->id)->get();

        if ($clubs->count() > 0) {
            $userClub = $clubs->first();

            // Process the main squad players
            for ($i = 1; $i <= 11; $i++) {
                FootballLineup::create([
                    'jersey_number' => $request->input("jerseyNumber{$i}"),
                    'player_id' => $request->input("playerName{$i}"),
                    'position' => $request->input("position{$i}"),
                    'captain' => $request->input('captain') == $i,
                    'club_id' => $userClub->id, // Set the club_id
                ]);
            }

            // Process the substitute players
            for ($i = 1; $i <= 3; $i++) {
                FootballLineup::create([
                    'jersey_number' => $request->input("substituteJerseyNumber{$i}"),
                    'player_id' => $request->input("substitutePlayerName{$i}"),
                    'position' => $request->input("substitutePosition{$i}"),
                    'reason_for_substitution' => $request->input("substituteReason{$i}"),
                    'club_id' => $userClub->id, // Set the club_id
                ]);
            }

            return redirect()->route('football_lineup.create')->with('status', 'Football lineup created successfully!');
        } else {
            // Redirect with an error message
            return redirect()->route('football_lineup.create')->with('error', 'User does not have an associated club.');
        }
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
