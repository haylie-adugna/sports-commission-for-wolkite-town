@extends('layouts.app')

@section('content')
    <section class="content">
        <div class="rows">
            <!-- right column -->

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Register New User</h3>
                </div>
                <form novalidate method="post" action="{{ route('users.register') }}">
                    @csrf

                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-3">
                                <label> First Name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    </div>
                                    <input type="text" class="form-control" name="first_name" placeholder="First Name"
                                        required>

                                </div>
                            </div>
                            <div class="col-xs-3">
                                <label> Middle Name:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    </span>
                                    <input type="text" class="form-control" name="middle_name" placeholder="Middle Name">
                                </div>
                            </div>

                            <div class="col-xs-3">
                                <label> Last Name:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    </span>
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="col-xs-3">
                                <label>Email:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                    </span>
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                            </div>



                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-body">
                        <div class="col-xs-3">
                            <label>Password:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                                </span>
                                <input id="password" type="password" class="form-control"value="12345678" name="password" placeholder="Enter Password"
                                    required>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <label>Confirm Password:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                                </span>
                                <input id="confirm_password" type="password" name="password_confirmation" class="form-control"  value="12345678">
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label>Phone number:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input type="text" class="form-control" value="0912345678"
                                        data-inputmask='"mask": "+999 99 999 9999"' data-mask
                                        placeholder="Enter phone number">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="row">
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-3">
                                <label>Age:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="fa fa-user" aria-hidden="true"></span>
                                    </span>
                                    <input type="number" class="form-control" name="age" placeholder="age">
                                </div>
                            </div>

                            <div class="col-xs-3">
                                <label>country:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="fa fa-globe" aria-hidden="true"></span>
                                    </span>
                                    <input type="text" class="form-control" name="country" placeholder="country">
                                </div>
                            </div>

                            <div class="col-xs-3">
                                <label>city:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="fa fa-building" aria-hidden="true"></span>
                                    </span>
                                    <input type="text" class="form-control" name="city" placeholder="city">
                                </div>
                            </div>

                            <div class="col-xs-3">
                                <label for="club">User Type:</label>
                                <select class="form-control" name="user_type" placeholder="User Type">
                                    <option value="" selected disabled>Select User Type</option>
                                    <option value="commissioner">Commissioner</option>
                                    <option value="gameofficer">Game Officer</option>
                                    <option value="clubmanager">Club Manager</option>
                                    <option value="projectmanager">Project Manager</option>
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
                                <label>Assigned game:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <input type="text" class="form-control" name="assigned_game"
                                        placeholder="Assigned game">
                                </div>
                            </div>

                            <div class="col-xs-3">
                                <label>language:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="fa fa-language" aria-hidden="true"></span>
                                    </span>
                                    <input type="text" class="form-control" name="language" placeholder="Language">
                                </div>
                            </div>

                            <div class="col-xs-3">
                                <label>experience:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="fa fa-star" aria-hidden="true"></span> <!-- Modified icon class -->
                                    </span>
                                    <input type="text" class="form-control" name="experience"
                                        placeholder="Experience">
                                </div>
                            </div>

                            <div class="col-xs-3">
                                <label>Date of birth:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar" aria-hidden="true"></span>
                                    </span>
                                    <input type="date" class="form-control" name="date_of_birth">
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- /.box-body -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-3">
                                <label>nationality:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="fa fa-flag" aria-hidden="true"></span>
                                        <!-- Changed fa-building to fa-flag -->
                                    </span>
                                    <input type="text" class="form-control" name="nationality"
                                        placeholder="nationality">
                                </div>
                            </div>

                            <div class="col-xs-3">
                                <label for="club">Gender:</label>
                                <select class="form-control" name="gender" placeholder="Gender">
                                    <option value="" selected disabled>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>

                            </div>

                            <div class="col-xs-3">
                                <label> address:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </span>

                                    <input type="text" class="form-control" name="address" placeholder="address">
                                </div>
                            </div>

                            <div class="col-xs-3">
                                <label>Mother Full Name:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    </span>
                                    <input type="text" class="form-control" name="mother_full_name"
                                        placeholder="Mother Full Name">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /.box-body -->

                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-3">
                                <label for="club">Behavioral Records:</label>
                                <div class="form-group">
                                    <select name="behavioral_record" class="form-control select2" multiple="multiple" data-placeholder="Select Behavioral Records" style="width: 100%;">
                                        <option>Red card</option>
                                        <option>Yellow card</option>
                                        <option>Green card</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-xs-3">
                                <label>club:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="fa fa-soccer-ball-o" aria-hidden="true"></span>
                                    </span>

                                    <input type="text" class="form-control" name="club" placeholder="Club">
                                </div>
                            </div>

                            <div class="col-xs-3">
                                <label>project:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="fa fa-soccer-ball-o" aria-hidden="true"></span>
                                    </span>

                                    <input type="text" class="form-control" name="project" placeholder="project">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="box-footer">

                        <button type="submit" class="btn btn-primary pull-right">Register</button>
                        <button type="submit" class="btn btn-warning pull-right">
                            <a href="{{ route('users.create') }}"
                                style="color: lightgray; text-decoration: none;">Cancel</a>
                        </button>
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
@endsection
