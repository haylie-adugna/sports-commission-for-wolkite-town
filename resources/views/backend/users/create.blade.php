@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
      Register new user
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="box box-info">
        <form novalidate method="post" action="{{ route('users.register') }}">
            @csrf
      <div class="box-body">
        <div class="row">
          <div class="col-md-4">
            <div class="">
              <div class="box-body">
                <div class="form-group">
                  <label> First Name:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    </div>
                    <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                  </div>
                </div>
                <div class="form-group">
                  <label> Middle Name:</label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    </span>
                    <input type="text" class="form-control" name="middle_name" placeholder="Middle Name" required>
                  </div>
                </div>
                <div class="form-group">
                  <label> Last Name:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    </div>
                    <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                  </div>
                </div>
                <div class="form-group">
                  <label>Email:</label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    </span>
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                  </div>
                </div>
                <div class="form-group">
                  <label>Password:</label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                    </span>
                    <input id="password" type="password" class="form-control" value="12345678" name="password"
                      placeholder="Enter Password" required>
                  </div>
                </div>
                <div class="form-group">
                  <label>Confirm Password:</label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                    </span>
                    <input id="confirm_password" type="password" name="password_confirmation" class="form-control"
                      value="12345678">
                  </div>
                </div>
                <div class="form-group">
                  <label>Age:</label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="fa fa-user" aria-hidden="true"></span>
                    </span>
                    <input type="number" class="form-control" name="age" placeholder="age">
                  </div>
                </div>
                <div class="form-group">
                  <label>Phone number:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <input type="text" class="form-control" value="0912345678"
                      data-inputmask='"mask": "+999 99 999 9999"' data-mask placeholder="Enter phone number">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.col-md-4 -->
          <div class="col-md-4">
            <div class="">
              <div class="box-body">
                <div class="box-body">
                  <div class="form-group">
                    <label>country:</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <span class="fa fa-globe" aria-hidden="true"></span>
                      </span>
                      <input type="text" class="form-control" name="country" placeholder="country">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>city:</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <span class="fa fa-building" aria-hidden="true"></span>
                      </span>
                      <input type="text" class="form-control" name="city" placeholder="city">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="club">User Type:</label>
                    <select class="form-control" name="user_type" placeholder="User Type">
                      <option value="" selected disabled>Select User Type</option>
                      <option value="1">Commissioner</option>
                      <option value="2">Game Officer</option>
                      <option value="3">Club Manager</option>
                      <option value="4">Project Manager</option>
                      <option value="5">Player</option>
                      <option value="6">User</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Assigned game:</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fas fa-check"></i>
                      </span>
                      <input type="text" class="form-control" name="assigned_game" placeholder="Assigned game">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>language:</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <span class="fa fa-language" aria-hidden="true"></span>
                      </span>
                      <input type="text" class="form-control" name="language" placeholder="Language">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>experience:</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <span class="fa fa-star" aria-hidden="true"></span> <!-- Modified icon class -->
                      </span>
                      <input type="text" class="form-control" name="experience" placeholder="Experience">
                    </div>
                  </div>
                  <div class="form-group">
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
            </div>
          </div>
          <!-- /.col-md-4 -->
          <div class="col-md-4">
            <div class="">
              <div class="box-body">
                <div class="box-body">
                  <div class="form-group">
                    <label>nationality:</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <span class="fa fa-flag" aria-hidden="true"></span>
                        <!-- Changed fa-building to fa-flag -->
                      </span>
                      <input type="text" class="form-control" name="nationality" placeholder="nationality">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="club">Gender:</label>
                    <select class="form-control" name="gender" placeholder="Gender">
                      <option value="" selected disabled>Select Gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label> address:</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                      </span>
                      <input type="text" class="form-control" name="address" placeholder="address">
                    </div>
                  </div>
                  <div class="form-group">
                    <label> mothers full name:</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                      </span>
                      <input type="text" class="form-control" name="mother_full_name"
                        placeholder="Mother Full Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="club">Behavioral Records:</label>
                    <div class="form-group">
                      <select name="behavioral_record" class="form-control select2" multiple="multiple"
                        data-placeholder="Select Behavioral Records" style="width: 100%;">
                        <option>Red card</option>
                        <option>Yellow card</option>
                        <option>Green card</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label> Club:</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <span class="fa fa-soccer-ball-o" aria-hidden="true"></span>
                      </span>
                      <input type="text" class="form-control" name="club" placeholder="Club">
                    </div>
                  </div>
                </div>
                <div class="form-group">
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
      <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->

</div>
</div>
</form>
<!-- /.box -->
</section>

@endsection
