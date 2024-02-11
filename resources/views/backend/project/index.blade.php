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
      <li class="active">Event tables</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Games Data managment Table</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Rules</th>
                        <th>Equipment</th>
                        <th>Duration</th>
                        <th>Venue</th>
                        <th>Season</th>
                        <th>Created_by</th>
                        <th>Governing_Body</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($project as $project)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $project->Name }}</td>
                            <td>{{ $project->Rules }}</td>
                            <td>{{ $project->Equipment }}</td>
                            <td>{{ $project->Duration }}</td>
                            <td>{{ $project->Venue }}</td>
                            <td>{{ $project->Season }}</td>
                            <td>{{ $project->Created_by }}</td>
                            <td>{{ $project->Governing_Body }}</td>
                            <td>{{ $project->status }}</td>
                            <td class="text-center">
                                <div class="fa fa-edit">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown"
                                        data-offset="-52">
                                        <i class="fas fa-bars"></i>
                                        </button>

                                         <div class="dropdown-menu pull-right" role="menu">

                                            {{--View Profile--}}
                                            <a href="{{route('project.show', $project->id)}}" class="dropdown-item"><i class="fa fa-fw fa-edit"></i> View Information</a><br><br>
                                            {{--Edit--}}
                                            <a href="{{route('project.update', $project->id)}}" class="dropdown-item"><i class="fa fa-fw fa-edit"></i> Edit Information</a><br><br>
                                            <i class="divider"></i>

                                            {{--Delete--}}
                                            <a id="" href="{{route('project.destroy', $project->id)}}" class="dropdown-item"><i class="fa fa-fw fa-edit"></i> Delete User</a>
                                            <form method="HEAD" id="" action="" class="hidden">@csrf @method('delete')</form>

                                        </div>
                                    </div>
                                 </div>
                            </td>

                            <!-- Add more columns as needed -->
                        </tr>
                        @endforeach
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
