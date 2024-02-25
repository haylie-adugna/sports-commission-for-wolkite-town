@extends('welcome') <!-- Adjust the layout as needed -->

@section('content')
<style>
    /* Fullscreen Carousel Styles */
    #carousel-example-generic {
        width: 100%;
        max-height: 100vh; /* Set maximum height to the viewport height */
        overflow: hidden; /* Hide overflow to prevent vertical scrollbar */
    }

    .carousel-inner {
        width: 100%;
        max-height: 100vh; /* Set maximum height to the viewport height */
    }

    .carousel-inner .item {
        height: 100vh; /* Set each item's height to the viewport height */
    }
</style>

<div class="col-md-12">
    <div class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Sport family</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{ asset('assets/images/background1.jpg') }}" alt="First slide">
                        <div class="carousel-caption">
                            First Slide
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/images/background2.jpg') }}" alt="Second slide">
                        <div class="carousel-caption">
                            Second Slide
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/images/background3.jpg') }}" alt="Third slide">
                        <div class="carousel-caption">
                            Third Slide
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="fa fa-angle-right"></span>
                </a>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>
<!-- /.col -->
@endsection
