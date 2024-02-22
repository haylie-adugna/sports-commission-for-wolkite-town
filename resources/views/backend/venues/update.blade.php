@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h2 class="box-title">Update Club Information</h2>
                </div>
                <form method="POST" action="{{ route('venue.edit', ['id' => $venues->id]) }}">
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="venue_name">Venue Name:</label>
                                    <input type="text" class="form-control" name="venue_name" id="venue_name"
                                        placeholder="Venue Name" value="{{ $venues->venue_name }}">
                                    @error('venue_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea class="form-control" name="description" id="description"
                                        placeholder="Description" value="{{ $venues->description }}">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" name="address" id="address"
                                        placeholder="Address" value="{{ $venues->address }}">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="capacity">Capacity:</label>
                                    <input type="number" class="form-control" name="capacity" id="capacity"
                                        placeholder="Capacity" value="{{ $venues->capacity }}">
                                    @error('capacity')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="facilities">Facilities:</label>
                                    <input type="text" class="form-control" name="facilities" id="facilities"
                                        placeholder="Facilities" value="{{ $venues->facilities }}">
                                    @error('facilities')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="layout">Layout:</label>
                                <div class="form-group">
                                    <input type="file" accept="image/*" class="form-control" name="layout" value="{{ $venues->layout }}">
                                    @error('layout')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="availability">Availability:</label>
                                    <input type="text" class="form-control" name="availability" id="availability"
                                        placeholder="Availability" value="{{ $venues->availability }}">
                                    @error('availability')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="contact_information">Contact Information:</label>
                                    <input type="text" class="form-control" name="contact_information" id="contact_information"
                                        placeholder="Contact Information" value="{{ $venues->contact_information }}">
                                    @error('contact_information')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="accessibility">Accessibility:</label>
                                    <input type="text" class="form-control" name="accessibility" id="accessibility"
                                        placeholder="Accessibility" value="{{ $venues->accessibility }}">
                                    @error('accessibility')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cost">Cost:</label>
                                    <input type="number" class="form-control" name="cost" id="cost"
                                        placeholder="Cost" value="{{ $venues->cost }}">
                                    @error('cost')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="booking">Booking/Reservation Status:</label>
                                    <input type="text" class="form-control" name="booking" id="booking"
                                        placeholder="Booking/Reservation Status" value="{{ $venues->booking }}">
                                    @error('booking')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="technical_specifications">Technical Specifications:</label>
                                    <input type="text" class="form-control" name="technical_specifications" id="technical_specifications"
                                        placeholder="Technical Specifications" value="{{ $venues->technical_specifications }}">
                                    @error('technical_specifications')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h3>
                                            <label for="rules_and_regulations">Rules and Regulations:</label>
                                        </h3>
                                    </div>
                                    <div class="box-body pad">
                                        <textarea class="textarea" name="rules_and_regulations" placeholder="Place some text here"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" value="{{ $venues->rules_and_regulations }}">{{ old('rules_and_regulations') }}</textarea>
                                        @error('rules_and_regulations')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="{{ route('venue.index') }}" class="btn btn-warning">Cancel</a>
                        <button type="submit" class="btn btn-info pull-right">Add Venue</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
