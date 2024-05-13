<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clubs;
use App\Models\Coachs;
use App\Models\User;
use App\Models\Role;
use App\Http\Requests\Coachs\AssignCoachRequest;
use App\Http\Requests\Clubs\UpdateClubsRequest;
use Illuminate\Support\Facades\DB;

class CoachController extends Controller
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
        $coachs = Coachs::all();
        return view('backend.coachs.index', compact('coachs'));
    }
    public function assign()
    {
        $clubs = Clubs::pluck('club_name', 'id');
        $role = Role::where('title', 'coach')->firstOrFail();
        $coachs = $role->users()->get();

        return view('backend.coachs.assign', compact('coachs', 'clubs'));
    }
    public function store(AssignCoachRequest $request)
{
        $data = $request->all();
        Coachs::create($data);


        // Redirect to the index page with success message
        return redirect()->route('coachs.index')->with('success', 'A coachs is Assigned to Club successfully');

}

// other code.
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
