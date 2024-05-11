<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matchs;
use App\Models\GuessedResult;
use App\Http\Requests\Matchs\StoreGuessedResultRequest; // Import the form request
use Illuminate\Support\Facades\Auth;

class GuessResultController extends Controller
{
    public function index()
    {
        // Get the ID of the authenticated user
        $userId = Auth::id();

        // Retrieve guessed results associated with the authenticated user
        $guessedResults = GuessedResult::where('user_id', $userId)->get();

        return view('backend.userview.guess_result_index', compact('guessedResults'));
    }

    public function show($match_id)
    {
        $match = Matchs::findOrFail($match_id);
        return view('backend.userview.guess_result', compact('match'));
    }

    public function store(StoreGuessedResultRequest $request, $match_id)
    {
        // Find the match by ID
        $match = Matchs::findOrFail($match_id);

        // Store the guessed results along with the authenticated user's ID
        $guessedResult = new GuessedResult([
            'match_id' => $match->id,
            'team1_goals' => $request->team1_goals,
            'team2_goals' => $request->team2_goals,
            'user_id' => Auth::id(), // Get the authenticated user's ID
        ]);
        $guessedResult->save();

        // Redirect back or to a success page
        return redirect()->route('guess.result.index')->with('success', 'New game Cteated successful!');
    }

}
