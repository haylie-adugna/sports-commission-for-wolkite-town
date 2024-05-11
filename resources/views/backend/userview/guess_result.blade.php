<!-- resources/views/guess_result.blade.php -->
@extends('layouts.app') {{-- Adjust as per your layout --}}

@section('content')
    <div class="container">
        <h1>Guess Result</h1>
        <p>Match ID: {{ $match->id }}</p>
        {{-- Add form for guessing result --}}
        <form action="{{ route('guess_result.store', ['match_id' => $match->id]) }}" method="post">
            @csrf
            {{-- Input field for guessing Team 1's goal --}}
            <div class="form-group">
                <label for="team1_goals">Team 1 Goals</label>
                <input type="number" id="team1_goals" name="team1_goals" class="form-control" min="0">
            </div>
            {{-- Input field for guessing Team 2's goal --}}
            <div class="form-group">
                <label for="team2_goals">Team 2 Goals</label>
                <input type="number" id="team2_goals" name="team2_goals" class="form-control" min="0">
            </div>
            <button type="submit" class="btn btn-primary">Submit Guess</button>
        </form>
    </div>
@endsection
