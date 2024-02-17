@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">
        Create New permission
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.permissions.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="title">Name</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                @if($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="form-group">
                <a class="bg-danger" href="{{ route("admin.permissions.index") }}" >Cancel</a>
                <button class="btn btn-success" type="submit">Create</button>
            </div>
        </form>
    </div>
</div>



@endsection
