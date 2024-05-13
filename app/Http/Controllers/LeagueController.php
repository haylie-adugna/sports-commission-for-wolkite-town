<?php
namespace App\Http\Controllers;

use App\Http\Requests\Leagues\UpdateTeamRequest;
use App\Models\League;
use App\Models\Clubs;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        // Retrieve all leagues along with their associated clubs
        $leagues = League::with(['clubs'])->get();

        // Loop through each league to handle null club associations
        foreach ($leagues as $league) {
            // Check if the league has an associated club
            if ($league->clubs) {
                // Access club properties safely
                $clubName = $league->clubs->club_name;
                // You can do other operations with $clubName or other club properties
            } else {
                // Handle the case where the league doesn't have an associated club
                // You can set default values or skip processing, depending on your requirements
            }
        }

        // Pass the leagues data to the view
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
        $requestData = $request->safe()->except('matches_played');
        $leagues->update($requestData);
        League::calculateRank();

        return redirect()->route('leagues.index')->with('success', 'update successful!');
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
