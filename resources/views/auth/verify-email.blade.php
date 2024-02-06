@extends('welcome')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verify email</title>

    <!-- Include your apple-touch-icon -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/logo.png') }}">

    <!-- Include Bootstrap CSS from public folder -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

</head>

<body class="hold-transition skin-blue layout-top-nav">

    <div class="row justify-content-center">

        <div class="register-box">

            <div class="register-logo">
                <a href="/"><b>Wolkite</b>TSCMS</a>
            </div>
            <!-- Content goes here -->

            <div class="box box-success box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Verify Email</h3>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div class="box-tools pull-right">
                            <button type="submit" class="btn btn-box-tool btn-danger" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </form>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <h3>Thanks for signing up! Before getting started,
                        could you verify your email address by clicking
                        on the link we just emailed to you? If you didn't receive the email, we will gladly send you
                        another.
                    </h3>

                    @if (session('status') == 'verification-link-sent')
                        <div class="mb-4 font-medium text-sm text-success">
                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                        </div>
                    @endif

                    <div class="mt-4">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf

                            <button type="submit" class="btn btn-primary">
                                {{ __('Resend Verification Email') }}
                            </button>
                        </form>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS from public folder -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Add other JS files or scripts if needed -->

</body>

</html>
