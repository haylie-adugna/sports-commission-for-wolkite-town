<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clubs;
use App\Models\MatchRecored;
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
        // Create a new clubs record

        MatchRecored::create($request->all());

        // Redirect to the index page with success message
        return redirect()->route('matchsrecored.index')->with('status', 'clubs created successfully');
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
