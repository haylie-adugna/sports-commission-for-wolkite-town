@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Clubs Data Management Table
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Clubs tables</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Clubs Data Management Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <a href="{{ route('leagues.create') }}" class="btn btn-success mb-3">Add New Club</a>
                        </br>
                        <table id="basic-btn" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>League ID</th>
                                    <th>Club ID</th>
                                    <th>Club Name</th>
                                    <th>Total played</th>
                                    <th>Won</th>
                                    <th>Draw</th>
                                    <th>Lost</th>
                                    <th>Total Goal</th>
                                    <th>Total Goal Against</th>
                                    <th>Goal Difference</th>
                                    <th>Total Point</th>
                                    <th>point Difference</th>
                                    <th>rank</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($leagues as $league)
                                    <tr>
                                        <td>{{ $league->id }}</td>
                                        <td>{{ $league->club_id }}</td>
                                        <td>{{ $league->clubs->club_name }}</td> <!-- corrected line -->
                                        <td>{{ $league->total_played }}</td>
                                        <td>{{ $league->total_win }}</td>
                                        <td>{{ $league->total_draw }}</td>
                                        <td>{{ $league->total_lost }}</td>
                                        <td>{{ $league->total_goal }}</td>
                                        <td>{{ $league->total_goal_against }}</td>
                                        <td>{{ $league->goal_difference }}</td>
                                        <td>{{ $league->total_point }}</td>
                                        <td>{{ $league->point_difference }}</td>
                                        <td>{{ $league->rank }}</td>
                                        <td class="text-center">
                                            <div class="fa fa-edit">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm dropdown-toggle"
                                                        data-toggle="dropdown" data-offset="-52">
                                                        <i class="fas fa-bars"></i>
                                                    </button>

                                                    <div class="dropdown-menu pull-right" role="menu">
                                                        {{--View Profile--}}
                                                        <a href="{{ route('leagues.show', $league->id) }}"
                                                            class="dropdown-item"><i class="fa fa-fw fa-edit"></i> View
                                                            Information</a><br><br>
                                                        {{--Edit--}}
                                                        <a href="{{ route('leagues.update', $league->id) }}"
                                                            class="dropdown-item"><i class="fa fa-fw fa-edit"></i> Edit
                                                            Information</a><br><br>
                                                        <i class="divider"></i>
                                                        {{--Delete--}}
                                                        <a id="" href="{{ route('leagues.destroy', $league->id) }}"
                                                            class="dropdown-item"><i class="fa fa-fw fa-edit"></i> Delete
                                                            leagues</a>
                                                        <form method="HEAD" id="" action=""
                                                            class="hidden">@csrf @method('delete')</form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
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
    <!-- /.content -->
@endsection
