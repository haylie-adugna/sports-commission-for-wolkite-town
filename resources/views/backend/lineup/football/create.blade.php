@extends('layouts.app')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-warning">
                <div class="box-header with-border">
                    @if(Auth::user()->coach && Auth::user()->coach->club)
                    <h3 class="box-title">{{ Auth::user()->coach->club->club_name }} Football club lineup preparation</h3>
                @else
                    <p>No club assigned</p>
                @endif

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
                        <table class="table responsive">
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
                                            <select class="form-control" name="playerName{{ $i }}" id="playerName{{ $i }}">
                                                @foreach($players as $player)
                                                    <option value="{{ $player->id }}">
                                                        {{ $player->user->first_name }} {{ $player->user->middle_name }} {{ $player->user->last_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td class="col-md-3">
                                            <select name="position{{ $i }}" class="form-control">
                                                <option value="GK">Goalkeeper</option>
                                                <option value="RB">Right Back</option>
                                                <option value="LB">Left Back</option>
                                                <option value="CB">Center Back (or Central Defender)</option>
                                                <option value="SW">Sweeper (less common in modern formations)</option>
                                                <option value="DM">Defensive Midfielder (or Holding Midfielder)</option>
                                                <option value="CM">Central Midfielder (or Box-to-Box Midfielder)</option>
                                                <option value="AM">Attacking Midfielder (or Playmaker)</option>
                                                <option value="RM">Right Midfielder (or Right Winger)</option>
                                                <option value="LM">Left Midfielder (or Left Winger)</option>
                                                <option value="ST">Striker (or Center Forward)</option>
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
                                            <select class="form-control" name="substitutePlayerName{{ $i }}" id="substitutePlayerName{{ $i }}">
                                                @foreach($players as $player)
                                                    <option value="{{ $player->id }}">
                                                        {{ $player->user->first_name }} {{ $player->user->middle_name }} {{ $player->user->last_name }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </td>
                                        <td>
                                            <select name="substitutePosition{{ $i }}" class="form-control">
                                                <option value="">Select Position</option>
                                                <option value="GK" {{ old('substitutePosition'.$i) == 'GK' ? 'selected' : '' }}>Goalkeeper</option>
                                                <option value="RB" {{ old('substitutePosition'.$i) == 'RB' ? 'selected' : '' }}>Right Back</option>
                                                <option value="LB" {{ old('substitutePosition'.$i) == 'LB' ? 'selected' : '' }}>Left Back</option>
                                                <option value="CB" {{ old('substitutePosition'.$i) == 'CB' ? 'selected' : '' }}>Center Back (or Central Defender)</option>
                                                <option value="SW" {{ old('substitutePosition'.$i) == 'SW' ? 'selected' : '' }}>Sweeper (less common in modern formations)</option>
                                                <option value="DM" {{ old('substitutePosition'.$i) == 'DM' ? 'selected' : '' }}>Defensive Midfielder (or Holding Midfielder)</option>
                                                <option value="CM" {{ old('substitutePosition'.$i) == 'CM' ? 'selected' : '' }}>Central Midfielder (or Box-to-Box Midfielder)</option>
                                                <option value="AM" {{ old('substitutePosition'.$i) == 'AM' ? 'selected' : '' }}>Attacking Midfielder (or Playmaker)</option>
                                                <option value="RM" {{ old('substitutePosition'.$i) == 'RM' ? 'selected' : '' }}>Right Midfielder (or Right Winger)</option>
                                                <option value="LM" {{ old('substitutePosition'.$i) == 'LM' ? 'selected' : '' }}>Left Midfielder (or Left Winger)</option>
                                                <option value="ST" {{ old('substitutePosition'.$i) == 'ST' ? 'selected' : '' }}>Striker (or Center Forward)</option>
                                            </select>
                                        </td>

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
