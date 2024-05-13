<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matchs;
use App\Models\MatchRecored;
use App\Http\Requests\Matchs\CreateMatchsRequest;
use App\Http\Requests\Matchs\UpdateMatchsRequest;
use Illuminate\Support\Facades\DB;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matchs= matchs::all();
        return view('backend.matchs.index', compact('matchs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.matchs.create');
    }

    /**
     * Store a newly created resource in storage.
     */

public function store(CreateMatchsRequest $request)
{
    // Create a new match record
    $match = Matchs::create($request->all());

    // Fetch team IDs from the request
    $team1_club_id = $request->input('Team1');
    $team2_club_id = $request->input('Team2');

    // Update red card expiry for team 1
    $this->updateRedCardExpiry($team1_club_id, $match->End_time);

    // Update red card expiry for team 2
    $this->updateRedCardExpiry($team2_club_id, $match->End_time);

    // Redirect to the index page with success message
    return redirect()->route('matchs.index')->with('success', 'Match created successfully');
}

private function updateRedCardExpiry($club_id, $expiry_time)
{
    // Find the red card record for the club
    $player_red_card = MatchRecored::where('club_id', $club_id)
        ->where('action', 'red_card')
        ->first();

    // If red card record exists, update expiry time
    if ($player_red_card) {
        $player_red_card->update([
            'expires_at' => $expiry_time
        ]);
    }
}
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $matchs= matchs::find($id);
        return view('backend.matchs.show', compact('matchs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update($id)
    {
        $matchs = matchs::find($id);
        return view('backend.matchs.update', compact('matchs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(UpdateMatchsRequest $request, $id)
    {
        $matchs= matchs::find($id);
        $matchs->update($request->all());
        return redirect()->route('matchs.update',$id)->with('success', 'update successful!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find and delete the match record
        $matchs = Matchs::find($id);
        $matchs->delete();

        // Redirect to the index page with success message
        return redirect()->route('matchs.index')->with('success', 'Match deleted successfully');
    }
}
