@extends('welcome')
@section('content')
    <div class="box box-primary">


            <div class="login-box box-primary text-center">
                <div class="box-header">
                    <h3 class="box-title">Password Reset</h3>
                </div>
                <!-- /.login-logo -->
                <div class="login-box-body row mb-6">

                    <form method="POST" action="{{ route('password.store') }}">
                        @csrf
                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="row mb-6">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">Email</label>

                            <div class="col-md-6">
                                <input placeholder="enter your email" id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email":value="old('email', $request->email)" required autocomplete="email">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    @if($errors->has('email'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input placeholder="enter new password" id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input placeholder="confirm new password" id="password-confirm" type="password"
                                    class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection
