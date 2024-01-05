<link rel="stylesheet" href="assets/custom/home.css">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


<script src="{{ asset('assets/js/jquery-3.3.1.slim.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}">
    < script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" >
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
                pageLanguage: 'en'
            },
            'google_translate_element'
        );
    }
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
<style>
    .custom-background{
        background-image: url('assets/images/logo.png');
        height: 100%;
        width: 100%;
    }
    body {
        top: 0px !important;
        position: static !important;
    }

    .VIpgJd-ZVi9od-ORHb-OEVmcd {
        display: none !important;
    }

    .VIpgJd-yAWNEb-hvhgNd {
        display: none;
    }

    .VIpgJd-yAWNEb-hvhgNd-l4eHX-i3jM8c {
        display: none !important;
    }

    #google_translate_element {
        color: transparent;
    }

    #google_translate_element a {
        display: none;
    }

    #google_translate_element select {
        background-color: #f6edfd;
        color: #383ffa;
        border: none;
        border-radius: 3px;
        padding: 6px 8px
    }

    .goog-te-combo {
        width: 100%;
        height: 40px;
        border-radius: 5px;
    }

    .goog-te-gadget {
        color: #040f1c00;
    }
</style>
