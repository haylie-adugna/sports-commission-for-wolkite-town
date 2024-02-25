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
                <h3 class="box-title">User Data managment Table</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive">
                <a href="{{ route('events.create') }}" class="btn btn-success mb-3">Add New Event</a>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tittle</th>
                            <th>Type</th>
                            <th>Body</th>
                            <th>photo</th>
                            <th>video</th>
                            <th>Created_by</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $events)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $events->Tittle }}</td>
                                <td>{{ $events->Type }}</td>
                                <td>{!! $events->Body !!}</td>
                                <td> <img width="150" height="150" src="{{asset('upload/event/image')}}/{{$events->image}}" alt="event"> </td>
                                <td>
                                    <a href="{{ asset('upload/event/video/' . $events->video) }}" target="_blank">
                                        <video width="220" height="140" autoplay muted>
                                            <source src="{{ asset('upload/event/video/' . $events->video) }}" type="video/mp4">
                                        </video>
                                    </a>
                                </td>
                                <td>{{ $events->Created_by }}</td>
                                <td>{{ $events->status }}</td>
                                <td class="text-center">
                                    <div class="fa fa-edit">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown"
                                            data-offset="-52">
                                            <i class="fas fa-bars"></i>
                                            </button>

                                             <div class="dropdown-menu pull-right" role="menu">

                                                {{--View Profile--}}
                                                <a href="{{route('events.show', $events->id)}}" class="dropdown-item"><i class="fa fa-fw fa-edit"></i> View Information</a><br><br>
                                                {{--Edit--}}
                                                <a href="{{route('events.update', $events->id)}}" class="dropdown-item"><i class="fa fa-fw fa-edit"></i> Edit Information</a><br><br>
                                                <i class="divider"></i>

                                                {{--Delete--}}
                                                <a id="" href="{{route('events.destroy', $events->id)}}" class="dropdown-item"><i class="fa fa-fw fa-edit"></i> Delete User</a>
                                                <form method="HEAD" id="" action="" class="hidden">@csrf</form>

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

