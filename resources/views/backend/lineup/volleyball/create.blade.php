@extends('layouts.app')

@section('content')
<section class="content">

    <!--/.col (left) -->
    <!-- right column -->
    <div class="col-md-12">
      <!-- Horizontal Form -->

      <!-- /.box -->
      <!-- general form elements disabled -->
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Volleyball Lineup</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <h1>Volleyball Lineup Form</h1>
          <form class="form-horizontal">
            <!-- First Row -->
            <div class="form-group">
              <!-- Setters -->
              <label for="setter" class="col-sm-2 control-label">Setter:</label>
              <div class="col-sm-4">
                <select id="setter" class="form-control" name="setter">
                  <option value="1">Player 1</option>
                  <option value="2">Player 2</option>
                  <option value="3">Player 3</option>
                  <option value="4">Player 4</option>
                  <option value="5">Player 5</option>
                  <option value="6">Player 6</option>
                </select>
              </div>

              <!-- Outside Hitters -->
              <label for="outsideHitter1" class="col-sm-2 control-label">Outside Hitter (Left):</label>
              <div class="col-sm-4">
                <select id="outsideHitter1" class="form-control" name="outsideHitter1">
                  <option value="1">Player 1</option>
                  <option value="2">Player 2</option>
                  <option value="3">Player 3</option>
                  <option value="4">Player 4</option>
                  <option value="5">Player 5</option>
                  <option value="6">Player 6</option>
                </select>
              </div>
            </div>

            <!-- Second Row -->
            <div class="form-group">
              <!-- Middle Blockers -->
              <label for="middleBlocker1" class="col-sm-2 control-label">Middle Blocker (Front):</label>
              <div class="col-sm-4">
                <select id="middleBlocker1" class="form-control" name="middleBlocker1">
                  <option value="1">Player 1</option>
                  <option value="2">Player 2</option>
                  <option value="3">Player 3</option>
                  <option value="4">Player 4</option>
                  <option value="5">Player 5</option>
                  <option value="6">Player 6</option>
                </select>
              </div>

              <!-- Middle Blockers -->
              <label for="middleBlocker2" class="col-sm-2 control-label">Middle Blocker (Back):</label>
              <div class="col-sm-4">
                <select id="middleBlocker2" class="form-control" name="middleBlocker2">
                  <option value="1">Player 1</option>
                  <option value="2">Player 2</option>
                  <option value="3">Player 3</option>
                  <option value="4">Player 4</option>
                  <option value="5">Player 5</option>
                  <option value="6">Player 6</option>
                </select>
              </div>
            </div>

            <!-- Third Row -->
            <div class="form-group">
              <!-- Opposite Hitter -->
              <label for="oppositeHitter" class="col-sm-2 control-label">Opposite Hitter:</label>
              <div class="col-sm-4">
                <select id="oppositeHitter" class="form-control" name="oppositeHitter">
                  <option value="1">Player 1</option>
                  <option value="2">Player 2</option>
                  <option value="3">Player 3</option>
                  <option value="4">Player 4</option>
                  <option value="5">Player 5</option>
                  <option value="6">Player 6</option>
                </select>
              </div>

              <!-- Libero -->
              <label for="libero" class="col-sm-2 control-label">Libero:</label>
              <div class="col-sm-4">
                <select id="libero" class="form-control" name="libero">
                  <option value="1">Player 1</option>
                  <option value="2">Player 2</option>
                  <option value="3">Player 3</option>
                  <option value="4">Player 4</option>
                  <option value="5">Player 5</option>
                  <option value="6">Player 6</option>
                </select>
              </div>
            </div>

            <!-- Submit button -->
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-4">
                <input type="submit" value="Submit" class="btn btn-primary">
              </div>
            </div>
          </form>

        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!--/.col (right) -->

  <!-- /.row -->
</section>
@endsection
