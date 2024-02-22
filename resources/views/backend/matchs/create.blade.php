@extends('layouts.app')

@section('content')
<section class="content w-full">
    <div class="container">
        <!-- right column -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Match Preparation</h3>
            </div>
            <form action="{{ route('matchs.register') }}" method="post">
                @csrf

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="team1">Team 1:</label>
                                <input type="text" class="form-control" name="Team1" id="team1" placeholder="Team 1">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="team2">Team 2:</label>
                                <input type="text" class="form-control" name="Team2" id="team2" placeholder="Team 2">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="start_time">Match Start Time:</label>
                                <input type="datetime-local" class="form-control" name="Start_time" id="start_time" required>
                            </div>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="End_time">Match End Time:</label>
                                <input type="datetime-local" class="form-control" name="End_time" id="End_time" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="referee">Referee:</label>
                                <select class="form-control" name="referee" id="referee">
                                    <option value="referee_option1">Referee Option 1</option>
                                    <option value="referee_option2">Referee Option 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="assistant_referee2">Assistant Referee 1:</label>
                                <select class="form-control" name="assistant_referee1" id="assistant_referee1">
                                    <option value="">Select Assistant Referee 1</option>
                                    <!-- Add options dynamically here -->
                                </select>
                            </div>
                        </div>

                    </div>




                    <div class="row">


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="assistant_referee2">Assistant Referee 2:</label>
                                <select class="form-control" name="assistant_referee2" id="assistant_referee2">
                                    <option value="">Select Assistant Referee 2</option>
                                    <!-- Add options dynamically here -->
                                </select>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="medical_support">Medical support</label>
                                <input type="text" class="form-control" name="medical_support" id="medical_support" placeholder="Team 1">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Commentator"> Commentator</label>
                                <input type="text" class="form-control" name="Commentator" id="Commentator" placeholder="Commentator">
                            </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="venue">Venue:</label>
                            <select class="form-control" name="venue" id="venue">
                                @foreach(DB::table('venues')
                                ->select('id', 'venue_name')
                                ->groupBy('venue_name', 'id')
                                ->get() as $venue_name)
                                <option value="{{ $venue_name->id }}">{{ $venue_name->venue_name }}</option>
                            @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="ticket">Ticket:</label>
                                <input type="text" class="form-control" name="ticket" id="ticket" placeholder="Ticket">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="promoter">Promoter:</label>
                                <input type="text" class="form-control" name="promoter" id="promoter" placeholder="Promoter">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Recored_keeping"> Recored keeping</label>
                                <input type="text" class="form-control" name="recored_keeping" id="Recored keeping" placeholder="Recored keeping">
                            </div>
                        </div>
                    </div>


                </div>

                <div class="box-footer">
                    <a href="{{ route('matchs.index') }}" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-info pull-right">Add Match</button>
                </div>
            </form>
        </div>
    </div>


</section>
@endsection
