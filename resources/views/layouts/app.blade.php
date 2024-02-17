<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>wolkite town sport commission</title>
  <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @include('common.style')
</head>
<body class="hold-transition skin-blue fixed sidebar-mini" >
<div class="wrapper">

  @include('layouts.navigation')
  @include('layouts.sidebar1')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="overflow:scroll;">
    <div class="content" >
        {{--Error Alert Area--}}
        @if($errors->any())
        <div class="box box-danger">
            <div class="alert alert-warning box-header with-border alert-dismissible" style="color: #f7f7f7;">
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>

            <div class="row">
                @foreach($errors->all() as $error)
                    <div class="col-md-4">
                        <span><i class="icon-arrow-right5"></i> {{ $error }}</span>
                    </div>
                @endforeach
            </div>
            </div>
        </div>
    @endif
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

        {{--end error check--}}

    @yield('content')
   </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('common.footer')

  @include('layouts.sidecontrol')
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
@include('common.script')
<!-- page script -->

</body>
</html>
