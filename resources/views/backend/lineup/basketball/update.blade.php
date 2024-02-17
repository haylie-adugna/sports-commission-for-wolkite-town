@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Match</h2>
        <form method="POST" action="{{ route('matchs.edit', ['id' => $matchs->id]) }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="team1">Team 1:</label>
                        <input type="text" class="form-control" name="Team1" value="{{ $matchs->Team1 }}" required>
                    </div>

                    <div class="form-group">
                        <label for="team2">Team 2:</label>
                        <input type="text" class="form-control" name="Team2" value="{{ $matchs->Team2 }}" required>
                    </div>

                    <div class="form-group">
                        <label for="start_time">Match Start Time:</label>
                        <input type="datetime-local" class="form-control" name="Start_time" value="{{ $matchs->Start_time }}" required>
                    </div>

                    <div class="form-group">
                        <label for="end_time">Match End Time:</label>
                        <input type="datetime-local" class="form-control" name="End_time" value="{{ $matchs->End_time }}" required>
                    </div>

                    <div class="form-group">
                        <label for="commentator">Commentator:</label>
                        <input type="text" class="form-control" name="Commentator" value="{{ $matchs->Commentator }}" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="referee">Referee:</label>
                        <input type="text" class="form-control" name="Referee" value="{{ $matchs->Referee }}" required>
                    </div>

                    <div class="form-group">
                        <label for="assistant_referee1">Assistant Referee 1:</label>
                        <input type="text" class="form-control" name="Assistant_Referee1" value="{{ $matchs->Assistant_Referee1 }}" required>
                    </div>

                    <div class="form-group">
                        <label for="assistant_referee2">Assistant Referee 2:</label>
                        <input type="text" class="form-control" name="Assistant_Referee2" value="{{ $matchs->Assistant_Referee2 }}" required>
                    </div>

                    <div class="form-group">
                        <label for="venue">Venue:</label>
                        <input type="text" class="form-control" name="Venue" value="{{ $matchs->Venue }}" required>
                    </div>

                    <div class="form-group">
                        <label for="medical_support">Medical Support:</label>
                        <input type="text" class="form-control" name="Medical_Support" value="{{ $matchs->Medical_Support }}" required>
                    </div>
                </div>
            </div>

            <!-- Add more fields based on all the columns in your matchs model -->

            <button type="submit" class="btn btn-primary">Update Match</button>
            <a href="{{ route('matchs.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
