<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clubs;
use App\Models\User;
use App\Models\League;
use App\Models\Coachs;
use App\Http\Requests\Clubs\CreateClubsRequest;
use App\Http\Requests\Clubs\UpdateClubsRequest;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
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
        $clubs= clubs::all();
        return view('backend.clubs.index', compact('clubs'));
    }
    public function create()
    {
        return view('backend.clubs.create');
    }
    public function store(CreateClubsRequest $request)
{
        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageFileName = $imageFile->getClientOriginalName();

            // Ensure the destination directory exists
            $destinationPath = public_path('upload/clubs/image');

            // Move the file to the specified path
            $imageFile->move($destinationPath, $imageFileName);

            // Update the data with the correct field name
            $data['logo'] = $imageFileName;
        }
        $clubs = clubs::create($data);
        $Coachs = Coachs::create([
            'club_id'=>$clubs->id,
            'user_id'=>$clubs->coach_name_id,
        ]);
        $leagues = League::create([
            'club_id'=>$clubs->id,
            'total_goal'=>0,
            'total_played'=>0,
            'total_win'=>0,
            'total_draw'=>0,
            'total_lost'=>0,
            'total_goal_against'=>0,
            'goal_difference'=>0,
            'total_point'=>0,
            'point_difference'=>0,
        ]);

        // Redirect to the index page with success message
        return redirect()->route('clubs.index')->with('success', 'Club created successfully');

}


    public function show($id)
    {
        $clubs= clubs::find($id);
        return view('backend.clubs.show', compact('clubs'));
    }
    public function update($id)
    {
        $clubs = clubs::find($id);
        $users = User::where('id', $clubs->club_manager_id)->first();
        return view('backend.clubs.update', compact('users', 'clubs'));
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
