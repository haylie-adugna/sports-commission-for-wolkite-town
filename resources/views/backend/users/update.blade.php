@extends('layouts.app')

@section('content')
    <section class="content">
        <div class="rows">
            <!-- right column -->

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Upadte User Information</h3>
                </div>
                <form novalidate method="POST" action="{{ route('users.update', ['id' => $users->id]) }}">
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
                                        value="{{ $users->first_name }}">
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <label for="Middle Name">Middle Name:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    </span>
                                    <input type="text" class="form-control" name="middle_name" placeholder="middle Name"
                                        value="{{ $users->middle_name }}">
                                </div>
                            </div>

                            <div class="col-xs-2">
                                <label for="last_Name">Last Name:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    </span>
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name"
                                        value="{{ $users->last_name }}">
                                </div>
                            </div>

                            <div class="col-xs-3">
                                <label for="Email">Email:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                    </span>
                                    <input type="text" class="form-control" name="email" placeholder="Email"
                                        value="{{ $users->email }}">
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <label for="phone Number">phone Number:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                                    </span>
                                    <input type="text" class="form-control" name="phone_number"
                                        placeholder="phone number" value="{{ $users->phone }}">
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-2">
                                <label for="Age">Age:</label>
                                <input type="number" class="form-control" name="age" placeholder="Age"
                                    value="{{ $users->age }}">
                            </div>
                            <div class="col-xs-3">
                                <label for="country">Country:</label>
                                <select class="form-control" name="country">
                                    <option value="" selected disabled>{{ $users->country }}</option>
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
                                <input type="text" class="form-control" name="city" placeholder="city">
                            </div>
                            <div class="col-xs-3">
                                <label for="User_Type">User Type:</label>
                                <select class="form-control" name="user_type" placeholder="User Type" >
                                    <option value="" selected disabled>{{ $users->user_type }}</option>
                                    <option value="couch">GameOfficer</option>
                                    <option value="couch">couch</option>
                                    <option value="gameofficer">commissioner</option>
                                    <option value="clubmanager">ClubManager</option>
                                    <option value="projectmanager">ProjectManager</option>
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
                                <label for="Assigned_Game">Assigned Game:</label>
                                <input type="text" class="form-control" name="assigned_game" placeholder="assigned game" value="{{ $users->assigned_game }}">
                            </div>
                            <div class="col-xs-3">
                                <label for="Language">Language:</label>
                                <select class="form-control" name="languge" placeholder="languge" >
                                    <option selected-value="{{ $users->languge }}" disabled>select languge</option>
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
                                <input type="text" class="form-control" name="experience" placeholder="Experience" value="{{ $users->experience }}">
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
                                <label for="Nationality">Nationality:</label>
                                <input type="text" class="form-control" name="nationality" placeholder="nationality">
                            </div>
                            <div class="col-xs-3">
                                <label for="Gender">Gender:</label>
                                <select class="form-control" name="gender" placeholder="Gender">
                                    <option value="" selected disabled>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>

                            </div>

                            <div class="col-xs-3">
                                <label for="Address">Address:</label>
                                <input type="text" class="form-control" name="address" placeholder="Address">
                            </div>
                            <div class="col-xs-3">
                                <label for="Mother Name">Mother Name:</label>
                                <input type="text" class="form-control" name="mother_name"
                                    placeholder="Mother full name">
                            </div>
                        </div>
                    </div>

                    <!-- /.box-body -->

                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-3">
                                <label for="Behavioral Records">Behavioral Records:</label>
                                <div class="form-group">
                                    <select class="form-control select2" multiple="multiple"
                                        data-placeholder="Select Behavioral Records" style="width: 100%;">
                                        <option>Red card</option>
                                        <option>Yellow card</option>
                                        <option>Green card</option>
                                    </select>
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
                        <button type="submit" class="btn btn-warning"><a href="{{route('users.index')}}">Cancel</a></button>
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
