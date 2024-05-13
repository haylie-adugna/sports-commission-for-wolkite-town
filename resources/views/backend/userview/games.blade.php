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
            <li class="active">Games tables</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            @php
                // Define an array of colors
                $colors = ['bg-primary', 'bg-secondary', 'bg-success', 'bg-danger', 'bg-warning', 'bg-info'];
            @endphp
            @foreach ($games as $index => $game)
            <div class="col-md-4">
                <div class="card {{ $colors[$index % count($colors)] }}">
                    <div class="card-header text-center">
                        <h3 class="card-title bg-black">{{ $game->game_type }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <p><strong>Start Date and Time:</strong> {{ $game->start_date }}</p>
                        <p><strong>End Date and Time:</strong> {{ $game->end_date }}</p>
                        <p><strong>Governing Body:</strong> {{ $game->governing_body }}</p>
                        <p><strong>Game Category:</strong> {{ $game->game_category }}</p>
                        <p><strong>Description:</strong> {{ $game->description }}</p>
                        <p><strong>Rules:</strong> {{ $game->rules }}</p>
                        <p><strong>Number of Players:</strong> {{ $game->number_of_player }}</p>
                        <p><strong>Equipment:</strong> {{ $game->equipment }}</p>
                        <!-- Add more fields as needed -->
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


@endsection
