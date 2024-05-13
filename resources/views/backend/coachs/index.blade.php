@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            coachs Data Management
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
                        <a href="{{ route('coachs.assign') }}" class="btn btn-success mb-3">Assign coach to Club</a>
                        <table id="cbtn-selectors" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>coach_ID</th>
                                    <th>coach_Name</th>
                                    <th>Club_ID</th>
                                    <th>Club_Name</th>
                                    <th>Contact Information</th>
                                    <th>Location</th>
                                    <th>Game Category</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coachs as $coach)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $coach->user_id }}</td>
                                        <td>{{ $coach->user->first_name }}</td>
                                        <td>{{ $coach->club_id }}</td>
                                        <td>{{ $coach->club->club_name }}</td>
                                        <td>{{ $coach->contact_information }}</td>
                                        <td>{{ $coach->location }}</td>
                                        <td>
                                            @if ($coach->gameType)
                                                {{ $coach->gameType->game_type }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ $coach->status }}</td>
                                        <td class="text-center">
                                            <form method="POST" action="{{ route('coachs.destroy', $coach->id) }}"
                                                class="d-inline">
                                                @csrf @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this coach?')">
                                                    <i class="fa fa-fw fa-trash"></i> Delete Coach
                                                </button>
                                            </form>

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
