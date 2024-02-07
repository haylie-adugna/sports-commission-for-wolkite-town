@extends('welcome')

@section('content')

        <body class="hold-transition skin-blue layout-top-nav">
            <div class="login-box">
      <div class="login-logo">
        <a href="/"><b>Wolkite</b>TSCMS</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf
          <div class="form-group has-feedback">
            <label for="email">Email Address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" required autocomplete="email" autofocus value="{{ old('email') }}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <label for="email">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
            @error('password')
                <div class="invalid-feedback">
                  <strong>{{ $message }}</strong>
                </div>
              @enderror
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>


          <div class="row">

            <div class="col-xs-4 pull-left">

                    <input class="form-check-input bg-black" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label text-light" for="remember">Remember me</label>

              </div>


            <!-- /.col -->
            <div class="col-xs-4 pull-right">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
              </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
            Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
            Google+</a>
        </div>
        <!-- /.social-auth-links -->


        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">I forgot my password</a><br>
            </a>

            @endif



        <a href="{{ route('register') }}" class="text-center">Register a new membership</a>

      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
</body>
</section>