<!doctype html>
<html class="no-js ie9" lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
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
<div id="page" class="wrapper">@if(session('error'))
    <div class="alert alert-warning">{{ session('error') }}</div>
@endif

@if(session('verification'))
<style>
    .center-swal {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
            position: "center",
            icon: "success",
            title: "{{ session('verification') }}",
            showCancelButton: true,
            showConfirmButton: true,
            timer: 15000,
            customClass: {
                popup: 'center-swal'
            },
            confirmButtonText: 'Open Gmail',
            cancelButtonText: 'Cancel',
            confirmButtonHref: 'https://mail.google.com/', // Custom Gmail link
            cancelButtonHref: '/', // Custom cancel link
            allowOutsideClick: false, // Prevent closing on outside click
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'https://mail.google.com/'; // Handle Gmail button click
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                window.location.href = '/'; // Handle cancel button click
            }
        });
    });
</script>

@endif

@include('frontend.nav')


@yield('content')
@include('common.footer')
@include('common.script')



</div>
</body>
</html>
