@extends('layouts.app')

@section('content')

                    <form action="{{ route('football_lineup.register') }}" method="POST">
                        @csrf

                        <div class="box-body">
                            <div class="pull-left">
                                <img src="{{ asset('assets/images/footballlineup.png') }}" alt="football lineup"
                                    style="width: 1160px; height: 400px;">
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- Lineup Table -->
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
                                    <!-- Rows for players -->
                                    <!-- Repeat this block for each player -->
                                    @for ($i = 1; $i <= 11; $i++)
                                        <tr>
                                            <td><input type="number" name="jerseyNumber{{ $i }}" class="form-control"
                                                    required value="{{ $i }}"></td>
                                            <td>
                                                <select name="playerName{{ $i }}" class="form-control" required>
                                                    <option value="Player{{ $i }}">Player {{ $i }}</option>
                                                    <!-- Add more players as needed -->
                                                </select>
                                            </td>
                                            <td>
                                                <select name="position{{ $i }}" class="form-control" required>
                                                    <option value="GK">Goalkeeper</option>
                                                    <option value="CB">Center Back</option>
                                                    <option value="LB">Left Back</option>
                                                    <!-- Add more positions as needed -->
                                                </select>
                                            </td>
                                            <td>
                                                <input type="radio" name="captain" value="{{ $i }}" required>
                                            </td>
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
                                    <!-- Rows for substitute players -->
                                    <!-- Repeat this block for each substitute player -->
                                    @for ($i = 1; $i <= 3; $i++)
                                        <tr>
                                            <td><input type="number" name="substituteJerseyNumber{{ $i }}"
                                                    class="form-control" required value="{{ $i }}"></td>
                                            <td>
                                                <select name="substitutePlayerName{{ $i }}" class="form-control"
                                                    required>
                                                    <option value="SubPlayer{{ $i }}">Substitute Player {{ $i }}
                                                    </option>
                                                    <!-- Add more substitute players as needed -->
                                                </select>
                                            </td>
                                            <td><input type="text" name="substitutePosition{{ $i }}"
                                                    class="form-control" required value="Substitute Position {{ $i }}">
                                            </td>
                                            <td><input type="text" name="substituteReason{{ $i }}" class="form-control"
                                                    required value="Reason for Substitution {{ $i }}"></td>
                                        </tr>
                                    @endfor
                                    <!-- Repeat the above block for more substitute players -->
                                </tbody>
                            </table>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
</section>
@endsection
