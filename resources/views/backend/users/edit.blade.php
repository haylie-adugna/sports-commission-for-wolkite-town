@extends('layouts.app')

@section('content')
    <section class="content">
        <div class="rows">
            <!-- right column -->

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Upadte User Information</h3>
                </div>
                <form method="POST" action="{{ route("admin.users.update", [$user->id]) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-2">
                                <label for="First Name">First Name:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    </span>
                                    <input type="text" class="form-control" name="first_name" placeholder="First Name"
                                        value="{{ $user->first_name }}">
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <label for="Middle Name">Middle Name:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    </span>
                                    <input type="text" class="form-control" name="middle_name" placeholder="middle Name"
                                        value="{{ $user->middle_name }}">
                                </div>
                            </div>

                            <div class="col-xs-2">
                                <label for="last_Name">Last Name:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    </span>
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name"
                                        value="{{ $user->last_name }}">
                                </div>
                            </div>

                            <div class="col-xs-3">
                                <label for="Email">Email:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                    </span>
                                    <input type="text" class="form-control" name="email" placeholder="Email"
                                        value="{{ $user->email }}">
                                </div>
                            </div>

                            <div class="col-xs-2">
                                <label>Phone Number:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="fa fa-phone" aria-hidden="true"></span>
                                    </span>
                                    <input type="tel" class="form-control" name="phone_number" value="{{ $user->phone_number }}" placeholder="Phone Number" pattern="[0-9]{10}" required>
                                </div>
                                <small class="text-muted">Enter a 10-digit phone number.</small>
                            </div>

                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-2">
                                <label for="Age">Age:</label>
                                <input type="number" class="form-control" name="age" placeholder="Age"
                                    value="{{ $user->age }}">
                            </div>
                            <div class="col-xs-3">
                                <label for="country">Country:</label>
                                <select class="form-control" name="country">
                                    <option value="" selected disabled>{{ $user->country }}</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="USA">USA</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="S/Afria">S/Afria</option>
                                    <option value="china">china</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="UK">UK</option>
                                    <option value="Itay">Itay</option>
                                    <option value="Djibuti">Djibuti</option>
                                    <option value="Brazil">Brazil</option>
                                    <!-- Add more countries as needed -->
                                </select>
                            </div>

                            <div class="col-xs-3">
                                <label for="City">City:</label>
                                <input type="text" class="form-control" name="city" placeholder="city" value="{{ $user->city }}">
                            </div>
                            <div class="col-xs-4">
                                <label class="required" for="roles">user roles</label>
                                <button type="button" class="btn btn-primary waves-effect waves-light m-b-10" id='select-all'>select all
                                </button>
                                <button type="button" class="btn btn-primary waves-effect waves-light m-b-10" id='deselect-all'>deselect all
                                </button>
                                <select style="height: 150px; border: 3px solid #4d8ae4;" class="form-control select2 {{ $errors->has('roles') ? 'is-invalid' : '' }}" name="roles[]" id='public-methods' multiple='multiple'required>
                                    @foreach($roles as $id => $role)
                                        <option value="{{ $id }}" {{ in_array($id, old('roles', [])) ? 'selected' : '' }}>{{ $role }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('roles'))
                                    <span class="text-danger">{{ $errors->first('roles') }}</span>
                                @endif
                                <span class="help-block">{{ trans('you can select all') }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-3">
                                <label for="Assigned_Game">Assigned Game:</label>
                                <input type="text" class="form-control" name="assigned_game" placeholder="assigned game" value="{{ $user->assigned_game }}">
                            </div>
                            <div class="col-xs-3">
                                <label for="Language">Language:</label>
                                <select class="form-control" name="language" placeholder="languge" >
                                    <option selected-value="{{ $user->language }}" disabled>select languge</option>
                                    <option value="English">English</option>
                                    <option value="Amharic">Amharic</option>
                                    <option value="guragie">guragie</option>
                                    <option value="France">France</option>
                                    <option value="Afanoromo">Afan oromo</option>
                                    <option value="somali">somali</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-xs-3">
                                <label for="Experience">Experience:</label>
                                <input type="text" class="form-control" name="experience" placeholder="Experience" value="{{ $user->experience }}">
                            </div>
                            <div class="col-xs-3">
                                <label for="date_of_birth">Date of Birth:</label>
                                <input type="date" class="form-control" name="date_of_birth" value="{{ date('Y-m-d') }}">
                            </div>
                        </div>
                    </div>

                    <!-- /.box-body -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-3">
                                <label for="nationality">Nationality:</label>
                                <select class="form-control select2" name="nationality" placeholder="Nationality">
                                    <option value="Ethiopian" {{ $user->nationality === 'Ethiopian' ? 'selected' : '' }}>Ethiopian</option>
                                    <option value="USA" {{ $user->nationality === 'USA' ? 'selected' : '' }}>USA</option>
                                    <option value="British" {{ $user->nationality === 'British' ? 'selected' : '' }}>British</option>
                                    <option value="Chinese" {{ $user->nationality === 'Chinese' ? 'selected' : '' }}>Chinese</option>
                                    <option value="Indian" {{ $user->nationality === 'Indian' ? 'selected' : '' }}>Indian</option>
                                    <option value="French" {{ $user->nationality === 'French' ? 'selected' : '' }}>French</option>
                                    <option value="German" {{ $user->nationality === 'German' ? 'selected' : '' }}>German</option>
                                    <option value="Japanese" {{ $user->nationality === 'Japanese' ? 'selected' : '' }}>Japanese</option>
                                    <option value="Brazilian" {{ $user->nationality === 'Brazilian' ? 'selected' : '' }}>Brazilian</option>
                                    <option value="Other" {{ $user->nationality === 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>

                            <div class="col-xs-3">
                                <label for="Gender">Gender:</label>
                                <select class="form-control" name="gender" placeholder="Gender">
                                    <option value="male" {{ $user->gender === 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ $user->gender === 'female' ? 'selected' : '' }}>Female</option>
                                </select>
                            </div>


                            <div class="col-xs-3">
                                <label for="Address">Address:</label>
                                <input type="text" class="form-control" name="address" placeholder="Address" value="{{ $user->address}}">
                            </div>
                            <div class="col-xs-3">
                                <label for="Mother Name">Mother Name:</label>
                                <input type="text" class="form-control" name="mother_full_name" value="{{ $user->mother_full_name}}"
                                    placeholder="Mother full name">
                            </div>
                        </div>
                    </div>

                    <!-- /.box-body -->

                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-3">
                                <label for="Behavioral Records">Images:</label>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="file" accept="image/*" class="form-control" name="image" id="imageInput" required value="{{asset('upload/user/image')}}/{{$user->photo}}">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-upload" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                    <div id="imagePreviewContainer"></div>
                                </div>
                            </div>

                            <div class="col-xs-3">
                                <label for="club">Assigned Club:</label>
                                <input type="text" class="form-control" name="club" placeholder="club">
                            </div>
                            <div class="col-xs-3">
                                <label for="Assigned_Project">Assigned Project:</label>
                                <input type="text" class="form-control" name="project" placeholder="Project">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-warning"><a href="{{route('admin.users.index')}}">Cancel</a></button>
                        <button type="submit"  class="btn btn-primary pull-right">Update</button>
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
