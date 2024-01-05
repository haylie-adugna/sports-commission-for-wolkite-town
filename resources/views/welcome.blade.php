<!DOCTYPE html>
<html lang="en">
    @include('common.layout');
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wolkite town sport commission</title>
        <style>
    </style>
</head>
<body>
    @include('frontend.nav');

    <div>
    @yield('content');
</div>
<script>
    $(document).ready(function(){
        // Smooth scroll to the contact section when the button is clicked
        $("#scrollToContact").click(function() {
            $('html, body').animate({
                scrollTop: $("#contact").offset().down
            }, 1000); // Adjust the duration as needed
        });
    });
</script>
@include('common.footer');
</body>

</html>
