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
                                    <h3 class="box-title">Collapsible Accordion</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="box-group" id="accordion">
                                        <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                        <div class="panel box box-primary">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                        Collapsible Group Item #1
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="box-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3
                                                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                                                    truck quinoa nesciunt laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                    single-origin coffee nulla
                                                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                                    labore wes anderson cred
                                                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                    Leggings occaecat craft beer
                                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                                    heard of them accusamus
                                                    labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel box box-danger">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                        Collapsible Group Danger
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <div class="box-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3
                                                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                                                    truck quinoa nesciunt laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                    single-origin coffee nulla
                                                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                                    labore wes anderson cred
                                                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                    Leggings occaecat craft beer
                                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                                    heard of them accusamus
                                                    labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel box box-success">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapseThree">
                                                        Collapsible Group Success
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="box-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3
                                                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                                                    truck quinoa nesciunt laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                    single-origin coffee nulla
                                                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                                    labore wes anderson cred
                                                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                    Leggings occaecat craft beer
                                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                                    heard of them accusamus
                                                    labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
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
                                    <h3 class="box-title">Carousel</h3>
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
                                                <img src="{{ asset('assets/images/logo.png') }}" alt="First slide">

                                                <div class="carousel-caption">
                                                    First Slide
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="http://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap"
                                                    alt="Second slide">

                                                <div class="carousel-caption">
                                                    Second Slide
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap"
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







                    <!-- Main content -->
                    <section class="content">
                        <div class="callout callout-info">
                            <h4>Tip!</h4>

                            <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be
                                used with a
                                sidebar! So use this class if you want to remove the custom dropdown menus from the navbar
                                and use regular
                                links instead.</p>
                        </div>
                        <div class="callout callout-danger">
                            <h4>Warning!</h4>

                            <p>The construction of this layout differs from the normal one. In other words, the HTML markup
                                of the navbar
                                and the content will slightly differ than that of the normal layout.</p>
                        </div>
                        <div class="box box-default">
                            <div class="box-header with-border">
                                <h3 class="box-title">Blank Box</h3>
                            </div>
                            <div class="box-body">
                                The great content goes here
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
