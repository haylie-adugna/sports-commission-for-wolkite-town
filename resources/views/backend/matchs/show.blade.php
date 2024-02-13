@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Match Details</h2>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="team1">Team 1:</label>
                            <p>{{ $matchs->Team1 }}</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="team2">Team 2:</label>
                            <p>{{ $matchs->Team2 }}</p>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="start_time">matchs Start Time:</label>
                    <p>{{ $matchs->Start_time }}</p>
                </div>

                <div class="form-group">
                    <label for="end_time">matchs End Time:</label>
                    <p>{{ $matchs->End_time }}</p>
                </div>

                <div class="form-group">
                    <label for="referee">Referee:</label>
                    <p>{{ $matchs->Referee }}</p>
                </div>

                <div class="form-group">
                    <label for="assistant_referee1">Assistant Referee 1:</label>
                    <p>{{ $matchs->Assistant_Referee1 }}</p>
                </div>

                <div class="form-group">
                    <label for="assistant_referee2">Assistant Referee 2:</label>
                    <p>{{ $matchs->Assistant_Referee2 }}</p>
                </div>
            </div>

            <div class="col-md-6">
                <!-- Add more fields in the second column -->

                <div class="form-group">
                    <label for="venue">Venue:</label>
                    <p>{{ $matchs->Venue }}</p>
                </div>

                <div class="form-group">
                    <label for="medical_support">Medical Support:</label>
                    <p>{{ $matchs->Medical_Support }}</p>
                </div>

                <div class="form-group">
                    <label for="commentator">Commentator:</label>
                    <p>{{ $matchs->Commentator }}</p>
                </div>

                <div class="form-group">
                    <label for="promoter">Promoter:</label>
                    <p>{{ $matchs->Promoter }}</p>
                </div>

                <div class="form-group">
                    <label for="ticket">Ticket:</label>
                    <p>{{ $matchs->Ticket }}</p>
                </div>

                <div class="form-group">
                    <label for="record_keeping">Record Keeping:</label>
                    <p>{{ $matchs->Recored_Keeping }}</p>
                </div>

                <!-- Add more form fields based on all the columns in your matchs model -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('matchs.index') }}" class="btn btn-primary">Back to Matches</a>
            </div>
        </div>
    </div>
@endsection
