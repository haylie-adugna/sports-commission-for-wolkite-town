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
        $data = $request->all();
        $data['goal_time'] = $currentTime;
        $matchRecord = MatchRecored::create($data);
        $match_id = $request->input("match_id");
        $club_id = $request->input("club_id");
    // Retrieve all match records
    $matches_recored = MatchRecored::all()->where('club_id', $club_id);

    // Initialize variables to calculate league table statistics
    $total_points = 0;
    $total_goals = 0;
    $total_wins = 0;
    $total_draws = 0;
    $total_losses = 0;
    $point_difference = 0;

    // Calculate league table statistics based on match results
    foreach ($matches_recored as $match_recored) {
        if ($endTime <= $currentTime) {
            $total_points += 3;
            $total_wins++;
            $total_losses++;
     }

     $total_goals++;
    }

    // Update the league table with calculated values
    League::updateOrCreate(
    ['club_id' => $club_id], // Search condition: Find or create a league entry with this match_id
    [
        'match_id' => $match_id,
        'total_point' => $total_points,
        'total_goal' => $total_goals,
        'total_played' => count($matches),
        'total_win' => $total_wins,
        'total_draw' => $total_draws,
        'total_losse' => $total_losses,
        'rank' => 0, // You may want to calculate the rank based on the points
        'point_difference' => $point_difference,
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
