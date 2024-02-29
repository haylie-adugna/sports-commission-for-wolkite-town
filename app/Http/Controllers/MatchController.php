<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matchs;
use App\Http\Requests\Matchs\CreateMatchsRequest;
use App\Http\Requests\Matchs\UpdateMatchsRequest;
use Illuminate\Support\Facades\DB;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matchs= matchs::all();
        return view('backend.matchs.index', compact('matchs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.matchs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMatchsRequest $request)
    {
        // Create a new match record

        matchs::create($request->all());

        // Redirect to the index page with success message
        return redirect()->route('matchs.index')->with('success', 'Match created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $matchs= matchs::find($id);
        return view('backend.matchs.show', compact('matchs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update($id)
    {
        $matchs = matchs::find($id);
        return view('backend.matchs.update', compact('matchs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(UpdateMatchsRequest $request, $id)
    {
        $matchs= matchs::find($id);
        $matchs->update($request->all());
        return redirect()->route('matchs.update',$id)->with('success', 'update successful!');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find and delete the match record
        $matchs = Matchs::find($id);
        $matchs->delete();

        // Redirect to the index page with success message
        return redirect()->route('matchs.index')->with('success', 'Match deleted successfully');
    }
}
