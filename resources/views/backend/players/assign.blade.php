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
                                        @forelse(\App\Models\Role::where('title', 'player')->first()->users ?? [] as $coach)
                                            <option value="{{ $coach->id }}">{{ $coach->first_name }}</option>
                                        @empty
                                            <option value="" disabled>No available coach</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="club_manager_id">Select Club:</label>
                                    <select class="form-control" name="club_id" id="club_manager_id" required>
                                        @forelse(\App\Models\Clubs::all() as $clubManager)
                                            <option value="{{ $clubManager->id }}">{{ $clubManager->club_name }}</option>
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
