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
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h2 class="box-title">Team 1</h2>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="goal">goal number</label>
                                <input type="number" class="form-control" id="goal" min="1" max="100"
                                    placeholder="Enter goal">
                            </div>
                            <div class="form-group">
                                <label for="playerSelect">Player:</label>
                                <select class="form-control" id="playerSelect">
                                    <option value="Player 1">Player 1</option>
                                    <option value="Player 2">Player 2</option>
                                    <option value="Player 3">Player 3</option>
                                    <!-- Add more players as needed -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="assistantSelect">Name of Assistant:</label>
                                <select class="form-control" id="assistantSelect">
                                    <option value="Fasil">Fasil</option>
                                    <option value="Haylie">Haylie</option>
                                    <option value="Hana">Hana</option>
                                    <!-- Add more assistants as needed -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="timeInput">Time:</label>
                                <input type="time" class="form-control" id="timeInput">
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
                                <input type="number" class="form-control" id="goal" min="1" max="100"
                                    placeholder="Enter goal">
                            </div>
                            <div class="form-group">
                                <label for="playerSelect">Player:</label>
                                <select class="form-control" id="playerSelect">
                                    <option value="Player 1">Player 1</option>
                                    <option value="Player 2">Player 2</option>
                                    <option value="Player 3">Player 3</option>
                                    <!-- Add more players as needed -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="assistantSelect">Name of Assistant:</label>
                                <select class="form-control" id="assistantSelect">
                                    <option value="Fasil">Fasil</option>
                                    <option value="Haylie">Haylie</option>
                                    <option value="Hana">Hana</option>
                                    <!-- Add more assistants as needed -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="timeInput">Time:</label>
                                <input type="time" class="form-control" id="timeInput">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-info pull-right">Submit</button>
                </div> </br>

                <div class="col-md-12">
                    <div class="box box-primary ">
                        <div class="box-header with-border">
                            <h2 class="box-title">Card Records</h2>
                        </div>

                        <div class="row ">

                            <div class="col-md-3">
                                <label for="team1_player_1">Player:</label>
                                <select class="form-control" id="both_team_player_1" name="both_team_player_1">
                                    <option value="Player 1">Player 1</option>
                                    <option value="Player 2">Player 2</option>
                                    <option value="Player 3">Player 3</option>
                                    <option value="Player 4">Player 4</option>
                                    <option value="Player 5">Player 5</option>
                                    <option value="Player 6">Player 6</option>
                                    <option value="Player 7">Player 7</option>
                                    <option value="Player 8">Player 8</option>
                                    <option value="Player 9">Player 9</option>
                                    <option value="Player 10">Player 10</option>
                                    <option value="Player 11">Player 11</option>

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

            </div>
    </section>

@endsection
