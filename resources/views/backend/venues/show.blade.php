@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h2>Wolkite Sport venues Details</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="venue_name">venues Name:</label>
                            <p>{{ $venues->venue_name }}</p>
                        </div>

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <p>{{ $venues->description }}</p>
                        </div>

                        <div class="form-group">
                            <label for="address">Address:</label>
                            <p>{{ $venues->address }}</p>
                        </div>

                        <div class="form-group">
                            <label for="capacity">Capacity:</label>
                            <p>{{ $venues->capacity }}</p>
                        </div>

                        <div class="form-group">
                            <label for="facilities">Facilities:</label>
                            <p>{{ $venues->facilities }}</p>
                        </div>

                        <!-- Additional venues details can be added here -->

                        <div class="form-group">
                            <label for="layout">Layout:</label>
                            <p>{{ $venues->layout }}</p>
                        </div>

                        <div class="form-group">
                            <label for="availability">Availability:</label>
                            <p>{{ $venues->availability }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="contact_information">Contact Information:</label>
                            <p>{{ $venues->contact_information }}</p>
                        </div>

                        <div class="form-group">
                            <label for="accessibility">Accessibility:</label>
                            <p>{{ $venues->accessibility }}</p>
                        </div>

                        <div class="form-group">
                            <label for="cost">Cost:</label>
                            <p>{{ $venues->cost }}</p>
                        </div>

                        <div class="form-group">
                            <label for="booking">Booking:</label>
                            <p>{{ $venues->booking }}</p>
                        </div>

                        <!-- Additional contact and booking information can be added here -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <a href="{{ route('venue.index') }}" class="btn btn-primary">Back to venues List</a>
            </div>
        </div>
    </div>
@endsection
