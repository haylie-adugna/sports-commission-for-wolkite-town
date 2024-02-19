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
                            <img src="{{ asset('assets/images/footballlineup.png') }}" alt="footbal lineup" style="width: 1160px; height: 400px;">
                          </div>
                        </div>

                    <form action="{{route('football_lineup.register')}}" method="POST">
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
                                        <td class="col-md-2"><input type="number" name="jerseyNumber{{ $i }}" class="form-control"></td>
                                        <td class="col-md-3">
                                            <select name="playerName{{ $i }}" class="form-control">
                                                <option value="Player1">Player 1</option>
                                                <option value="Player2">Player 2</option>
                                                <option value="Player3">Player 3</option>
                                                <!-- Add more players as needed -->
                                            </select>
                                        </td>
                                        <td class="col-md-3">
                                            <select name="position{{ $i }}" class="form-control">
                                                <option value="GK">Goalkeeper</option>
                                                <option value="CB">Center Back</option>
                                                <option value="LB">Left Back</option>
                                                <option value="RB">Right Back</option>
                                                <option value="LWB">Left Wing-Back</option>
                                                <option value="DM">Defensive Midfielder</option>
                                                <option value="RWB">Right Wing-Back</option>
                                                <option value="LM">Left Midfielder</option>
                                                <option value="CM">Center Midfielder</option>
                                                <option value="RM">Right Midfielder</option>
                                                <option value="AMR">Attacking Midfielder (Right)</option>
                                                <option value="AM">Attacking Midfielder (Center)</option>
                                                <option value="AML">Attacking Midfielder (Left)</option>
                                                <option value="WL">Left Winger</option>
                                                <option value="CF">Center Forward</option>
                                                <option value="WR">Right Winger</option>
                                                <!-- Add more positions as needed -->
                                            </select>
                                        </td>
                                        <td> <input type="radio" name="captain" value="{{ $i }}"></td>
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
                                        <td class="col-md-2"><input type="number" name="substituteJerseyNumber{{ $i }}" class="form-control"></td>
                                        <td>
                                            <select name="substitutePlayerName{{ $i }}" class="form-control">
                                                <option value="SubPlayer1">Substitute Player 1</option>
                                                <option value="SubPlayer2">Substitute Player 2</option>
                                                <option value="SubPlayer3">Substitute Player 3</option>
                                                <!-- Add more substitute players as needed -->
                                            </select>
                                        </td>
                                        <td><input type="text" name="substitutePosition{{ $i }}" class="form-control"></td>
                                        <td><input type="text" name="substituteReason{{ $i }}" class="form-control"></td>
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
</section>
@endsection
