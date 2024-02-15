@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add New game
            <small>game table</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">games</a></li>
            <li class="active">Add games</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-info">
            <div class="row">

                <form action="{{ route('games.register') }}" method="post">
                    @csrf
                    <div class="box-body">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Title:</label>
                                <input type="text" class="form-control" name="game_type" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="Description">Description:</label>
                                <input type="text" class="form-control" name="description" placeholder="Description">
                            </div>
                            <div class="form-group">
                                <label for="GameCategory">Game Category or Type</label>
                                <select class="form-control select2" style="width: 100%;" name="game_category"
                                    data-insert-attribute="true">
                                    <option>Team Sport</option>
                                    <option>Individual Sport</option>
                                    <option>Doubles Sport </option>
                                    <option>Mixed Sport</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Rules">Rules:</label>
                                <textarea class="textarea" placeholder="Place some text here"
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                    name="rules"></textarea>
                            </div>
                        </div>

                        <!-- /.col-md-4 -->
                        <div class="col-md-4">
                            <div class="">
                                <div class="box-body">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="Duration">Duration:</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                                <input type="text" class="form-control pull-right" id="reservationtime"
                                                    name="duration" placeholder="Duration">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <div class="form-group">
                                            <label for="Players">Players or Participants:</label>
                                            <input type="text" class="form-control" name="player"
                                                placeholder="Players or Participants">
                                        </div>
                                        <div class="form-group">
                                            <label for="Venue">Venue:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="venue"
                                                    placeholder="Venue">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Equipment">Equipment:</label>
                                            <textarea class="textarea" placeholder="Place some text here"
                                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                                name="equipment"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-4 -->
                        <div class="col-md-4">
                            <div class="">
                                <div class="box-body">
                                        <div class="form-group">

                                        <div class="form-group">
                                            <label for="Players">Select Season or event</label>
                                            <input type="text" class="form-control" name="season"
                                                placeholder="Players or Participants">
                                        </div>

                                        <div class="form-group">
                                            <label for="GoverningBody">Governing Body:</label>
                                            <input type="text" class="form-control" name="governing_body"
                                                placeholder="Governing Body">
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="box-footer">
                        <a href="{{ route('events.index') }}" class="btn btn-warning">Cancel</a>
                        <button type="submit" class="btn btn-info pull-right">Add Game</button>
                    </div>
            </div>
            </form>
            <!-- /.col-md-4 -->

        </div>
        <div class="box-body pad">
            <form>
                <textarea id="editor1" name="editor1" rows="10" cols="80">
        </textarea>
            </form>
        </div>
        <!-- /.row -->

        </div>
        <!-- /.box -->
    </section>
@endsection
