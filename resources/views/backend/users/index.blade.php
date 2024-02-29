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
              <div id="table-container" class="box-body table-responsive">
                <div class="box-body table-responsive">
                    <a href="{{ route('admin.users.create') }}" class="btn btn-success mb-3">Add New user</a>

                <table id="example1" class="table table-bordered table-striped">
                    <p class="pull-right">Date: <span id="currentDate" ></span></p>
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Photo</th>
                            <th>First_Name</th>
                            <th>father_Name</th>
                            <th>last_Name</th>
                            <th>Email</th>
                            <th>User type</th>
                            <th>Phone_Number</th>
                            <th>Date_of_Birth</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Language</th>
                            <th>Address</th>
                            <th>Nationality</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                    {{-- @if(Qs::userIsSuperAdmin()) --}}
                    @foreach($users as $key => $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img class="img-circle" style="height: 100px; width: 100px;" src="{{asset('upload/user/image')}}/{{$user->photo}}" alt="User photo"></td>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->middle_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{$user->email }}</td>
                                <td>
                                    @foreach($user->roles as $key => $item)
                                        <span class="badge badge-info">{{ $item->title }}</span>
                                    @endforeach
                                </td>
                                <td>{{$user->phone_number}}</td>
                                <td>{{$user->date_of_birth }}</td>
                                <td>{{ $user->age }}</td>
                                <td>{{ $user->gender }}</td>
                                <td>{{ $user->language }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{$user->nationality }}</td>
                                <td>{{$user->status }}</td>
                                <td>
                                    @can('user_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.users.show', $user->id) }}">
                                           view
                                        </a>
                                    @endcan

                                    @can('user_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.users.edit', $user->id) }}">
                                           edit
                                        </a>
                                    @endcan
                                    @can('user_delete')
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-xs btn-danger" value="delete">
                                        </form>
                                    @endcan
                                    {{-- @can('user_status') --}}
                                    <form action="{{ route('admin.users.toggle-status', $user->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        <button type="submit" class="btn btn-xs {{ $user->status === 'active' ? 'btn-danger' : 'btn-success' }}">
                                            {{ $user->status === 'active' ? 'Make Inactive' : 'Make Active' }}
                                        </button>
                                    </form>
                                    {{-- @endcan --}}

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
         <!-- this row will not appear when printing -->
         <div class="row no-print">
            <div class="col-xs-12">
                <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Open Print Dialog</a>
                <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                <button type="button" class="btn btn-primary" onclick="generatePDF()">
                    <i class="fa fa-download"></i> Generate PDF
                  </button>
                <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                <button type="button" class="btn btn-default" id="printTableButton"><i class="fa fa-print"></i> Print Table</button>
            </div>
        </div>
      </section>
@endsection
