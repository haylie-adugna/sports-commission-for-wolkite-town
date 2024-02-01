<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="{{ asset('assets/images/logo.png') }}" alt="wtsc" style="width: 60px; height: 60px;"> <!-- Adjust the width as needed -->

    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a style="color:white;padding-left:0%"  aria-current="page" href="/"><button type="button" class="btn btn-primary py-2 px-4 mr-3">Home</button></a>

            </li>
            <li class="nav-item">
                <a style="color:white;padding-left:0%"  aria-current="page" href="/"><button type="button" class="btn btn-primary py-2 px-4 mr-3">News</button></a>

            </li>
            <li class="nav-item dropdown">
                <div class="dropdown" style="display: inline-block;">
                    <a class="nav-link btn btn-primary py-2 px-4 mr-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sports
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Football</a></li>
                        <li><a class="dropdown-item" href="#">Volleyball</a></li>
                        <li><a class="dropdown-item" href="#">Basketball</a></li>
                        <li><a class="dropdown-item" href="#">Cricket</a></li>
                        <li><a class="dropdown-item" href="#">Other</a></li>
                    </ul>
                </div>

                <!-- Bootstrap 5 Hover Script -->
                <script>
                    // Initialize Bootstrap 5 Tooltip
                    var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
                    var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
                        return new bootstrap.Dropdown(dropdownToggleEl, { boundary: 'window' })
                    });

                    // Show dropdown on hover
                    $('.dropdown').hover(
                        function() {
                            $(this).find('.dropdown-menu').addClass('show');
                        },
                        function() {
                            $(this).find('.dropdown-menu').removeClass('show');
                        }
                    );
                </script>
            </li>


            <li class="nav-item">
                <a style="color:white;padding-left:0%"  aria-current="page" href="{{url('/about')}}"><button type="button" class="btn btn-primary py-2 px-4 mr-3">ABOUT</button></a>

            </li>
            <li class="nav-item">
                <a style="color:white;padding-left:0%"  aria-current="page" href="{{url('/contactus')}}><button type="button" class="btn btn-primary py-2 px-4 mr-3">contact us</button></a>


            </li>
            <li class="nav-item">
                <a style="color:white;padding-left:0%"  aria-current="page" href="{{url('/Schedule')}}><button type="button" class="btn btn-primary py-2 px-4 mr-3">Schedule</button></a>

            </li>
            <li class="nav-item">
                <a style="color:white;padding-left:0%"  aria-current="page" href="{{url('/Events')}}><button type="button" class="btn btn-primary py-2 px-4 mr-3">Events</button></a>

            </li>



        </ul>
        <ul class="navbar-nav">
        <li>
            <div class="container">
                <div class="col-4">
                    <br>
                    <div id="google_translate_element" style="overflow: hidden;">
                        <!-- Your content inside google_translate_element goes here -->
                    </div>
                </div>
            </div>
        </li>
    </ul>
        <ul class="navbar-nav">
            <i class='bx bx-sun' id="darkLight"></i>



                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                 </li>
        </ul>

    </div>
</nav>
