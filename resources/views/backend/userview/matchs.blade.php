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
            <li class="active">Machs tables</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row" id="draggablePanelList">
            <div class="card-block">
                @php
                    // Define an array of colors
                    $colors = ['bg-primary', 'bg-secondary', 'bg-success', 'bg-danger', 'bg-info', 'bg-warning'];
                @endphp
                @foreach ($matchs as $index => $match)
                    <div class="col-md-4">
                        <div class="card {{ $colors[$index % count($colors)] }}">
                            <div class="card-header">
                                <h3 class="card-title">Match ID: {{ $loop->iteration }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <p><strong>Teams:</strong> {{ $match->team1->club_name }} VS {{ $match->team2->club_name }}</p>
                                <p><strong>Referee:</strong> {{ $match->Referee }}</p>
                                <p><strong>Assistant Referee 1:</strong> {{ $match->Assistant_Referee1 }}</p>
                                <p><strong>Assistant Referee 2:</strong> {{ $match->Assistant_Referee2 }}</p>
                                <p><strong>Start Time:</strong> {{ $match->Start_time }}</p>
                                <p><strong>End Time:</strong> {{ $match->End_time }}</p>
                                <p><strong>Venue:</strong> {{ $match->Venue }}</p>
                                <p><strong>Medical Support:</strong> {{ $match->Medical_Support }}</p>
                                <p><strong>Commentator:</strong> {{ $match->commentator->first_name }}</p>
                                <p><strong>Promoter:</strong> {{ $match->Promoter }}</p>
                                <p><strong>Ticket:</strong> {{ $match->Ticket }}</p>
                                <p><strong>Record Keeping:</strong> {{ $match->Recored_Keeping }}</p>
                            </div>
                            <div class="card-footer">
                                @if ($match->End_time > now())
                                <!-- "Guess Result" button -->
                                <a href="{{ route('guess_result', ['match_id' => $match->id]) }}" class="btn btn-primary bg-black">Guess Result</a>
                            @endif
                            <a href="{{ route('guess.result.index') }}" class="btn btn-primary">View my Guess</a>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                @endforeach
            </div>
        </div>
        <!-- /.row -->
    </section>

@endsection
