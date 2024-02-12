
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
                        width: 80px; /* Adjust the size as needed */
                        height: 80px; /* Adjust the size as needed */
                        object-fit: cover; /* To maintain aspect ratio */
                        border: 2px solid #fff; /* Optional: Add a border */
                    }

                    .widget-body .widget-vs .team-1 h3,
                    .widget-body .widget-vs .team-2 h3 {
                        margin-top: 10px; /* Adjust spacing as needed */
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
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Image" class="img-circle elevation-2">
                            <h3>Fasil Kenema</h3>
                        </div>
                        <div class="vs">
                            <span><span>VS</span></span>
                        </div>
                        <div class="team-2">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Image" class="img-circle elevation-2">
                            <h3>Haylie KENEMa</h3>
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

            <div class="col-lg-6">
                <h4><b>Wolkite town <i>League Table</i></b></h4>

              <div class="widget-next-match">
                <table class="table custom-table">
                  <thead>
                    <tr>
                      <th>P</th>
                      <th>Team</th>
                      <th>W</th>
                      <th>D</th>
                      <th>L</th>
                      <th>PTS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><strong class="text-white">Team1</strong></td>
                      <td>22</td>
                      <td>3</td>
                      <td>2</td>
                      <td>140</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><strong class="text-white">Team2</strong></td>
                      <td>22</td>
                      <td>3</td>
                      <td>2</td>
                      <td>140</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><strong class="text-white">Team3</strong></td>
                      <td>22</td>
                      <td>3</td>
                      <td>2</td>
                      <td>140</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td><strong class="text-white">Team4</strong></td>
                      <td>22</td>
                      <td>3</td>
                      <td>2</td>
                      <td>140</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td><strong class="text-white">Team5</strong></td>
                      <td>22</td>
                      <td>3</td>
                      <td>2</td>
                      <td>140</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td><strong class="text-white"> Team6</strong></td>
                      <td>22</td>
                      <td>3</td>
                      <td>2</td>
                      <td>140</td>
                    </tr>


                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>
</section>
