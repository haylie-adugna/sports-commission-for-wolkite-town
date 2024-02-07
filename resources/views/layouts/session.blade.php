@if (Auth::check())
    <script>
        var timeout = ({{ config('session.lifetime') }} * 6000) - 6000;
        setTimeout(function () {
            if (confirm("Press OK to extend your session or Cancel to log out.")) {
                window.location.reload(1);
            } else {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: "{{ route('logout') }}",
                    data: {},
                    success: function () {
                        window.location.replace('/');
                    }
                });
            }
        }, timeout);
    </script>
@endif

