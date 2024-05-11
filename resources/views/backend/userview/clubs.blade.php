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

    <section class="content">
        <div class="row">
            @php
                // Define an array of colors
                $colors = ['bg-primary', 'bg-secondary', 'bg-success', 'bg-danger', 'bg-warning', 'bg-info'];
            @endphp
            @foreach ($clubs as $index => $club)
            <div class="col-md-4">
                <div class="card {{ $colors[$index % count($colors)] }}">
                    <div class="card-header">
                        <h3 class="card-title">Club ID: {{ $loop->iteration }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <p><strong>Club Name:</strong> {{ $club->club_name }}</p>
                        <p><strong>Club Manager:</strong> @if ($club->club_manager) {{ $club->club_manager->first_name }} {{ $club->club_manager->last_name }} @else N/A @endif</p>
                        <p><strong>Coach Name:</strong> @if ($club->coach) {{ $club->coach->first_name }} {{ $club->coach->last_name }} @else N/A @endif</p>
                        <p><strong>Contact Information:</strong> {{ $club->contact_information }}</p>
                        <p><strong>Social Media Link:</strong> {{ $club->social_media_link }}</p>
                        <p><strong>Location:</strong> {{ $club->location }}</p>
                        <p><strong>Game Category:</strong> @if ($club->gameType) {{ $club->gameType->game_type }} @else N/A @endif</p>
                        <p><strong>Document:</strong> {{ $club->document }}</p>
                        <p><strong>Description:</strong> {!! $club->description !!}</p>
                        <p><strong>Status:</strong> {{ $club->status }}</p>
                        <p><strong>Logo:</strong> <img style="height: 100px; width: 100px;" src="{{ asset('upload/clubs/image/' . $club->logo) }}" alt="logo"></p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            @endforeach
        </div>
        <!-- /.row -->
    </section>

    <!-- /.content -->

@endsection
