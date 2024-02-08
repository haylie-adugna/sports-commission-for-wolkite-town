@extends('layouts.app')  // Assuming you have a layout file

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Information') }}</div>

                <div class="card-body">
                    <div>
                        <strong>Name:</strong> {{ $users->first_name }}
                    </div>
                    <div>
                        <strong>Email:</strong> {{ $users->email }}
                    </div>
                    <div>
                        <strong>Age:</strong> {{ $users->age }}
                    </div>
                    <div>
                        <strong>Gender:</strong> {{ $users->gender }}
                    </div>
                    <!-- Add more fields as needed -->

                    {{-- You can also check if a field is not null before displaying it --}}
                    @if ($users->address)
                        <div>
                            <strong>Address:</strong> {{ $users->address }}
                        </div>
                    @endif

                    {{-- Displaying an image if the 'photo' field is not null --}}
                    @if ($users->photo)
                        <div>
                            <strong>Photo:</strong>
                            <img src="{{ asset('path/to/photos/' . $users->photo) }}" alt="User Photo">
                        </div>
                    @endif

                    {{-- Displaying a link to the assigned game if available --}}
                    @if ($users->assigned_game)
                        <div>
                            <strong>Assigned Game:</strong>
                            <a href="#">{{ $users->assigned_game }}</a>
                        </div>
                    @endif

                    {{-- Add more fields and customize as needed --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
