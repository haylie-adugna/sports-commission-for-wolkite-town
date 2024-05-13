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
                        <a href="{{ route('project.create') }}" class="btn btn-success mb-3"><i class="fa fa-plus"></i>Add
                            New project</a>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Project Name</th>
                                    <th>Project Managers</th>
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
                                @foreach ($projects as $project)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $project->project_name }}</td>
                                        <td>
                                            @if ($project->project_manager)
                                                {{ $project->project_manager->first_name }}
                                                {{ $project->project_manager->last_name }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if ($project->coach)
                                                {{ $project->coach->first_name }} {{ $project->coach->last_name }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ $project->contact_information }}</td>
                                        <td>{{ $project->social_media_link }}</td>
                                        <td>{{ $project->location }}</td>
                                        <td>
                                            @if ($project->gameType)
                                                {{ $project->gameType->game_type }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ $project->document }}</td>
                                        <td>{!! $project->description !!}</td>
                                        <td>{{ $project->status }}</td>
                                        <td><img style="height: 100px; width: 100px;"
                                                src="{{ asset('upload/project/image') }}/{{ $project->logo }}"
                                                alt="logo"></td>
                                        <td><a href="{{ asset($project->pdf) }}" target="_blank">View PDF</a></td>
                                        <td class="text-center">
                                            <div class="fa fa-edit">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm dropdown-toggle"
                                                        data-toggle="dropdown" data-offset="-52">
                                                        <i class="fas fa-bars"></i>
                                                    </button>
                                                    <div class="dropdown-menu pull-right" role="menu">
                                                        {{-- View Profile --}}
                                                        <a href="{{ route('project.show', $project->id) }}"
                                                            class="dropdown-item"><i class="fa fa-fw fa-edit"></i> View
                                                            Information</a><br><br>
                                                        {{-- Edit --}}
                                                        <a href="{{ route('project.update', $project->id) }}"
                                                            class="dropdown-item"><i class="fa fa-fw fa-edit"></i> Edit
                                                            Information</a><br><br>
                                                        <i class="divider"></i>
                                                        {{-- Delete --}}
                                                        <a id=""
                                                            href="{{ route('project.destroy', $project->id) }}"
                                                            class="dropdown-item"><i class="fa fa-fw fa-edit"></i> Delete
                                                            Club</a>
                                                        <form method="HEAD" id="" action="" class="hidden">
                                                            @csrf @method('delete')</form>
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
@endsection
