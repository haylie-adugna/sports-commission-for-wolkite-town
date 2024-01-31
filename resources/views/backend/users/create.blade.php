@extends('layouts.app')
@section('content')
@if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
<div class="py-5">
<form class="row g-3 needs-validation" novalidate  method="" action="{{ route('users.create') }}">
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">First name</label>
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mark" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="validationCustom02" value="users" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">password</label>
        <input type="email" class="form-control" name="password" id="validationCustom02" value="Otto" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
    <div class="col-md-4">
      <label for="validationCustomUsername" class="form-label">Username</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input type="text" class="form-control" name="user_type" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationCustom03" class="form-label">City</label>
      <input type="text" class="form-control" id="validationCustom03" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom04" class="form-label">State</label>
      <select class="form-select" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option>
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>
    <div class="col-md-3">
        <label for="validationCustom04" class="form-label">Roles</label>
        <select class="form-select" id="validationCustom04" required>
          <option selected disabled value="user">Choose...</option>

          @if (Auth::user()->user_type === 'clubmanager')
          <option>couch</option>
          <option>player</option>
          @endif
          @if (Auth::user()->user_type === 'commissioner')
          <option>gameofficer</option>
          <option>projectmanager</option>
          @endif
          @if (Auth::user()->user_type === 'gameofficer')
          <option>clubmanager</option>
          <option>referee</option>
          @endif
        </select>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>
      </div>
    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">Zip</label>
      <input type="text" class="form-control" id="validationCustom05" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Agree to terms and conditions
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Register</button>
    </div>
    <div class="form-group row mb-3">
        <div class="col-md-6 offset-md-4 text-right">
            <button type="submit" class="btn btn-success btn-lg btn-hover-border">
                {{ __('Register') }}
            </button>
        </div>
    </div>
  </form>
</div>
@endsection
