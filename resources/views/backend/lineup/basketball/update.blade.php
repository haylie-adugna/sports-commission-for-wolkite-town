@extends('layouts.app')

@section('content')
<section class="content ">
    <div class="row">
      <!--/.col (left) -->
      <!-- right column -->
      <div class="col-md-12">
        <!-- Horizontal Form -->

        <!-- /.box -->
        <!-- general form elements disabled -->
        <div class="box box-warning">
          <div class="box-header with-border">
            <h3 class="box-title">basketball Lineup update form</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <form class="custombg">
                  <div class="box-body">
                      <div class="form-group">

                  <!-- Lineup Table -->
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Jersey Number</th>
                        <th>Player Name</th>
                        <th>Position</th>
                        <th>Captain</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- Rows for players -->
                      <!-- Repeat this block for each player -->
                      <tr>
                        <td><input type="number" name="jerseyNumber1" class="form-control"></td>
                        <td>
                          <select name="playerName1" class="form-control">
                            <option value="Player1">Player 1</option>
                            <option value="Player2">Player 2</option>
                            <option value="Player3">Player 3</option>
                            <!-- Add more players as needed -->
                          </select>
                        </td>
                        <td>
                          <select name="position1" class="form-control">
                            <option value="GK">Goalkeeper</option>
                            <option value="CB">Center Back</option>
                            <option value="LB">Left Back</option>
                            <option value="RB">Right Back</option>
                            <option value="LWB">Left Wing-Back</option>
                            <option value="DM">Defensive Midfielder</option>
                            <option value="RWB">Right Wing-Back</option>
                            <option value="LM">Left Midfielder</option>
                            <option value="CM">Center Midfielder</option>
                            <option value="RM">Right Midfielder</option>
                            <option value="AMR">Attacking Midfielder (Right)</option>
                            <option value="AM">Attacking Midfielder (Center)</option>
                            <option value="AML">Attacking Midfielder (Left)</option>
                            <option value="WL">Left Winger</option>
                            <option value="CF">Center Forward</option>
                            <option value="WR">Right Winger</option>

                          </select>
                        </td>
                        <td><input type="checkbox" name="captain1"></td>
                      </tr>
                      <tr>
                          <td><input type="number" name="jerseyNumber1" class="form-control"></td>
                          <td>
                            <select name="playerName1" class="form-control">
                              <option value="Player1">Player 1</option>
                              <option value="Player2">Player 2</option>
                              <option value="Player3">Player 3</option>
                              <!-- Add more players as needed -->
                            </select>
                          </td>
                          <td>
                              <select name="position1" class="form-control">
                                <option value="GK">Goalkeeper</option>
                                <option value="CB">Center Back</option>
                                <option value="LB">Left Back</option>
                                <option value="RB">Right Back</option>
                                <option value="LWB">Left Wing-Back</option>
                                <option value="DM">Defensive Midfielder</option>
                                <option value="RWB">Right Wing-Back</option>
                                <option value="LM">Left Midfielder</option>
                                <option value="CM">Center Midfielder</option>
                                <option value="RM">Right Midfielder</option>
                                <option value="AMR">Attacking Midfielder (Right)</option>
                                <option value="AM">Attacking Midfielder (Center)</option>
                                <option value="AML">Attacking Midfielder (Left)</option>
                                <option value="WL">Left Winger</option>
                                <option value="CF">Center Forward</option>
                                <option value="WR">Right Winger</option>

                              </select>
                            </td>
                          <td><input type="checkbox" name="captain1"></td>
                        </tr>
                        <tr>
                          <td><input type="number" name="jerseyNumber1" class="form-control"></td>
                          <td>
                            <select name="playerName1" class="form-control">
                              <option value="Player1">Player 1</option>
                              <option value="Player2">Player 2</option>
                              <option value="Player3">Player 3</option>
                              <!-- Add more players as needed -->
                            </select>
                          </td>
                          <td>
                              <select name="position1" class="form-control">
                                <option value="GK">Goalkeeper</option>
                                <option value="CB">Center Back</option>
                                <option value="LB">Left Back</option>
                                <option value="RB">Right Back</option>
                                <option value="LWB">Left Wing-Back</option>
                                <option value="DM">Defensive Midfielder</option>
                                <option value="RWB">Right Wing-Back</option>
                                <option value="LM">Left Midfielder</option>
                                <option value="CM">Center Midfielder</option>
                                <option value="RM">Right Midfielder</option>
                                <option value="AMR">Attacking Midfielder (Right)</option>
                                <option value="AM">Attacking Midfielder (Center)</option>
                                <option value="AML">Attacking Midfielder (Left)</option>
                                <option value="WL">Left Winger</option>
                                <option value="CF">Center Forward</option>
                                <option value="WR">Right Winger</option>
                              </select>
                            </td>
                          <td><input type="checkbox" name="captain1"></td>
                        </tr>
                        <tr>
                          <td><input type="number" name="jerseyNumber1" class="form-control"></td>
                          <td>
                            <select name="playerName1" class="form-control">
                              <option value="Player1">Player 1</option>
                              <option value="Player2">Player 2</option>
                              <option value="Player3">Player 3</option>
                              <!-- Add more players as needed -->
                            </select>
                          </td>
                          <td>
                              <select name="position1" class="form-control">
                                <option value="GK">Goalkeeper</option>
                                <option value="CB">Center Back</option>
                                <option value="LB">Left Back</option>
                                <option value="RB">Right Back</option>
                                <option value="LWB">Left Wing-Back</option>
                                <option value="DM">Defensive Midfielder</option>
                                <option value="RWB">Right Wing-Back</option>
                                <option value="LM">Left Midfielder</option>
                                <option value="CM">Center Midfielder</option>
                                <option value="RM">Right Midfielder</option>
                                <option value="AMR">Attacking Midfielder (Right)</option>
                                <option value="AM">Attacking Midfielder (Center)</option>
                                <option value="AML">Attacking Midfielder (Left)</option>
                                <option value="WL">Left Winger</option>
                                <option value="CF">Center Forward</option>
                                <option value="WR">Right Winger</option>
                              </select>
                            </td>
                          <td><input type="checkbox" name="captain1"></td>
                        </tr>
                        <tr>
                          <td><input type="number" name="jerseyNumber1" class="form-control"></td>
                          <td>
                            <select name="playerName1" class="form-control">
                              <option value="Player1">Player 1</option>
                              <option value="Player2">Player 2</option>
                              <option value="Player3">Player 3</option>
                              <!-- Add more players as needed -->
                            </select>
                          </td>
                          <td>
                              <select name="position1" class="form-control">
                                <option value="GK">Goalkeeper</option>
                                <option value="CB">Center Back</option>
                                <option value="LB">Left Back</option>
                                <option value="RB">Right Back</option>
                                <option value="LWB">Left Wing-Back</option>
                                <option value="DM">Defensive Midfielder</option>
                                <option value="RWB">Right Wing-Back</option>
                                <option value="LM">Left Midfielder</option>
                                <option value="CM">Center Midfielder</option>
                                <option value="RM">Right Midfielder</option>
                                <option value="AMR">Attacking Midfielder (Right)</option>
                                <option value="AM">Attacking Midfielder (Center)</option>
                                <option value="AML">Attacking Midfielder (Left)</option>
                                <option value="WL">Left Winger</option>
                                <option value="CF">Center Forward</option>
                                <option value="WR">Right Winger</option>
                              </select>
                            </td>
                          <td><input type="checkbox" name="captain1"></td>
                        </tr>
                        <tr>
                          <td><input type="number" name="jerseyNumber1" class="form-control"></td>
                          <td>
                            <select name="playerName1" class="form-control">
                              <option value="Player1">Player 1</option>
                              <option value="Player2">Player 2</option>
                              <option value="Player3">Player 3</option>
                              <!-- Add more players as needed -->
                            </select>
                          </td>
                          <td>
                              <select name="position1" class="form-control">
                                <option value="GK">Goalkeeper</option>
                                <option value="CB">Center Back</option>
                                <option value="LB">Left Back</option>
                                <option value="RB">Right Back</option>
                                <option value="LWB">Left Wing-Back</option>
                                <option value="DM">Defensive Midfielder</option>
                                <option value="RWB">Right Wing-Back</option>
                                <option value="LM">Left Midfielder</option>
                                <option value="CM">Center Midfielder</option>
                                <option value="RM">Right Midfielder</option>
                                <option value="AMR">Attacking Midfielder (Right)</option>
                                <option value="AM">Attacking Midfielder (Center)</option>
                                <option value="AML">Attacking Midfielder (Left)</option>
                                <option value="WL">Left Winger</option>
                                <option value="CF">Center Forward</option>
                                <option value="WR">Right Winger</option>
                              </select>
                            </td>
                          <td><input type="checkbox" name="captain1"></td>
                        </tr>
                        <tr>
                          <td><input type="number" name="jerseyNumber1" class="form-control"></td>
                          <td>
                            <select name="playerName1" class="form-control">
                              <option value="Player1">Player 1</option>
                              <option value="Player2">Player 2</option>
                              <option value="Player3">Player 3</option>
                              <!-- Add more players as needed -->
                            </select>
                          </td>
                          <td>
                              <select name="position1" class="form-control">
                                <option value="GK">Goalkeeper</option>
                                <option value="CB">Center Back</option>
                                <option value="LB">Left Back</option>
                                <option value="RB">Right Back</option>
                                <option value="LWB">Left Wing-Back</option>
                                <option value="DM">Defensive Midfielder</option>
                                <option value="RWB">Right Wing-Back</option>
                                <option value="LM">Left Midfielder</option>
                                <option value="CM">Center Midfielder</option>
                                <option value="RM">Right Midfielder</option>
                                <option value="AMR">Attacking Midfielder (Right)</option>
                                <option value="AM">Attacking Midfielder (Center)</option>
                                <option value="AML">Attacking Midfielder (Left)</option>
                                <option value="WL">Left Winger</option>
                                <option value="CF">Center Forward</option>
                                <option value="WR">Right Winger</option>
                              </select>
                            </td>
                          <td><input type="checkbox" name="captain1"></td>
                        </tr>
                        <tr>
                          <td><input type="number" name="jerseyNumber1" class="form-control"></td>
                          <td>
                            <select name="playerName1" class="form-control">
                              <option value="Player1">Player 1</option>
                              <option value="Player2">Player 2</option>
                              <option value="Player3">Player 3</option>
                              <!-- Add more players as needed -->
                            </select>
                          </td>
                          <td>
                              <select name="position1" class="form-control">
                                <option value="GK">Goalkeeper</option>
                                <option value="CB">Center Back</option>
                                <option value="LB">Left Back</option>
                                <option value="RB">Right Back</option>
                                <option value="LWB">Left Wing-Back</option>
                                <option value="DM">Defensive Midfielder</option>
                                <option value="RWB">Right Wing-Back</option>
                                <option value="LM">Left Midfielder</option>
                                <option value="CM">Center Midfielder</option>
                                <option value="RM">Right Midfielder</option>
                                <option value="AMR">Attacking Midfielder (Right)</option>
                                <option value="AM">Attacking Midfielder (Center)</option>
                                <option value="AML">Attacking Midfielder (Left)</option>
                                <option value="WL">Left Winger</option>
                                <option value="CF">Center Forward</option>
                                <option value="WR">Right Winger</option>
                              </select>
                            </td>
                          <td><input type="checkbox" name="captain1"></td>
                        </tr>
                        <tr>
                          <td><input type="number" name="jerseyNumber1" class="form-control"></td>
                          <td>
                            <select name="playerName1" class="form-control">
                              <option value="Player1">Player 1</option>
                              <option value="Player2">Player 2</option>
                              <option value="Player3">Player 3</option>
                              <!-- Add more players as needed -->
                            </select>
                          </td>
                          <td>
                              <select name="position1" class="form-control">
                                <option value="GK">Goalkeeper</option>
                                <option value="CB">Center Back</option>
                                <option value="LB">Left Back</option>
                                <option value="RB">Right Back</option>
                                <option value="LWB">Left Wing-Back</option>
                                <option value="DM">Defensive Midfielder</option>
                                <option value="RWB">Right Wing-Back</option>
                                <option value="LM">Left Midfielder</option>
                                <option value="CM">Center Midfielder</option>
                                <option value="RM">Right Midfielder</option>
                                <option value="AMR">Attacking Midfielder (Right)</option>
                                <option value="AM">Attacking Midfielder (Center)</option>
                                <option value="AML">Attacking Midfielder (Left)</option>
                                <option value="WL">Left Winger</option>
                                <option value="CF">Center Forward</option>
                                <option value="WR">Right Winger</option>
                              </select>
                            </td>
                          <td><input type="checkbox" name="captain1"></td>
                        </tr>

                    </tbody>
                  </table>

                  <!-- Substitute Players -->
                  <label>Substitute Players:</label>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Jersey Number</th>
                        <th>Player Name</th>
                        <th>Position</th>
                        <th>Reason for Substitution</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- Rows for substitute players -->
                      <!-- Repeat this block for each substitute player -->
                      <tr>
                        <td><input type="number" name="substituteJerseyNumber1" class="form-control"></td>
                        <td>
                          <select name="substitutePlayerName1" class="form-control">
                            <option value="SubPlayer1">Substitute Player 1</option>
                            <option value="SubPlayer2">Substitute Player 2</option>
                            <option value="SubPlayer3">Substitute Player 3</option>
                            <!-- Add more substitute players as needed -->
                          </select>
                        </td>
                        <td><input type="text" name="substitutePosition1" class="form-control"></td>
                        <td><input type="text" name="substituteReason1" class="form-control"></td>
                      </tr>

                      <tr>
                          <td><input type="number" name="substituteJerseyNumber1" class="form-control"></td>
                          <td>
                            <select name="substitutePlayerName1" class="form-control">
                              <option value="SubPlayer1">Substitute Player 1</option>
                              <option value="SubPlayer2">Substitute Player 2</option>
                              <option value="SubPlayer3">Substitute Player 3</option>
                              <!-- Add more substitute players as needed -->
                            </select>
                          </td>
                          <td><input type="text" name="substitutePosition1" class="form-control"></td>
                          <td><input type="text" name="substituteReason1" class="form-control"></td>
                        </tr>

                        <tr>
                          <td><input type="number" name="substituteJerseyNumber1" class="form-control"></td>
                          <td>
                            <select name="substitutePlayerName1" class="form-control">
                              <option value="SubPlayer1">Substitute Player 1</option>
                              <option value="SubPlayer2">Substitute Player 2</option>
                              <option value="SubPlayer3">Substitute Player 3</option>
                              <!-- Add more substitute players as needed -->
                            </select>
                          </td>
                          <td><input type="text" name="substitutePosition1" class="form-control"></td>
                          <td><input type="text" name="substituteReason1" class="form-control"></td>
                        </tr>
                      <!-- Repeat the above block for more substitute players -->
                    </tbody>
                  </table>

                  <!-- Submit Button -->
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </div>
              <!-- <box body> -->
                </form>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </section>
@endsection
