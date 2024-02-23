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
        <form method="POST" action="{{ route("admin.users.store") }}" enctype="multipart/form-data">
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
                    <label class="required" for="roles">Select Roles</label>
                    <select style="height: 150px; border: 3px solid #4d8ae4;" class="form-control select2 {{ $errors->has('roles') ? 'is-invalid' : '' }}" name="roles[]" id="roles" multiple required>
                        @foreach($roles as $id => $role)
                            <option value="{{ $id }}" {{ in_array($id, old('roles', [])) ? 'selected' : '' }}>{{ $role }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('roles'))
                        <span class="text-danger">{{ $errors->first('roles') }}</span>
                    @endif
                    <span class="help-block">{{ trans('You can give more than one role') }}</span>
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
                      <input type="text" class="form-control" name="nationality" placeholder="nationality" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="club">Gender:</label>
                    <select class="form-control" name="gender" placeholder="Gender" required>
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
                      <input type="text" class="form-control" name="address" required placeholder="address">
                    </div>
                  </div>
                  <div class="form-group">
                    <label> Mothers full name:</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                      </span>
                      <input type="text" class="form-control" name="mother_full_name"
                        placeholder="Mother Full Name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="image">Images</label>
                    <div class="input-group">
                        <input type="file" accept="image/*" class="form-control" name="image" id="imageInput" required>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-upload" aria-hidden="true"></span>
                        </span>
                    </div>
                    <div id="imagePreviewContainer"></div>
                </div>

                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="box-footer">

            <button type="submit" class="btn btn-primary pull-right">Register</button>
            <button type="submit" class="btn btn-warning pull-right">
                <a href="{{ route('admin.users.create') }}"
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
