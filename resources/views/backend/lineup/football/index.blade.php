@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Football Club Lineup</h2>

        <table id="cbtn-selectors" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Jersey Number</th>
                    <th>Player Name</th>
                    <th>Position</th>
                    <th>Captain</th>
                    <th>Club Name</th> <!-- Updated column header -->
                </tr>
            </thead>
            <tbody>
                @foreach ($footballclubLineup as $player)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $player->jersey_number }}</td>
                        <td>{{ $player->player->user->first_name }} {{ $player->player->user->last_name }}</td> <!-- Access player through the player relationship -->
                        <td>{{ $player->position }}</td>
                        <td>{{ $player->captain ? 'Yes' : 'No' }}</td>
                        <td>{{ $player->player->club->club_name }}</td> <!-- Access club_name through the player's club relationship -->
                    </tr>
                @endforeach
            </tbody>
        </table>



        </table>
    </div>
@endsection
