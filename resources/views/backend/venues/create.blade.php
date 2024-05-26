@extends('layouts.app') <!-- Adjust the layout as needed -->

@section('content')
<section class="content w-full">
    <div class="container">
        <!-- right column -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Add Venue</h3>
            </div>
            <form action="{{ route('venue.register') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="venue_name">Venue Name:</label>
                                <input type="text" class="form-control" name="venue_name" id="venue_name"
                                    placeholder="Venue Name" value="{{ old('venue_name') }}">
                                @error('venue_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea class="form-control" name="description" id="description"
                                    placeholder="Description">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="Address" value="{{ old('address') }}">
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="capacity">Capacity:</label>
                                <input type="number" class="form-control" name="capacity" id="capacity"
                                    placeholder="Capacity" value="{{ old('capacity') }}">
                                @error('capacity')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="facilities">Facilities:</label>
                                <button type="button" class="btn btn-primary waves-effect waves-light m-b-10" id='select-all'>select all
                                </button>
                                <button type="button" class="btn btn-primary waves-effect waves-light m-b-10" id='deselect-all'>deselect all
                                </button>
                                <select class="form-control" name="facilities[]" id='public-methods' multiple>
                                    <option value="VIP lounges" {{ in_array('VIP lounges', old('facilities', [])) ? 'selected' : '' }}>VIP Lounges</option>
                                    <option value="press room" {{ in_array('press room', old('facilities', [])) ? 'selected' : '' }}>Press Room</option>
                                    <option value="medical facility" {{ in_array('medical facility', old('facilities', [])) ? 'selected' : '' }}>Medical Facility</option>
                                    <option value="training room" {{ in_array('training room', old('facilities', [])) ? 'selected' : '' }}>Training Room</option>
                                    <option value="locker room" {{ in_array('locker room', old('facilities', [])) ? 'selected' : '' }}>Locker Room</option>
                                    <option value="restaurant" {{ in_array('restaurant', old('facilities', [])) ? 'selected' : '' }}>Restaurant</option>
                                    <option value="parking space" {{ in_array('parking space', old('facilities', [])) ? 'selected' : '' }}>Parking Space</option>
                                    <option value="wifi access" {{ in_array('wifi access', old('facilities', [])) ? 'selected' : '' }}>WiFi Access</option>
                                </select>
                                @error('facilities')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="layout">Layout:</label>
                            <div class="form-group">
                                <input type="file" accept="image/*" class="form-control" name="layout" >
                                @error('layout')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="availability">Availability:</label>
                                <select class="form-control" name="availability" id="availability">
                                    <option value="">Select Availability</option>
                                    <option value="available" {{ old('availability') == 'available' ? 'selected' : '' }}>Available</option>
                                    <option value="unavailable" {{ old('availability') == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
                                </select>
                                @error('availability')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="contact_information">Contact Information:</label>
                                <input type="text" class="form-control" name="contact_information" id="contact_information"
                                    placeholder="Contact Information" value="{{ old('contact_information') }}">
                                @error('contact_information')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="accessibility">Accessibility:</label>
                                <select class="form-control" name="accessibility[]" id='custom-headers' multiple='multiple'>
                                    <option value="Wilcher Accessibility setting" {{ in_array('Wilcher Accessibility setting', old('accessibility', [])) ? 'selected' : '' }}>Wilcher Accessibility setting</option>
                                    <option value="elevators" {{ in_array('elevators', old('accessibility', [])) ? 'selected' : '' }}>Elevators</option>
                                    <option value="ramps" {{ in_array('ramps', old('accessibility', [])) ? 'selected' : '' }}>Ramps</option>
                                    <option value="Accessibility restroom" {{ in_array('Accessibility restroom', old('accessibility', [])) ? 'selected' : '' }}>Accessibility Restroom</option>
                                    <option value="audio assistant system" {{ in_array('audio assistant system', old('accessibility', [])) ? 'selected' : '' }}>Audio Assistant System</option>
                                    <!-- Add more options as needed -->
                                </select>
                                @error('accessibility')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="cost">Cost:</label>
                                <input type="number" class="form-control" name="cost" id="cost"
                                    placeholder="Cost" value="{{ old('cost') }}">
                                @error('cost')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="booking">Booking/Reservation Status:</label>
                                <select class="form-control" name="booking" id="booking">
                                    <option value="">Select Booking/Reservation Status</option>
                                    <option value="booked" {{ old('booking') == 'booked' ? 'selected' : '' }}>Booked</option>
                                    <option value="reserved" {{ old('booking') == 'reserved' ? 'selected' : '' }}>Reserved</option>
                                    <option value="available" {{ old('booking') == 'available' ? 'selected' : '' }}>Available</option>
                                </select>
                                @error('booking')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="technical_specifications">Technical Specifications:</label>
                                <input type="text" class="form-control" name="technical_specifications" id="technical_specifications"
                                    placeholder="Technical Specifications" value="{{ old('technical_specifications') }}">
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
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ old('rules_and_regulations') }}</textarea>
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
</section>
@endsection
