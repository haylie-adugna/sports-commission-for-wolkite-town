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
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Venues Data Management Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <a href="{{ route('venue.create') }}" class="btn btn-success mb-3">Add New Venue</a>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Venue Name</th>
                                    <th>Description</th>
                                    <th>Address</th>
                                    <th>Capacity</th>
                                    <th>Facilities</th>
                                    <th>Layout</th>
                                    <th>Availability</th>
                                    <th>Contact Information</th>
                                    <th>Accessibility</th>
                                    <th>Cost</th>
                                    <th>Booking/Reservation Status</th>
                                    <th>Technical Specifications</th>
                                    <th>Rules and Regulations</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($venues as $venue)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $venue->venue_name }}</td>
                                        <td>{{ $venue->description }}</td>
                                        <td>{{ $venue->address }}</td>
                                        <td>{{ $venue->capacity }}</td>
                                        <td>{{ $venue->facilities }}</td>
                                        <td><img style="height: 100px; width: 100px;" src="{{asset('upload/venue/layout')}}/{{$venue->layout}}" alt="event"></td>
                                        <td>{{ $venue->availability }}</td>
                                        <td>{{ $venue->contact_information }}</td>
                                        <td>{{ $venue->accessibility }}</td>
                                        <td>{{ $venue->cost }}</td>
                                        <td>{{ $venue->booking }}</td>
                                        <td>{{ $venue->technical_specifications }}</td>
                                        <td>{{ $venue->rules_and_regulations }}</td>
                                        <td>
                                            <a href="{{ route('venue.show', $venue->id) }}"
                                                class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('venue.update', $venue->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('venue.destroy', $venue->id) }}" method="POST"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this venue?')">Delete</button>
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
