<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Games;
use App\Http\Requests\Games\CreateGamesRequest;
use App\Http\Requests\Games\UpdateGameRequest;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games= games::all();

        return view('backend.games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.games.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateGamesRequest $request)
    {
        //
        Games::create($request->all());
       return redirect()->route('games.index')->with('success', 'New game Cteated successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $games= games::find($id);
        return view('backend.games.show', compact('games'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update($id)
    {
        $games = games::find($id);
        return view('backend.games.update', compact('games'));
    }
    public function edit(UpdateGameRequest $request, $id)
    {
        $games= games::find($id);
        $games->update($request->all());
        return redirect()->route('games.index',$id)->with('success', 'update successful!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            $game = games::find($id);

            if (!$game) {
                abort(404); // Or handle the case when the game is not found
            }

            $game->delete();

            return redirect()->route('games.index')->with('status', 'Game deleted successfully!');
        }
    }
}
