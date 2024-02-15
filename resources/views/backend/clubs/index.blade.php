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
                        <a href="{{ route('clubs.create') }}" class="btn btn-success mb-3">Add New Club</a>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Club Name</th>
                                    <th>Club Manager</th>
                                    <th>Coach Name</th>
                                    <th>Contact Information</th>
                                    <th>Social Media Link</th>
                                    <th>Location</th>
                                    <th>Game Category</th>
                                    <th>Document</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Logo</th>
                                    <th>PDF</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clubs as $clubs)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $clubs->club_name }}</td>
                                        <td>{{ $clubs->club_manager }}</td>
                                        <td>{{ $clubs->coach_name }}</td>
                                        <td>{{ $clubs->contact_information }}</td>
                                        <td>{{ $clubs->social_media_link }}</td>
                                        <td>{{ $clubs->location }}</td>
                                        <td>{{ $clubs->game_type_id }}</td>
                                        <td>{{ $clubs->document }}</td>
                                        <td>{{ $clubs->description }}</td>
                                        <td>{{ $clubs->status }}</td>
                                        <td><img src="{{ asset($clubs->logo) }}" alt="Club Logo" width="50"></td>
                                        <td><a href="{{ asset($clubs->pdf) }}" target="_blank">View PDF</a></td>
                                        <td class="text-center">
                                            <div class="fa fa-edit">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm dropdown-toggle"
                                                        data-toggle="dropdown" data-offset="-52">
                                                        <i class="fas fa-bars"></i>
                                                    </button>

                                                    <div class="dropdown-menu pull-right" role="menu">
                                                        {{--View Profile--}}
                                                        <a href="{{ route('clubs.show', $clubs->id) }}"
                                                            class="dropdown-item"><i class="fa fa-fw fa-edit"></i> View
                                                            Information</a><br><br>
                                                        {{--Edit--}}
                                                        <a href="{{ route('clubs.update', $clubs->id) }}"
                                                            class="dropdown-item"><i class="fa fa-fw fa-edit"></i> Edit
                                                            Information</a><br><br>
                                                        <i class="divider"></i>
                                                        {{--Delete--}}
                                                        <a id="" href="{{ route('clubs.destroy', $clubs->id) }}"
                                                            class="dropdown-item"><i class="fa fa-fw fa-edit"></i> Delete
                                                            Club</a>
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
