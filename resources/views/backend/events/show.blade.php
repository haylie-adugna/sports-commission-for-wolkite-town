@extends('layouts.app')  // Assuming you have a layout file

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Information') }}</div>

                <div class="card-body">
                    <div>
                        <strong>Tittle:</strong> {{ $events->Tittle }}
                    </div>
                    <div>
                        <strong>Type:</strong> {{ $events->Type }}
                    </div>
                    <div>
                        <strong>Body:</strong> {{ $events->Body }}
                    </div>
                    <div>
                        <strong>Photo:</strong> {{ $events->Photo }}
                    </div>
                    <div>
                        <strong>video:</strong> {{ $events->video }}
                    </div>


                    {{-- Add more fields and customize as needed --}}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('events.index') }}" class="btn btn-primary">Back to Matches</a>
        </div>
    </div>
</div>
@endsection
