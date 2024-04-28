@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h2 class="box-title">Update Club Information</h2>
                    </div>
                    <form class="col s12" method="post" action="{{ route('leagues.edit', $leagues->id) }}">
                        @csrf

                        <div class="row">
                            <div class="center">
                                <div class="col s1"></div>
                                <div class="input-field col s3">
                                    <input id="won" type="text" name="total_win" value="{{ $leagues->total_win }}">
                                    <label for="won">Won</label>
                                </div>

                                <div class="input-field col s3">
                                    <input id="lost" type="tel" name="total_draw" value="{{ $leagues->total_draw }}">
                                    <label for="draw">Draw</label>
                                </div>

                                <div class="input-field col s3">
                                    <input id="lost" type="tel" name="total_lost" value="{{ $leagues->total_lost }}">
                                    <label for="lost">Lost</label>
                                </div>
                            </div>

                            <div class="input-field col s6">
                                <input id="goals_for" type="tel" name="total_goal" value="{{ $leagues->total_goal }}">
                                <label for="goals_for">Goals For</label>
                            </div>
                            <div class="center">

                                <div class="input-field col s6">
                                    <input id="goals_against" type="tel" name="total_goal_against"
                                        value="{{ $leagues->total_goal_against }}">
                                    <label for="goals_against">Goals Against</label>
                                </div>
                            </div>

                        </div>

                        @error('total_played')
                            <p>
                                {{ $message }}
                            </p>
                        @enderror
                        <div class="center">

                            <button class="btn waves-effect waves-light" type="submit" name="action">update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
