@extends('welcome')
@section('content')
<!DOCTYPE html>
<html>
<head>

</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="register-box">

<div class="register-logo">
    <a href="/"><b>Wolkite</b>TSCMS</a>
  </div>

    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Reset password</h3>

            <form method="POST" action="{{ route('logout') }}" >
              @csrf
              <div class="box-tools pull-right">
              <button type="submit" class="btn btn-box-tool btn-danger" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </form>
            <!-- /.box-tools -->
          </div>


        @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @if(session('connection_error'))
            <div class="alert alert-danger" role="alert">
                {{ session('connection_error') }}
            </div>
        @else
            <!-- Your regular content for the password reset form -->
            <form method="POST" action="{{ route('password.email') }}">
                @csrf


                    <div class="form-group has-feedback">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email">

                        @error('email')
                            <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="col-xs-4 pull-right">
                        <button type="submit" class="btn btn-block btn-success">Send</button>
                      </div>



            </form>
        @endif
    </div>
</div>


</div>
<!-- /.register-box -->


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
</html>




