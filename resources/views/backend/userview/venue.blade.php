@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Venues Data Management Table
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Venues tables</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            @php
                // Define an array of colors
                $colors = ['bg-primary', 'bg-secondary', 'bg-success', 'bg-danger', 'bg-warning', 'bg-info'];
            @endphp
            @foreach ($venues as $index => $venue)
            <div class="col-md-4">
                <div class="card {{ $colors[$index % count($colors)] }}">
                    <div class="card-header">
                        <h3 class="card-title">Venue ID: {{ $loop->iteration }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <p><strong>Venue Name:</strong> {{ $venue->venue_name }}</p>
                        <p><strong>Description:</strong> {{ $venue->description }}</p>
                        <p><strong>Address:</strong> {{ $venue->address }}</p>
                        <p><strong>Capacity:</strong> {{ $venue->capacity }}</p>
                        <p><strong>Facilities:</strong> {{ $venue->facilities }}</p>
                        <p><strong>Layout:</strong><img style="height: 100px; width: 100px;" src="{{asset('upload/venue/layout')}}/{{$venue->layout}}" alt="event"></p>
                        <p><strong>Availability:</strong> {{ $venue->availability }}</p>
                        <p><strong>Contact Information:</strong> {{ $venue->contact_information }}</p>
                        <p><strong>Accessibility:</strong> {{ $venue->accessibility }}</p>
                        <p><strong>Cost:</strong> {{ $venue->cost }}</p>
                        <p><strong>Booking/Reservation Status:</strong> {{ $venue->booking }}</p>
                        <p><strong>Technical Specifications:</strong> {{ $venue->technical_specifications }}</p>
                        <p><strong>Rules and Regulations:</strong> {{ $venue->rules_and_regulations }}</p>
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
