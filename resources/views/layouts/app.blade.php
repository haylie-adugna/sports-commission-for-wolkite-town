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
  <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
</head>
<body class="hold-transition skin-blue fixed sidebar-mini" >
<div class="wrapper">
    <amp-ad width="100vw" height="320"
    type="adsense"
    data-ad-client="ca-pub-7499642912383120"
    data-ad-slot="9856550625"
    data-auto-format="rspv"
    data-full-width="">
 <div overflow=""></div>
</amp-ad>
  @include('layouts.navigation')
  @include('layouts.sidebar1')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

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
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                position: "center",
                icon: "success",
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 1500
            });
        });
    </script>
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
<div id="styleSelector">
</div>
<!--Start of Tawk.to Script-->

<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/66c2152f0cca4f8a7a7755ba/1i5j25h8b';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', 'anonymous');
        s0.parentNode.insertBefore(s1, s0);
    })();

    // Custom CSS for black theme
    Tawk_API = Tawk_API || {};
    Tawk_API.onLoad = function() {
        Tawk_API.customStyle = {
            backgroundColor: "#000000", // Black background color
            buttonColor: "#ffffff",     // White button color
            textColor: "#ffffff",       // White text color
            fontSize: "16px",           // Font size
            borderRadius: "10px",       // Rounded corners
            borderColor: "#ffffff"      // Optional: White border around widget (if needed)
        };
    };
</script>

    <!--End of Tawk.to Script-->
</body>
</html>
