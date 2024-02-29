<?php

namespace App\Http\Controllers;

use App\Http\Requests\Lineup\VolleyballLineupCreateRequest;
use App\Models\VolleyballLineup;
use Illuminate\Http\Request;
use App\Models\Clubs;
use Illuminate\Support\Facades\Auth;

class VolleyballLineupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $volleyballclubLineup = VolleyballLineup::with(['user', 'club'])
        ->whereHas('user', function ($query) {
            $query->where('club_id', Auth::user()->id);
        })
        ->get();

    return view('backend.lineup.volleyball.index', compact('volleyballclubLineup'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.lineup.volleyball.create');
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
