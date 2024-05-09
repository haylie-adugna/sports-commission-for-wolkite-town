@extends('welcome') <!-- Adjust the layout as needed -->

@section('content')
<section class="content bg-white">
    <!-- Small boxes (Stat box) -->

    <div>
        culturalgames
    </div>
    <!-- /.row -->
</section>

<section class="content bg-green">
    <div class="site-section bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4><b>Wolkite town Fottball <i>League Table</i></b></h4>

                    <div class="widget-next-match">
                        <table id="left-right-fix" class="table stripe row-border order-column">
                            <thead>
                                <tr>
                                    <th>Club Name</th>
                                    <th>Total played</th>
                                    <th>Won</th>
                                    <th>Draw</th>
                                    <th>Lost</th>
                                    <th>Total Goal</th>
                                    <th>Total Goal Against</th>
                                    <th>Goal Difference</th>
                                    <th>Total Point</th>
                                    <th>point Difference</th>
                                    <th>rank</th>
                                </tr>
                            <tbody>
                                @foreach ($leagues as $league)
                                    <tr>
                                        <td>{{ $league->clubs->club_name }}</td> <!-- corrected line -->
                                        <td>{{ $league->total_played }}</td>
                                        <td>{{ $league->total_win }}</td>
                                        <td>{{ $league->total_draw }}</td>
                                        <td>{{ $league->total_lost }}</td>
                                        <td>{{ $league->total_goal }}</td>
                                        <td>{{ $league->total_goal_against }}</td>
                                        <td>{{ $league->goal_difference }}</td>
                                        <td>{{ $league->total_point }}</td>
                                        <td>{{ $league->point_difference }}</td>
                                        <td>{{ $league->rank }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
