<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Clubs;
use App\Models\MatchRecored;
use App\Models\League;
use App\Models\Matchs;
use App\Http\Requests\matchsrecored\CreateMatchRecoredRequest;
use App\Http\Requests\matchsrecored\UpdateMatchRecoredRequest;
use Illuminate\Support\Facades\DB;

class MatchRecoredController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $leagues= MatchRecored::all();
        return view('backend.matchsrecored.index', compact('leagues'));
    }
    public function create()
    {
        return view('backend.matchsrecored.create');
    }
    public function store(CreateMatchRecoredRequest $request)
    {
    $time = Carbon::now();
    $currentTime = Carbon::parse($time)->format('Y-m-d\TH:i');
    // Fetch all matches
    $matches = Matchs::all();

    // Check if there are matches available
    $isMatchAvailable = false;
    foreach ($matches as $match) {
        $startTime = Carbon::parse($match->Start_time)->format('Y-m-d\TH:i');
        $endTime = Carbon::parse($match->End_time)->format('Y-m-d\TH:i');
        // dd($startTime.$endTime.$currentTime);
        if ($startTime <= $currentTime && $endTime >= $currentTime) {
            $isMatchAvailable = true;
            break;
        }
    }

    if ($isMatchAvailable) {
        $matchRecord = MatchRecored::create($request->all());
        $match_id = $request->input("match_id");

    // Retrieve all match records
    $matches_recored = MatchRecored::all();

    // Initialize variables to calculate league table statistics
    $team1_points = 0;
    $team2_points = 0;
    $team1_goals = 0;
    $team2_goals = 0;
    $team1_wins = 0;
    $team2_wins = 0;
    $draws = 0;
    $team1_losses = 0;
    $team2_losses = 0;

    // Calculate league table statistics based on match results
    foreach ($matches_recored as $match_recored) {
        if ($endTime <= $currentTime) {
        if ($match_recored->team1_goal > $match_recored->team2_goal) {
            $team1_points += 3;
            $team1_wins++;
            $team2_losses++;
        } elseif ($match_recored->team1_goal < $match_recored->team2_goal) {
            $team2_points += 3;
            $team2_wins++;
            $team1_losses++;
        } else {
            $team1_points++;
            $team2_points++;
            $draws++;
        }
     }
        $team1_goals += $match_recored->team1_goal;
        $team2_goals += $match_recored->team2_goal;
    }

    // Update the league table with calculated values
    League::updateOrCreate(
    ['match_id' => $match_id], // Search condition: Find or create a league entry with this match_id
    [
        'team1_point' => $team1_points,
        'team2_point' => $team2_points,
        'team1_goal' => $team1_goals,
        'team2_goal' => $team2_goals,
        'team1_played' => count($matches),
        'team2_played' => count($matches),
        'team1_win' => $team1_wins,
        'team2_win' => $team2_wins,
        'team1_draw' => $draws,
        'team2_draw' => $draws,
        'team1_losse' => $team1_losses,
        'team2_losse' => $team2_losses,
        'rank' => 0, // You may want to calculate the rank based on the points
        'point_difference' => abs($team1_goals - $team2_goals),
    ]);

    // Redirect to the index page with success message
    return redirect()->route('matchsrecored.index')->with('status', 'Match record created successfully');
    } else {
        // If match is not available, redirect back with error message
        return back()->with('error', 'Match not available');
    }
   }


    public function show($id)
    {
        $leagues= MatchRecored::find($id);
        return view('backend.matchsrecored.show', compact('leagues'));
    }
    public function update($id)
    {
        $leagues = MatchRecored::find($id);
        return view('backend.matchsrecored.update', compact('leagues'));
    }
    public function edit(UpdateMatchRecoredRequest $request, $id)
    {
        $leagues= MatchRecored::find($id);
        $leagues->update($request->all());
        return redirect()->route('matchsrecored.update',$id)->with('status', 'update successful!');

    }
    public function destroy($id)
    {
        // Find and delete the match record
        $leagues = MatchRecored::find($id);
        $leagues->delete();
        // Redirect to the index page with success message
        return redirect()->route('matchsrecored.index')->with('status', 'clubs deleted successfully');
    }
}
