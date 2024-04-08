@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Match Information
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Match Information</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">


        <div class="row">
            <form action="{{ route('matchsrecored.register') }}" method="post">
                @csrf
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h2 class="box-title">Team 1</h2>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="match_name">Select Club:</label>
                                <select class="form-control" name="match_id" id="match_id" required>
                                    @forelse(\App\Models\Matchs::all() as $clubManager)
                                        <option value="{{ $clubManager->id }}">ID:- {{$clubManager->id }}| Name:- {{$clubManager->match_name }}</option>
                                    @empty
                                        <option value="" disabled>No club managers available</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="goal">goal number</label>
                                <input type="number" class="form-control" id="goal"
                                    placeholder="Enter goal" name="team1_goal">
                            </div>
                            <div class="form-group">
                                <label for="playerSelect">Player:</label>
                                <select class="form-control" id="playerSelect" name="team1_player">
                                    @forelse(\App\Models\Matchs::all() as $clubManager)
                                        <option value="{{ $clubManager->id }}">ID:- {{$clubManager->id }}| Name:- {{$clubManager->match_name }}</option>
                                    @empty
                                        <option value="" disabled>No club managers available</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="assistantSelect">Name of Assistant:</label>
                                <select class="form-control" id="assistantSelect" name="team1_assistant">
                                    @forelse(\App\Models\Matchs::all() as $clubManager)
                                    <option value="{{ $clubManager->id }}">ID:- {{$clubManager->id }}| Name:- {{$clubManager->match_name }}</option>
                                @empty
                                    <option value="" disabled>No club managers available</option>
                                @endforelse
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="timeInput">Time:</label>
                                <input type="datetime-local" class="form-control" id="timeInput" name="team1_time">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h2 class="box-title">Team 2</h2>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="goal">goal number</label>
                                <input type="number" class="form-control" id="goal"
                                    placeholder="Enter goal" name="team2_goal">
                            </div>
                            <div class="form-group">
                                <label for="playerSelect">Player:</label>
                                <select class="form-control" id="playerSelect" name="team2_player">
                                    @forelse(\App\Models\Matchs::all() as $clubManager)
                                        <option value="{{ $clubManager->id }}">ID:- {{$clubManager->id }}| Name:- {{$clubManager->match_name }}</option>
                                    @empty
                                        <option value="" disabled>No club managers available</option>
                                    @endforelse
                                    <!-- Add more players as needed -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="assistantSelect">Name of Assistant:</label>
                                <select class="form-control" id="assistantSelect" name="team2_assistant">
                                    @forelse(\App\Models\Matchs::all() as $clubManager)
                                    <option value="{{ $clubManager->id }}">ID:- {{$clubManager->id }}| Name:- {{$clubManager->match_name }}</option>
                                @empty
                                    <option value="" disabled>No club managers available</option>
                                @endforelse
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="timeInput">Time:</label>
                                <input type="datetime-local" class="form-control" id="timeInput" name="team2_time">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-info pull-right">Submit</button>
                </div>
            </form>
            </br>
            <form action="{{ route('matchsrecored.register') }}" method="post">
                @csrf
                <div class="col-md-12">
                    <div class="box box-primary ">
                        <div class="box-header with-border">
                            <h2 class="box-title">Card Records</h2>
                        </div>

                        <div class="row ">

                            <div class="col-md-3">
                                <label for="team1_player_1">Player:</label>
                                <select class="form-control" id="both_team_player_1" name="both_team_player_1">
                                    @forelse(\App\Models\Matchs::all() as $clubManager)
                                        <option value="{{ $clubManager->id }}">ID:- {{$clubManager->id }}| Name:- {{$clubManager->match_name }}</option>
                                    @empty
                                        <option value="" disabled>No club managers available</option>
                                    @endforelse
                                </select>
                            </div>
                            <h3 class="box-title">Cards</h3>
                            <div class="col-xs-4">
                                <input type="checkbox" id="yellowCard" name="card" value="yellow"
                                    onclick="restrictCheckboxes(this)">
                                <label for="yellowCard" class="colored-card" style="border: 10px solid yellow;"></label>
                            </div>
                            <div class="col-xs-4">
                                <input type="checkbox" id="redCard" name="card" value="red"
                                    onclick="restrictCheckboxes(this)">
                                <label for="redCard" class="colored-card" style="border: 10px solid red;"></label>
                            </div>


                        </div>
                        <div class="box-footer pull-right">
                            <button type="submit" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-info ">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </section>
@endsection
