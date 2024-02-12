@extends('welcome')
@section('content')

            <!-- Full Width Column -->
            <div class="content-wrapper">
                <div class="container.pt-0.pl-1.pb-0.pr-1">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1>
                            Welcome
                            <small>Wokite Town sport commition</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                            {{-- <li><a href="#">Layout</a></li>
                  <li class="active">Top Navigation</li> --}}
                        </ol>
                    </section>
                    <!-- START ACCORDION & CAROUSEL-->
                    <h2 class="page-header">wolkite town sport commission</h2>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="box box-solid">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Today's Sports News in Ethiopia</h3>
                                </div>

                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="box-group" id="accordion">
                                        <!-- Example News 1 -->
                                        <div class="panel box box-primary">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                        Today Sport news in wolite town
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="box-body">
                                                    This is the content of News 1.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Example News 2 -->
                                        <div class="panel box box-danger">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                        Today Sport news in wolite Ethiopia
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <div class="box-body">
                                                    This is the content of News 2.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Example News 3 -->
                                        <div class="panel box box-success">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                        Todays world Sport news
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="box-body">
                                                    This is the content of News 3.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Add more news items as needed -->
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>

                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="box box-solid">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Sport family</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
                                            </li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1" class="">
                                            </li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2" class="">
                                            </li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <img src="{{ asset('assets/images/background1.jpg') }}" alt="First slide">

                                                <div class="carousel-caption">
                                                    First Slide
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="{{ asset('assets/images/background2.jpg') }}"
                                                    alt="Second slide">

                                                <div class="carousel-caption">
                                                    Second Slide
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="{{ asset('assets/images/background3.jpg') }}"
                                                    alt="Third slide">

                                                <div class="carousel-caption">
                                                    Third Slide
                                                </div>
                                            </div>
                                        </div>
                                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                            <span class="fa fa-angle-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic"
                                            data-slide="next">
                                            <span class="fa fa-angle-right"></span>
                                        </a>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <!-- END ACCORDION & CAROUSEL-->


                    @include('frontend.news')




                    <!-- Main content -->
                    <section class="content">
                        <div class="callout callout-info">
                            <h4>Welcome to the Sports Commission!</h4>

                            <p>Explore the exciting world of sports with our comprehensive services and resources. Whether you are an athlete,
                                coach, or sports enthusiast, we have something for everyone.</p>
                        </div>
                        <div class="callout callout-danger">
                            <h4>Important Notice!</h4>

                            <p>Stay informed about the latest updates and changes in our services. The construction of this website layout
                                may differ from the usual, ensuring a unique and dynamic user experience.</p>
                        </div>
                        <div class="box box-default">
                            <div class="box-header with-border">
                                <h3 class="box-title">Featured Events</h3>
                            </div>
                            <div class="box-body">
                                Discover upcoming sports events and championships that you don't want to miss!
                            </div>
                            <!-- /.box-body -->
                        </div>
                        @include('common.contact')
                        <!-- /.box -->
                    </section>
                    <!-- /.content -->
                    </div>
                    <!-- /.container -->

            </div>

            <!-- /.content-wrapper -->
@endsection
