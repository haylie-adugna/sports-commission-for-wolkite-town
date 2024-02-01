@extends('welcome')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <!-- Include your apple-touch-icon -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/logo.png') }}">

    <!-- Include Bootstrap CSS from public folder -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

    <!-- Add other CSS files or styles if needed -->
</head>
<body class="d-flex flex-column min-vh-100">

    <div class="container-fluid d-flex flex-column align-items-center justify-content-center min-vh-100">
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
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

        <form method="POST" action="{{ route('logout') }}" class="mt-3">
            @csrf

            <button type="submit" class="btn btn-link text-gray-600">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>

    <!-- Include Bootstrap JS from public folder -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Add other JS files or scripts if needed -->
</body>
</html>
