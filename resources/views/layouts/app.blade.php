<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @include('common.style')
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">

  @include('layouts.navigation')
  @include('layouts.sidebar1')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content">
    @yield('content');
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
