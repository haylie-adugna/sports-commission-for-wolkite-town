<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lineup\FootballLineupCreateRequest;
use App\Models\FootballLineup;
use Illuminate\Http\Request;
use App\Models\Clubs;
use App\Models\MatchRecored;
use App\Models\Player;
use App\Models\Coachs;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class FootballLineupController extends Controller
{
    public function index()
    {
        // Get the authenticated user's coach ID
        $coachId = Auth::user()->coach->id ?? null;

        if (!$coachId) {
            // Handle case where coach ID is not found
            return redirect()->back()->with('error', 'Coach not found.');
        }

        // Retrieve the coach's club ID
        $coachClubId = Coachs::findOrFail($coachId)->club_id;

        // Fetch football lineup data where the club_id matches the coach's club ID
        $footballclubLineup = FootballLineup::with(['user', 'club'])
            ->where('club_id', $coachClubId)
            ->latest('created_at')
            ->get();

        return view('backend.lineup.football.index', compact('footballclubLineup'));
    }

public function create()
{
    // Get the authenticated user's coach ID
    $coachId = Auth::user()->coach->id;

    // Retrieve the coach's club ID
    $coach = Coachs::find($coachId);

    if (!$coach) {
        // Redirect with an error message if coach not found
        return redirect()->route('football_lineup.create')->with('error', 'Coach not found.');
    }

    $coachClubId = $coach->club_id;

    // Fetch all match records where action is 'red_card' and the expiry date is in the future
    $currentDate = now()->format('Y-m-d H:i:s');
    $matchRecords = MatchRecored::where('action', 'red_card')
                                ->where('expires_at', '>=', $currentDate)
                                ->get();

    // Initialize an empty array to store player IDs with red cards
    $playerIdsWithRedCard = [];

    // Extract player IDs from match records
    foreach ($matchRecords as $matchRecord) {
        $playerIdsWithRedCard[] = $matchRecord->player_id;
    }

    // Fetch players who haven't received a red card and belong to the coach's club
    $players = Player::whereNotIn('id', $playerIdsWithRedCard)
                    ->where('club_id', $coachClubId)
                    ->get();

    if ($players->isEmpty()) {
        // Redirect with an error message if no eligible players found
        return redirect()->route('football_lineup.create')->with('error', 'No eligible players found.');
    }

    // Return the view with player data
    return view('backend.lineup.football.create', compact('players'));
}

public function store(Request $request)
{
    // Get the authenticated user's coach ID
    $coachId = Auth::user()->coach->id ?? null;

    if (!$coachId) {
        return redirect()->route('football_lineup.create')->with('error', 'Coach not found.');
    }

    // Retrieve the coach associated with the authenticated user
    $coach = Coachs::find($coachId);

    if (!$coach || !$coach->club) {
        return redirect()->route('football_lineup.create')->with('error', 'Coach or club not found.');
    }

    // Retrieve the club ID associated with the coach
    $coachClubId = $coach->club->id;

    // Process the main squad players
    for ($i = 1; $i <= 11; $i++) {
        $playerId = $request->input("playerName{$i}");

        // Find the player
        $player = Player::find($playerId);
        // Check if player exists
        if (!$player) {
            // Redirect with an error message if player not found
            return redirect()->route('football_lineup.create')->with('error', 'Player not found. Please make sure all players are selected correctly.');
        }

        // Check if player belongs to the coach's club
        if ($player->club_id != $coachClubId) {
            // Redirect with an error message if player club ID doesn't match the coach's club ID
            return redirect()->route('football_lineup.create')->with('error', 'Selected player does not belong to your club.');
        }

        // Create football lineup for main squad player
        FootballLineup::create([
            'jersey_number' => $request->input("jerseyNumber{$i}"),
            'player_id' => $playerId,
            'position' => $request->input("position{$i}"),
            'captain' => $request->input('captain') == $i,
            'club_id' => $coachClubId,
        ]);
    }

    // Process the substitute players
    for ($i = 1; $i <= 3; $i++) {
        $substitutePlayerId = $request->input("substitutePlayerName{$i}");

        // Find the substitute player
        $substitutePlayer = Player::find($substitutePlayerId);

        // Check if substitute player exists
        if (!$substitutePlayer) {
            // Redirect with an error message if substitute player not found
            return redirect()->route('football_lineup.create')->with('error', 'Substitute player not found. Please make sure all substitute players are selected correctly.');
        }

        // Check if substitute player belongs to the coach's club
        if ($substitutePlayer->club_id != $coachClubId) {
            // Redirect with an error message if substitute player club ID doesn't match the coach's club ID
            return redirect()->route('football_lineup.create')->with('error', 'Selected substitute player does not belong to your club.');
        }

        // Create football lineup for substitute player
        FootballLineup::create([
            'jersey_number' => $request->input("substituteJerseyNumber{$i}"),
            'player_id' => $substitutePlayerId,
            'position' => $request->input("substitutePosition{$i}"),
            'reason_for_substitution' => $request->input("substituteReason{$i}"),
            'club_id' => $coachClubId,
        ]);
    }

    return redirect()->route('football_lineup.index')->with('success', 'Football lineup created successfully!');
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
