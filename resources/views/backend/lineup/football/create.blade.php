@extends('layouts.app')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Football club lineup preparation</h3>
                </div>
                <div class="box-body">

                    <div class="box-body">
                        <div class="pull-left">
                            <img src="{{ asset('assets/images/footballlineup.png') }}" alt="footbal lineup"
                                style="width: 1160px; height: 400px;">
                        </div>
                    </div>

                    <form action="{{ route('football_lineup.register') }}" method="POST">
                        @csrf

                        <!-- Lineup Table -->
                        <label>Main Squad:</label>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Jersey Number</th>
                                    <th>Player Name</th>
                                    <th>Position</th>
                                    <th>Captain</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= 11; $i++)
                                    <tr>
                                        <td class="col-md-2"><input value="{{ old('jerseyNumber'.$i, 12) }}"
                                                type="number" name="jerseyNumber{{ $i }}" class="form-control"></td>
                                        <td class="col-md-3">
                                            <select class="form-control" name="playerName{{ $i }}" id="game_type_id">
                                                @foreach(DB::table('players')
                                                ->select('user_id')
                                                ->groupBy('user_id')
                                                ->get() as $player)
                                                @php
                                                    $user = \App\Models\User::find($player->user_id);
                                                @endphp
                                                <option value="{{ $user->id }}">
                                                    {{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}
                                                </option>
                                            @endforeach
                                            </select>
                                        </td>
                                        <td class="col-md-3">
                                            <select name="position{{ $i }}" class="form-control">
                                                <option value="GK">Goalkeeper</option>
                                                <option value="CB">Center Back</option>
                                                <option value="LB">Left Back</option>
                                                <!-- Add more positions as needed -->
                                            </select>
                                        </td>
                                        <td><input type="radio" name="captain" value="{{ $i }}"></td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>

                        <!-- Substitute Players -->
                        <label>Substitute Players:</label>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Jersey Number</th>
                                    <th>Player Name</th>
                                    <th>Position</th>
                                    <th>Reason for Substitution</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= 3; $i++)
                                    <tr>
                                        <td class="col-md-2"><input value="{{ old('substituteJerseyNumber'.$i, '') }}" type="number"
                                                name="substituteJerseyNumber{{ $i }}" class="form-control"></td>
                                        <td>
                                            <select class="form-control" name="substitutePlayerName{{ $i }}" id="game_type_id">
                                                @foreach(DB::table('players')
                                                ->select('user_id')
                                                ->groupBy('user_id')
                                                ->get() as $player)
                                                @php
                                                    $user = \App\Models\User::find($player->user_id);
                                                @endphp
                                                <option value="{{ $user->id }}">
                                                    {{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}
                                                </option>
                                            @endforeach
                                            </select>

                                        </td>
                                        <td><input value="{{ old('substitutePosition'.$i, '') }}" type="text" name="substitutePosition{{ $i }}"
                                                class="form-control"></td>
                                        <td><input value="{{ old('substituteReason'.$i, '') }}" type="text" name="substituteReason{{ $i }}"
                                                class="form-control"></td>
                                    </tr>
                                @endfor
                            </tbody>

                        </table>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>

            </div>
        </div>
    </div>
</section>
@endsection
