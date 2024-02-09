@extends('layouts.app')

@section('content')
<section class="content">
    <div class="rows">
      <!-- right column -->

                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">User Create</h3>
                  </div>
                  <form novalidate method="post" action="{{ route('users.register') }}">
                    @csrf

                  <div class="box-body">
                    <div class="row">
                      <div class="col-xs-3">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            </span>
                            <label for="club">Assigned Club:</label>
                            <input type="text" class="form-control" name="first_name" placeholder="First Name">
                        </div>
                    </div>

                    <div class="col-xs-3">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            </span>
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                        </div>
                    </div>

                      <div class="col-xs-3">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                            </span>
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-xs-3">
                      <div class="input-group">
                          <span class="input-group-addon">
                              <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                          </span>
                          <input type="text" class="form-control" name="phone_number" placeholder="phone number">
                      </div>
                  </div>

                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-body">
                    <div class="row">
                      <div class="col-xs-3">
                        <input type="text" class="form-control" name="age" placeholder="Age">
                   </div>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="country" placeholder="country">
                        </div>
                      <div class="col-xs-3">
                        <input type="text" class="form-control" name="city" placeholder="city">
                      </div>
                      <div class="col-xs-3">
                            <select class="form-control" name="user_type" placeholder="User Type">
                                <option value="" selected disabled>Select User Type</option>
                                <option value="admin">Admin</option>
                                <option value="game_officer">GameOfficer</option>
                                <option value="club_manager">ClubManager</option>
                                <option value="project_manager">ProjectManager</option>
                                <option value="player">Player</option>
                                <option value="user">User</option>

                            </select>
                       </div>
                     </div>
                  </div>
                   <!-- /.box-body -->

                   <div class="box-body">
                    <div class="row">
                      <div class="col-xs-3">
                        <input type="text" class="form-control" name="assigned_game" placeholder="assigned game">
                      </div>
                      <div class="col-xs-3">
                        <input type="text" class="form-control" name="languge" placeholder="languge">
                      </div>
                      <div class="col-xs-3">
                        <input type="text" class="form-control" name="experience" placeholder="Experience">
                      </div>
                      <div class="col-xs-3">
                        <input type="text" class="form-control"  name="date_of_birth" placeholder="date of birth">
                      </div>
                    </div>
                  </div>

                   <!-- /.box-body -->
                   <div class="box-body">
                    <div class="row">
                      <div class="col-xs-3">
                        <input type="text" class="form-control"  name="nationality" placeholder="nationality">
                      </div>
                      <div class="col-xs-3">
                            <select class="form-control" name="gender" placeholder="Gender">
                                <option value="" selected disabled>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>

                    </div>

                      <div class="col-xs-3">
                        <input type="text" class="form-control" name="address" placeholder="Address">
                      </div>
                      <div class="col-xs-3">
                        <input type="text" class="form-control" name="mother_name" placeholder="Mother full name">
                      </div>
                    </div>
                  </div>

                   <!-- /.box-body -->

                   <div class="box-body">
                    <div class="row">
                      <div class="col-xs-3">
                        <div class="form-group">
                          <select class="form-control select2" multiple="multiple" data-placeholder="Select Behavioral Records" style="width: 100%;">
                            <option>Red card</option>
                            <option>Yellow card</option>
                            <option>Green card</option>
                          </select>
                        </div>
                        </div>

                      <div class="col-xs-3">
                        <input type="text" class="form-control" name="club" placeholder="club">
                      </div>
                      <div class="col-xs-3">
                        <input type="text" class="form-control" name="project" placeholder="Project">
                      </div>
                    </div>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-secondary">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </div>


                </form>
                </div>
                <!-- /.box -->
              </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->

@endsection
