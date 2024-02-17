<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LineupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createfootball()
    {
        //
        return view('backend.lineup.football.create');
    }
    public function createvolleyball()
    {
        //
        return view('backend.lineup.volleyball.create');
    }
    public function createtennis()
    {
        //
        return view('backend.lineup.tennis.create');
    }
    public function createbasketball()
    {
        //
        return view('backend.lineup.basketball.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
