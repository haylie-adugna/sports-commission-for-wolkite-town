@extends('layouts.app')
@section('content')
    <section class="content w-full">
        <div class="container">
            <!-- right column -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Assign Player to Club</h3>
                </div>
                <form action="{{ route('players.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="coach_name_id">Select Player:</label>
                                    <select class="form-control" name="user_id" id="coach_name_id">
                                        @forelse($players as $player)
                                            <option value="{{ $player->id }}">{{ $player->first_name }} {{ $player->last_name }}</option>
                                        @empty
                                            <option value="" disabled>No available player</option>
                                        @endforelse
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="club_manager_id">Select Club:</label>
                                    <select class="form-control" name="club_id" id="club_manager_id" required>
                                        @forelse($clubs as $id => $clubName)
                                            <option value="{{ $id }}">{{ $clubName }}</option>
                                        @empty
                                            <option value="" disabled>No club managers available</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="{{ route('players.index') }}" class="btn btn-warning">Cancel</a>
                        <button type="submit" class="btn btn-info pull-right">Assign</button>
                    </div>
                </form>

        </div>
        </div>
    </section>
@endsection
