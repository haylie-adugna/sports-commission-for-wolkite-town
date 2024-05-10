@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create New Role') }}
    </div>

    <div class="card">
        <form method="POST" action="{{ route("admin.roles.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('Role Name') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                @if($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label class="required" for="permissions">{{ trans('Assign permissions for Roles You want to Create') }}</label>
                <div style="padding-bottom: 4px">
                    <button type="button" class="btn btn-primary waves-effect waves-light m-b-10" id='select-all'>select all
                    </button>
                    <button type="button" class="btn btn-primary waves-effect waves-light m-b-10" id='deselect-all'>deselect all
                    </button>
                </div>
                <select class="form-control select2 {{ $errors->has('permissions') ? 'is-invalid' : '' }}" name="permissions[]"  id='public-methods' multiple='multiple' required>
                    @foreach($permissions as $id => $permission)
                        <option value="{{ $id }}" {{ in_array($id, old('permissions', [])) ? 'selected' : '' }}>{{ $permission }}</option>
                    @endforeach
                </select>
                @if($errors->has('permissions'))
                    <span class="text-danger">{{ $errors->first('permissions') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.role.fields.permissions_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('Save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
