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
                        @foreach ($games as $games)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $games->Name }}</td>
                            <td>{{ $games->Rules }}</td>
                            <td>{{ $games->Equipment }}</td>
                            <td>{{ $games->Duration }}</td>
                            <td>{{ $games->Venue }}</td>
                            <td>{{ $games->Season }}</td>
                            <td>{{ $games->Created_by }}</td>
                            <td>{{ $games->Governing_Body }}</td>
                            <td>{{ $games->status }}</td>
                            <td class="text-center">
                                <div class="fa fa-edit">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown"
                                        data-offset="-52">
                                        <i class="fas fa-bars"></i>
                                        </button>

                                         <div class="dropdown-menu pull-right" role="menu">

                                            {{--View Profile--}}
                                            <a href="{{route('games.show', $games->id)}}" class="dropdown-item"><i class="fa fa-fw fa-edit"></i> View Information</a><br><br>
                                            {{--Edit--}}
                                            <a href="{{route('games.update', $games->id)}}" class="dropdown-item"><i class="fa fa-fw fa-edit"></i> Edit Information</a><br><br>
                                            <i class="divider"></i>

                                            {{--Delete--}}
                                            <a id="" href="{{route('games.destroy', $games->id)}}" class="dropdown-item"><i class="fa fa-fw fa-edit"></i> Delete User</a>
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
