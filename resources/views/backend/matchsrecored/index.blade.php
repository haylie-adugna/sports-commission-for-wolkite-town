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
      <li class="active">Machs tables</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Machs Recored Data managment </h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table id="cbtn-selectors" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>match_id</th>
                        <th>club</th>
                        <th>player</th>
                        <th>activity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($leagues as $matchs)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $matchs->match_id }}</td>
                        <td>{{ $matchs->club_id }}</td>
                        <td>{{ $matchs->player_id }}</td>
                        <td>{{ $matchs->action }}</td>

                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                                    <i class="fas fa-bars"></i>
                                </button>

                                <div class="dropdown-menu pull-right" role="menu">

                                    {{-- View Profile --}}
                                    <a href="{{ route('matchs.show', $matchs->id) }}" class="dropdown-item">
                                        <i class="fa fa-fw fa-eye"></i> View Information
                                    </a><br><br>

                                    {{-- Edit --}}
                                    <a href="{{ route('matchs.update', $matchs->id) }}" class="dropdown-item">
                                        <i class="fa fa-fw fa-edit"></i> Edit Information
                                    </a><br><br>

                                    <i class="divider"></i>

                                    {{-- Delete --}}
                                    <a id="" href="{{route('matchs.destroy',$matchs->id)}}" class="dropdown-item"><i class="fa fa-fw fa-edit"></i> Delete User</a>
                                    <form method="HEAD" id="" action="" class="hidden">@csrf @method('delete')</form>

                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @push('scripts')
            <script>
                // Confirm delete on clicking delete link
                $('.delete-match').on('click', function (e) {
                    e.preventDefault();
                    var matchId = $(this).attr('id').replace('deleteMatch', '');
                    var confirmDelete = confirm('Are you sure you want to delete this match?');
                    if (confirmDelete) {
                        $('#deleteForm' + matchId).submit();
                    }
                });
            </script>
            @endpush

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
@endsection
