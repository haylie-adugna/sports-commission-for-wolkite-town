@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>volleyball Club Lineup</h2>

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Jersey Number</th>
                    <th>Player Name</th>
                    <th>Position</th>
                    <th>Captain</th>
                    <th>club_name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($volleyballclubLineup as $player)
                    <tr>
                        <td>{{ $player->jersey_number }}</td>
                        <td>{{ $player->user->first_name }} {{ $player->user->last_name }}</td>
                        <td>{{ $player->position }}</td>
                        <td>{{ $player->captain ? 'Yes' : 'No' }}</td>
                        <td>{{ $player->clubs->club_name }}</td>
                    </tr>
                @endforeach
            </tbody>


        </table>
    </div>
@endsection
