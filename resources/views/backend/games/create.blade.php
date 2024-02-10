@extends('layouts.app')
@section('content')
<section class="content">
    <div class="rows">
        <!-- right column -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h2 class="box-title">Add New Game</h2>
            </div>
            <form action="{{ route('games.register') }}" method="post" method="post">
                @csrf
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="input-group">
                                <label for="Title">Name:</label>
                                <input type="text" class="form-control" name="Name" placeholder="Title" >
                            </div>
                        </div>

                        <div class="col-xs-3">
                            <div class="input-group">
                                <label for="Description">Description:</label>
                                <input type="text" class="form-control" name="description" placeholder="Description">
                            </div>
                        </div>

                        <div class="col-xs-3">
                            <label for="GameCategory">Game Category or Type</label>
                            <select class="form-control select2" style="width: 100%;" name="game_category"
                                data-insert-attribute="true">
                                <option>Team Sport</option>
                                <option>Individual Sport</option>
                                <option>Doubles Sport </option>
                                <option>Mixed Sport</option>
                            </select>
                        </div>

                        <div class="col-xs-12">
                            <section class="content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box">
                                            <div class="box-header">
                                                <div></div>
                                                <!-- tools box -->
                                                <div class="pull-right box-tools">
                                                    <button type="button" class="btn btn-default btn-sm"
                                                        data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                                        <i class="fa fa-minus"></i></button>
                                                    <button type="button" class="btn btn-default btn-sm"
                                                        data-widget="remove" data-toggle="tooltip" title="Remove">
                                                        <i class="fa fa-times"></i></button>
                                                </div>
                                                <!-- /. tools -->
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body pad">
                                                <label for="Rules">Rules:</label>
                                                <textarea class="textarea" placeholder="Place some text here"
                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                                    name="rules"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-->
                                </div>
                                <!-- ./row -->
                            </section>
                            <!-- /.content -->
                        </div>

                        <div class="col-xs-12">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <!-- tools box -->
                                            <div class="pull-right box-tools">
                                                <button type="button" class="btn btn-default btn-sm"
                                                    data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                                    <i class="fa fa-minus"></i></button>
                                                <button type="button" class="btn btn-default btn-sm"
                                                    data-widget="remove" data-toggle="tooltip" title="Remove">
                                                    <i class="fa fa-times"></i></button>
                                            </div>
                                            <!-- /. tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body pad">
                                            <label for="Equipment">Equipment:</label>
                                            <textarea class="textarea" placeholder="Place some text here"
                                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                                name="equipment"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-->
                            </div>
                            <!-- ./row -->

                        </div>

                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-3">
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
                        </div>

                        <div class="col-xs-3">
                            <div class="input-group">
                                <label for="Players">Players or Participants:</label>
                                <input type="text" class="form-control" name="player" placeholder="Players or Participants">
                            </div>
                        </div>

                        <div class="col-xs-3">
                            <label for="Venue">Venue:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="venue" placeholder="Venue" >
                            </div>
                        </div>

                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="Season">Season:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="reservation" name="season"
                                        placeholder="Season">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>

                        <div class="col-xs-3">
                            <div class="input-group">
                                <label for="GoverningBody">Governing Body:</label>
                                <input type="text" class="form-control" name="governing_body" placeholder="Governing Body">

                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <a href="{{ route('events.index') }}" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-info pull-right">Add Game</button>
                </div>
            </form>
        </div>
    </div>
    <div class="box-body pad">
        <form>
            <textarea id="editor1" name="editor1" rows="10" cols="80">
        </textarea>
        </form>
    </div>
</section>

@endsection
