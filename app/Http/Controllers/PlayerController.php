<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clubs;
use App\Models\Player;
use App\Models\PlayerPerformance;
use App\Models\User;
use App\Http\Requests\Player\AssignPlayerRequest;
use App\Http\Requests\Clubs\UpdateClubsRequest;
use App\Http\Requests\Player\PlayerPerformanceRequest;
use Illuminate\Support\Facades\DB;

class PlayerController extends Controller
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
        $players = Player::all();
        return view('backend.players.index', compact('players'));
    }
    public function assign()
    {
        return view('backend.players.assign');
    }
    public function store(AssignPlayerRequest $request)
{
        $data = $request->all();
        $clubs = Player::create($data);
        $PlayerPerformance = PlayerPerformance::create([
            'player_id'=>$clubs->user_id,
            'club_id'=>$clubs->club_id,
            'total_goal'=>0,
            'total_assist'=>0,
            'total_yellow_card'=>0,
            'total_red_card'=>0,
            'total_shot'=>0,
            'total_pass'=>0,
            'total_tackle'=>0,
        ]);

        // Redirect to the index page with success message
        return redirect()->route('players.index')->with('success', 'A player is Assigned to Club successfully');

}


    public function show($id)
    {
        $clubs= clubs::find($id);
        return view('backend.clubs.show', compact('clubs'));
    }
    public function update($id)
    {
        $clubs = clubs::find($id);
        return view('backend.clubs.update', compact('clubs'));
    }
    public function edit(UpdateClubsRequest $request, $id)
    {
        $clubs= clubs::find($id);
        $clubs->update($request->all());
        return redirect()->route('clubs.update',$id)->with('status', 'update successful!');

    }
    public function destroy($id)
    {
        // Find and delete the match record
        $clubs = clubs::find($id);
        $clubs->delete();

        // Redirect to the index page with success message
        return redirect()->route('clubs.index')->with('status', 'clubs deleted successfully');
    }
}
