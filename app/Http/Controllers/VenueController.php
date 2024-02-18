<?php

namespace App\Http\Controllers;
use App\Models\Venues;
use Illuminate\Http\Request;
use App\Http\Requests\Venue\VenueCreateRequest;
use App\Http\Requests\Venue\VenueUpdateRequest;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $venues= venues::all();
        return view('backend.venue.index', compact('venues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.venue.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VenueCreateRequest $request)
    {
        //
        venues::create($request->all());
        return redirect()->route('venue.create')->with('status', 'Venue add successful!');
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
