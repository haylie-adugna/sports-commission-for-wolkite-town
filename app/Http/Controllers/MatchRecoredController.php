<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clubs;
use App\Http\Requests\Clubs\CreateRecoredRequest;
use App\Http\Requests\Clubs\UpdateRecoredRequest;
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
        $leagues= leagues::all();
        return view('backend.matchsrecored.index', compact('player_performance'));
    }
    public function create()
    {
        return view('backend.matchsrecored.create');
    }
    public function store(CreateRecoredRequest $request)
    {
        // Create a new clubs record

        leagues::create($request->all());

        // Redirect to the index page with success message
        return redirect()->route('matchsrecored.index')->with('status', 'clubs created successfully');
    }

    public function show($id)
    {
        $leagues= leagues::find($id);
        return view('backend.matchsrecored.show', compact('leagues'));
    }
    public function update($id)
    {
        $leagues = leagues::find($id);
        return view('backend.matchsrecored.update', compact('leagues'));
    }
    public function edit(UpdateRecoredRequest $request, $id)
    {
        $leagues= leagues::find($id);
        $leagues->update($request->all());
        return redirect()->route('matchsrecored.update',$id)->with('status', 'update successful!');

    }
    public function destroy($id)
    {
        // Find and delete the match record
        $leagues = leagues::find($id);
        $leagues->delete();

        // Redirect to the index page with success message
        return redirect()->route('matchsrecored.index')->with('status', 'clubs deleted successfully');
    }
}
