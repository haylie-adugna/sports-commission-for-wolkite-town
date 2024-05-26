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
            <div class="col-md-6">
                <form action="{{ route('matchsrecored.register') }}" method="post">
                    @csrf
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h2 class="box-title">Goal recored form</h2>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="match_name">Select Match:</label>
                                <select class="form-control" name="match_id" id="match_id" required>
                                    @forelse($matchs as $match)
                                        <option value="{{ $match->id }}">ID:- {{ $match->id }}| Name:-
                                            {{ $match->match_name }} {{ $match->team1->club_name }} VS {{ $match->team2->club_name }}</option>
                                    @empty
                                        <option value="" disabled>No club managers available</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="match_name">Select Club:</label>
                                <select class="form-control" name="club_id" id="club_id" required>
                                    @forelse($clubs as $club)
                                        <option value="{{ $club->id }}">ID:- {{ $club->id }}| Name:-
                                            {{ $club->club_name }}</option>
                                    @empty
                                        <option value="" disabled>No club available</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="hidden" value="1" class="form-control" id="goal"
                                    placeholder="Enter goal" name="number_of_goal">
                            </div>
                            <div class="form-group">
                                <label for="shoter">Select Player:</label>
                                <select class="form-control" id="player_id" name="player_id">
                                    @forelse($players as $Player)
                                        <option value="{{ $Player->user_id }}">ID:- {{ $Player->id }}| Name:-
                                            {{ $Player->user->first_name }}</option>
                                    @empty
                                        <option value="" disabled>No club managers available</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="passer">Action:</label>
                                <select class="form-control" id="action" name="action">
                                    <option value="goal">goal</option>
                                    <option value="assist">assist</option>
                                    <option value="shoter">shoter</option>
                                    <option value="passer">passer</option>
                                    <option value="tackler">tackler</option>
                                    <option value="yellow_card">yellow_card</option>
                                    <option value="red_card">red_card</option>
                                </select>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-info pull-right">Submit</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
@endsection
