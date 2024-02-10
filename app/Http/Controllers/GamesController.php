<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Games;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Games\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Http\Requests\Games\CreateGamesRequest;
use Illuminate\Support\Facades\DB;

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
       return redirect()->route('games.create')->with('status', 'New game Cteated successful!');
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
    public function edit($id)
    {
        $games= games::find($id);
        return view('backend.games.update', compact('games'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updtate(UpdtateUserRequest $request, $id)
    {
        $games= games::find($id);
       $this->$games-> games::update($request->all());
        return redirect()->route('games.update')->with('status', 'update successful!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
