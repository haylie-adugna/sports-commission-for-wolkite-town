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
                        <strong>Body:</strong> {!! $events->Body !!}
                    </div>
                    <div>
                        <strong>Photo:</strong> <img width="150" height="150" src="{{asset('upload/event/image')}}/{{$events->image}}" alt="event">
                    </div>
                    <div class="col-xs-3">
                        <label for="video">Videos</label>
                        <video width="1000" height="400" autoplay controls>
                            <source src="{{ asset('upload/event/video/' . $events->video) }}" type="video/mp4">
                        </video>
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
