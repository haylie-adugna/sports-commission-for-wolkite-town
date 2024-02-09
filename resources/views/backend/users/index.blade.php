@extends('layouts.app')
@section('content')

     <!-- Content Header (Page header) -->
     <section class="content-header">
        <h1>
          Data Tables
          <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Tables</a></li>
          <li class="active">Data tables</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">User Data managment Table</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Photo</th>
                            <th>First_Name</th>
                            <th>father_Name</th>
                            <th>last_Name</th>
                            <th>Email</th>
                            <th>Phone_Number</th>
                            <th>Date_of_Birth</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Language</th>
                            <th>Address</th>
                            <th>Nationality</th>
                            <th>State</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                    {{-- @if(Qs::userIsSuperAdmin()) --}}
                        @foreach($users as $u1)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img class="rounded-circle" style="height: 40px; width: 40px;" src="{{ $u1->photo }}" alt="photo"></td>
                                <td>{{ $u1->first_name }}</td>
                                <td>{{ $u1->middle_name }}</td>
                                <td>{{ $u1->last_name }}</td>
                                <td>{{$u1->email }}</td>
                                <td>{{$u1->phone}}</td>
                                <td>{{$u1->date_of_birth }}</td>
                                <td>{{ $u1->age }}</td>
                                <td>{{ $u1->gender }}</td>
                                <td>{{ $u1->language }}</td>
                                <td>{{ $u1->address }}</td>
                                <td>{{$u1->nationality }}</td>
                                <td>{{$u1->state }}</td>
                                <td class="text-center">
                                    <div class="fa fa-fw fa-edit" >
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown"
                                            data-offset="-52">
                                            <i class="fas fa-bars"></i>
                                            </button>

                                             <div class="dropdown-menu pull-right" role="menu">

                                                {{--View Profile--}}
                                                <a href="{{route('users.show',$u1->id)}}" class="dropdown-item"><i class="fa fa-fw fa-edit"></i> View Information</a><br><br>
                                                {{--Edit--}}
                                                <a href="{{route('users.edit',$u1->id)}}" class="dropdown-item"><i class="fa fa-fw fa-edit"></i> Edit Information</a><br><br>
                                                <i class="divider"></i>

                                                {{--Delete--}}
                                                <a id="" href="{{route('users.destroy',$u1->id)}}" class="dropdown-item"><i class="fa fa-fw fa-edit"></i> Delete User</a>
                                                <form method="HEAD" id="" action="" class="hidden">@csrf @method('delete')</form>

                                            </div>
                                        </div>
                                     </div>
                                </td>
                            </tr>
                        @endforeach

                        {{-- @endif --}}
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
@endsection
