@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Guessed Results</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Match ID</th>
                    <th>Team 1 Goals</th>
                    <th>Team 2 Goals</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($guessedResults as $guessedResult)
                    <tr>
                        <td>{{ $guessedResult->id }}</td>
                        <td>{{ $guessedResult->user->first_name }}</td>
                        <td>{{ $guessedResult->match->id }}</td>
                        <td>{{ $guessedResult->team1_goals }}</td>
                        <td>{{ $guessedResult->team2_goals }}</td>
                        <td>
                            <a href="{{ route('guess.result.index', $guessedResult) }}" class="btn btn-primary">View</a>
                            <!-- Add more actions as needed -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
