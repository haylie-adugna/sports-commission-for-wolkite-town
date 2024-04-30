<section class="content bg-white">
    <!-- Small boxes (Stat box) -->

    <div>
    </div>
    <!-- /.row -->
</section>

<section>
    <div class="site-section bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="widget-next-match">
                        <div class="widget-title">
                            <h3>Next Match</h3>
                        </div>
                        <style>
                            .widget-body .widget-vs .team-1 img,
                            .widget-body .widget-vs .team-2 img {
                                border-radius: 50%;
                                width: 80px;
                                /* Adjust the size as needed */
                                height: 80px;
                                /* Adjust the size as needed */
                                object-fit: cover;
                                /* To maintain aspect ratio */
                                border: 2px solid #fff;
                                /* Optional: Add a border */
                            }

                            .widget-body .widget-vs .team-1 h3,
                            .widget-body .widget-vs .team-2 h3 {
                                margin-top: 10px;
                                /* Adjust spacing as needed */
                            }

                            .widget-body .widget-vs {
                                display: flex;
                                align-items: center;
                                justify-content: space-around;
                            }

                            .widget-body .widget-vs .team-1,
                            .widget-body .widget-vs .team-2 {
                                flex: 1;
                                text-align: center;
                            }

                            .widget-body .widget-vs .vs {
                                display: flex;
                                align-items: center;
                                justify-content: center;
                            }
                        </style>

                        <div class="widget-body mb-3">
                            <div class="widget-vs">
                                <div class="team-1">
                                    @foreach (DB::table('matchs')->select('matchs.id', 'matchs.Team1', 'clubs.club_name')->leftJoin('clubs', 'matchs.Team1', '=', 'clubs.id')->groupBy('matchs.Team1', 'matchs.id', 'clubs.club_name')->get() as $match)
                                        <img src="{{ asset('assets/images/logo.png') }}" alt="Image"
                                            class="img-circle elevation-2">
                                        <h3 value="{{ $match->id }}">{{ $match->club_name }}</h3>
                                        @endforeach
                                </div>
                                <div class="vs"> <span><span>VS</span></span> </div>
                                <div class="team-2">
                                    @foreach (DB::table('matchs')->select('matchs.id', 'matchs.Team2', 'clubs.club_name')->leftJoin('clubs', 'matchs.Team2', '=', 'clubs.id')->groupBy('matchs.Team2', 'matchs.id', 'clubs.club_name')->get() as $match)
                                        <img src="{{ asset('assets/images/logo.png') }}" alt="Image"
                                            class="img-circle elevation-2">
                                        <h3 value="{{ $match->id }}">{{ $match->club_name }}</h3>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="text-center widget-vs-contents mb-4">
                            <h4>Wolkite town League</h4>
                            <p class="mb-5">
                                <span class="d-block">March 16th, 2023</span>
                                <span class="d-block">2:30 AM GMT+0</span>
                                <strong class="text-primary">Wolkite town sport commission</strong>
                            </p>

                            <div id="date-countdown2" class="pb-1"></div>
                        </div>

                    </div>
                </div>

                
            </div>
        </div>
    </div>
</section>
