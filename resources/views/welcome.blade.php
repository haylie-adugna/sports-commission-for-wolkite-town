<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Wolkite town sport commission</title>

    <!-- Add your stylesheets and other head content here -->

    <style>
        /* Add your custom styles here */
    </style>

    @include('common.style')
</head>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
        @include('frontend.nav')

        @yield('content')

        @include('common.footer')
        @include('common.script')
    </div>
</body>

</html>
