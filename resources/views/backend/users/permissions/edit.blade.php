@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">Edit permission</div>
    <div class="card-body">
        <form method="POST" action="{{ route("admin.permissions.update", [$permission->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">Permission Name</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $permission->title) }}" required>
                @if($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="form-group">
                <a class="bg-danger" href="{{ route("admin.permissions.index") }}" >Cancel</a>
                <button class="btn btn-danger" type="submit">update</button>
            </div>
        </form>
    </div>
</div>



@endsection
