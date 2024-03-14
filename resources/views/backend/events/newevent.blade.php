{{-- @php
    dd($events); // Check if the variable is passed to the view
@endphp
@foreach($events as $event)
    <div>
        <h2>{{ $event->Title }}</h2>
        <p>Type: {{ $event->Type }}</p>
        <p>{{ $event->Body }}</p>
        @if($event->photo)
            <img src="{{ asset('path/to/your/photos/' . $event->photo) }}" alt="Event Photo">
        @endif
        @if($event->video)
            <video width="320" height="240" controls>
                <source src="{{ asset('path/to/your/videos/' . $event->video) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        @endif
        <p>Created by: {{ $event->Created_by }}</p>
        <p>Created at: {{ $event->created_at }}</p>
    </div>
@endforeach --}}
