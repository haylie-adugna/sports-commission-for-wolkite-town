@extends('welcome')

@section('content')

<body class="custom-background">

<h1>login to the system</h1>
<div class="container ">
    <h1 class="text-center font-weight-bold text-primary my-4">
        {{-- wolkite town sport --}}
      </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-info text-white">

                <div class="card-header">{{ __('Login by your email and password') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email address">

                              @error('email')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                          </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end font-weight-bold">{{ __('Password') }}</label>

                            <div class="col-md-6">
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">

                              @error('password')
                                <div class="invalid-feedback">
                                  <strong>{{ $message }}</strong>
                                </div>
                              @enderror
                            </div>
                          </div>


                            <div class="row mb-3">
                              <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                  <input class="form-check-input bg-black" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                  <label class="form-check-label text-light" for="remember">
                                    {{ __('Remember Me') }}
                                  </label>
                                </div>
                              </div>
                            </div>


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link btn-light btn-lg btn-hover-border" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                                <button type="submit" class="btn btn-success btn-lg btn-hover-border">
                                    {{ __('Login') }}
                                </button>


                            </div>
                            <div class="form-group row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <p class="mt-3">
                                        Don't have an account? <a href="{{ route('register') }}" class="btn btn-link btn-light">Register here</a>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
