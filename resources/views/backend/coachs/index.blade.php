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
                                    <th>Club_Manager</th>
                                    <th>Coach_Name</th>
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
                                @foreach ($coachs as $coach)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $coach->user_id }}</td>
                                        <td>{{$coach->user->first_name }}</td>
                                        <td>{{ $coach->club_id }}</td>
                                        <td>{{ $coach->club->club_name }}</td>
                                        <td>
                                            @if ($coach->club_manager)
                                                {{ $coach->club_manager->first_name }} {{ $coach->club_manager->last_name }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if ($coach->coach)
                                                {{ $coach->coach->first_name }} {{ $coach->coach->last_name }}
                                            @else
                                                N/A
                                            @endif
                                        </td>                                        <td>{{ $coach->contact_information }}</td>
                                        <td>{{ $coach->social_media_link }}</td>
                                        <td>{{ $coach->location }}</td>
                                        <td>
                                            @if ($coach->gameType)
                                                {{ $coach->gameType->game_type }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ $coach->document }}</td>
                                        <td>{!! $coach->description !!}</td>
                                        <td>{{ $coach->status }}</td>
                                        <td><img style="height: 100px; width: 100px;" src="{{asset('upload/clubs/image')}}/{{$coach->logo}}" alt="logo"></td>
                                        <td><a href="{{ asset($coach->pdf) }}" target="_blank">View PDF</a></td>
                                        <td class="text-center">
                                            <div class="fa fa-edit">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm dropdown-toggle"
                                                        data-toggle="dropdown" data-offset="-52">
                                                        <i class="fas fa-bars"></i>
                                                    </button>

                                                    <div class="dropdown-menu pull-right" role="menu">
                                                        {{--View Profile--}}
                                                        <a href="{{ route('clubs.show', $coach->id) }}"
                                                            class="dropdown-item"><i class="fa fa-fw fa-edit"></i> View
                                                            Information</a><br><br>
                                                        {{--Edit--}}
                                                        <a href="{{ route('clubs.update', $coach->id) }}"
                                                            class="dropdown-item"><i class="fa fa-fw fa-edit"></i> Edit
                                                            Information</a><br><br>
                                                        <i class="divider"></i>
                                                        {{--Delete--}}
                                                        <a id="" href="{{ route('clubs.destroy', $coach->id) }}"
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
