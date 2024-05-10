@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('Assign roles') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.roles.update", [$role->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.role.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $role->title) }}" required>
                @if($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
            </div>





            <div class="form-group">
            <h4 class="sub-title">Public Methods</h4>
            <button type="button" class="btn btn-primary waves-effect waves-light m-b-10" id='select-all'>select all
            </button>
            <button type="button" class="btn btn-primary waves-effect waves-light m-b-10" id='deselect-all'>deselect all
            </button>

            <select id='public-methods' multiple='multiple'
                class="form-control select2 {{ $errors->has('permissions') ? 'is-invalid' : '' }}" name="permissions[]"
                id="permissions" required>
                @foreach ($permissions as $id => $permission)
                    <option value="{{ $id }}"
                        {{ in_array($id, old('permissions', [])) || $role->permissions->contains($id) ? 'selected' : '' }}>
                        {{ $permission }}</option>
                @endforeach
            </select>
            @if($errors->has('permissions'))
            <span class="text-danger">{{ $errors->first('permissions') }}</span>
        @endif
        <span class="help-block">{{ trans('cruds.role.fields.permissions_helper') }}</span>
            </div>

            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('Update') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
