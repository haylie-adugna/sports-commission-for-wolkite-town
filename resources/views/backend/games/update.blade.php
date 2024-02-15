@extends('layouts.app')
@section('content')
<section class="content">
    <div class="rows">
        <!-- right column -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h2 class="box-title">Update Game</h2>
            </div>
            <form method="post" action="{{ route('games.edit', ['id' => $games->id]) }}">
                @csrf
                <div class="box-body">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Title:</label>
                            <input type="text" class="form-control" name="game_type" placeholder="Title" value="{{ $games->game_type }}">
                        </div>
                        <div class="form-group">
                            <label for="Description">Description:</label>
                            <input type="text" class="form-control" name="description" placeholder="Description"  value="{{ $games->description }}">
                        </div>
                        <div class="form-group">
                            <label for="GameCategory">Game Category or Type</label>
                            <select class="form-control select2" style="width: 100%;" name="game_category" value="{{ $games->game_category }}"
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
                                name="rules" value="{{ $games->rules }}"></textarea>
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
                                                name="duration" placeholder="Duration" value="{{ $games->duration }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group">
                                        <label for="Players">Players or Participants:</label>
                                        <input type="text" class="form-control" name="player"
                                            placeholder="Players or Participants" value="{{ $games->player }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="Venue">Venue:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="venue"
                                                placeholder="Venue" value="{{ $games->vanue }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Equipment">Equipment:</label>
                                        <textarea class="textarea" placeholder="Place some text here"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                            name="equipment" value="{{ $games->equipment }}"></textarea>
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
                                            placeholder="Players or Participants" value="{{ $games->season }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="GoverningBody">Governing Body:</label>
                                        <input type="text" class="form-control" name="governing_body"
                                            placeholder="Governing Body" value="{{ $games->governing_body }}">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <a href="{{ route('games.index') }}" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-info pull-right">update Game</button>
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
