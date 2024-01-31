<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wolkite town sport commission</title>
    <style>
        body {
            padding-left: 60%;
            padding-top: 30%;
        }
    </style>


      @include('common.layout')
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

      <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>
<body class="g-sidenav-show bg-gray-100 pl-5 pt-5">




<div class="container-fluid">
    <div class="row">
        @include('layouts.nav')
        <div class="col-md-3">
            @include('layouts.side_bar')
        </div>

        <!-- Main content -->
        <div class="col-md-9">
            <div class="wrapper-content ml-25 mt-5" style="width: calc(100% - 250px);">
                hello world
                @yield('content')
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/script.js') }}"></script>


</body>

</html>
