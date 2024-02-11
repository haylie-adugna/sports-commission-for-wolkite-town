<section class="content bg-white">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        @foreach(DB::table('users')
            ->select('user_type', DB::raw('count(*) as count'))
            ->groupBy('user_type')
            ->get() as $userType)
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{ $userType->count }}</h3>
                    <p>{{ $userType->user_type}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        @endforeach
        <!-- ./col -->
    </div>
    <!-- /.row -->
</section>
