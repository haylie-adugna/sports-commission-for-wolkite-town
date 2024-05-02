<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Clubs;
use App\Models\Player;
use App\Models\MatchRecored;
use App\Models\PlayerPerformance;
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
        $matchs= Matchs::all();
        $players= Player::all();
        $clubs= Clubs::all();
        return view('backend.matchsrecored.create', compact('matchs', 'players', 'clubs'));
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
            $matchRecord = MatchRecored::create($data);
            $player_id = $request->player_id;
            $matches_recored_goal = MatchRecored::all()->where('player_id', $player_id)->where('action', "goal");
            $matches_recored_assist = MatchRecored::all()->where('player_id', $player_id)->where('action', "assist");
            $matches_recored_shoter = MatchRecored::all()->where('player_id', $player_id)->where('action', "shoter");
            $matches_recored_passer = MatchRecored::all()->where('player_id', $player_id)->where('action', "passer");
            $matches_recored_tackler = MatchRecored::all()->where('player_id', $player_id)->where('action', "tackler");
            $matches_recored_yellow_card = MatchRecored::all()->where('player_id', $player_id)->where('action', "yellow_card");
            $matches_recored_red_card = MatchRecored::all()->where('player_id', $player_id)->where('action', "red_card");
        // Initialize variables to calculate league table statistics

            $PlayerPerformance = PlayerPerformance::updateOrCreate(
                ['player_id' => $player_id], // Search condition: Find or create a league entry with this match_id
                [
                'player_id'=>$player_id,
                'club_id'=>$request->club_id,
                'total_goal'=>$matches_recored_goal->count(),
                'total_assist'=>$matches_recored_assist->count(),
                'total_shot'=>$matches_recored_shoter->count(),
                'total_pass'=>$matches_recored_tackler->count(),
                'total_tackle'=>$matches_recored_passer->count(),
                'total_yellow_card'=>$matches_recored_yellow_card->count(),
                'total_red_card'=>$matches_recored_red_card->count(),


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
