<?php

namespace App\Http\Controllers;

use App\Http\Requests\Leagues\UpdateTeamRequest;
use App\Models\League;
use App\Models\Clubs;
use Illuminate\Http\Request;

class WorldCupController extends Controller
{
    public function index()
    {
        $leagues = League::with(['clubs'])->get();
        return view('backend.leagues.index', compact('leagues'));
    }
    public function create()
    {
        return view('backend.leagues.create');
    }
    public function update(League $leagues)
    {
        return view('backend.leagues.update', compact('leagues'));
    }
    public function edit(UpdateTeamRequest $request, League $leagues)
    {
        League::calculateRank();
        $requestData = $request->safe()->except('matches_played');
        $leagues->update($requestData);

        return redirect()->route('leagues.update', $leagues->id)->with('success', 'update successful!');
    }

    public function destroy($id)
    {
        // Find and delete the match record
        $leagues = League::find($id);
        $leagues->delete();

        // Redirect to the index page with success message
        return back()->with('success', 'leagues deleted successfully');
    }
}
