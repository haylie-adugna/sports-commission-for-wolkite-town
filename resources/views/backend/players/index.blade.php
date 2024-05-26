@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Players Data Management
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

                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <a href="{{ route('players.assign') }}" class="btn btn-success mb-3">Assign Player to Club</a>
                        <table id="cbtn-selectors" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Player_ID</th>
                                    <th>Player_Name</th>
                                    <th>Club_ID</th>
                                    <th>Club_Name</th>

                                    <th>Status</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($players as $player)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $player->user_id }}</td>
                                        <td>{{$player->user->first_name }}</td>
                                        <td>{{ $player->club_id }}</td>
                                        <td>{{ $player->club->club_name }}</td>
                                        <td>Active</td>
                                        <td class="text-center">
                                            <div class="fa fa-edit">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm dropdown-toggle"
                                                        data-toggle="dropdown" data-offset="-52">
                                                        <i class="fas fa-bars"></i>
                                                    </button>

                                                    <div class="dropdown-menu pull-right" role="menu">
                                                        {{--View Profile--}}
                                                        <a href="{{ route('clubs.show', $player->id) }}"
                                                            class="dropdown-item"><i class="fa fa-fw fa-edit"></i> View
                                                            Information</a><br><br>
                                                        {{--Edit--}}
                                                        <a href="{{ route('clubs.update', $player->id) }}"
                                                            class="dropdown-item"><i class="fa fa-fw fa-edit"></i> Edit
                                                            Information</a><br><br>
                                                        <i class="divider"></i>
                                                        {{--Delete--}}
                                                        <a id="" href="{{ route('clubs.destroy', $player->id) }}"
                                                            class="dropdown-item"><i class="fa fa-fw fa-edit"></i> Delete
                                                            player</a>
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
