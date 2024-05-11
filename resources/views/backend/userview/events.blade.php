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
          <li class="active">Event tables</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
            @php
                // Define an array of colors
                $colors = ['bg-primary', 'bg-secondary', 'bg-success', 'bg-danger', 'bg-warning', 'bg-info'];
            @endphp
            @foreach ($events as $index => $event)
            <div class="col-md-4">
                <div class="card {{ $colors[$index % count($colors)] }}">
                    <div class="card-header">
                        <h3 class="card-title">Event ID: {{ $loop->iteration }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="bg-black text-center">
                            <p><strong>{{ $event->Type }}</strong> </p>
                        </div>

                        <p><strong >Title:</strong> {{ $event->Tittle }}</p>
                        <p><strong>Body:</strong> {!! $event->Body !!}</p>
                        <p><strong>Images:</strong> <img width="150" height="150" src="{{ asset('upload/event/image/' . $event->image) }}" alt="event"></p>
                        <p><strong>Video:</strong>
                            <a href="{{ asset('upload/event/video/' . $event->video) }}" target="_blank">
                                <video width="220" height="140" autoplay muted>
                                    <source src="{{ asset('upload/event/video/' . $event->video) }}" type="video/mp4">
                                </video>
                            </a>
                        </p>
                        <p><strong>Created By:</strong> {{ $event->Created_by }}</p>
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

@endsection

