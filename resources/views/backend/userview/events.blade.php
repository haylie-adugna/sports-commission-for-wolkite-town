@extends('layouts.app')
@section('content')

     <!-- Content Header (Page header) -->
     <section class="content-header">
        <h1>
          Events
          <small>wolkite town</small>
        </h1>
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

                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="bg-black text-center" style="height: 50px;">
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

                    <!-- Like, Share, Comment section -->
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                            </div>
                            <div class="col-sm-4">
                                <a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a>
                            </div>
                            <div class="col-sm-4">
                                <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (5)</a>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="row mt-2">
                            <div class="col-sm-12">
                                <input class="form-control input-sm" type="text" placeholder="Type a comment">
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            @endforeach
        </div>
        <!-- /.row -->
    </section>


@endsection

