<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="{{ asset('assets/images/logo.png') }}" alt="wtsc" style="width: 60px; height: 60px;"> <!-- Adjust the width as needed -->
        wolkite town sport commission
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="/" class="nav-link nav-active">Home</a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">today news</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">contact us</a>
            </li>
            <li class="nav-item">
                <a href="/Schedule" class="nav-link">Schedule</a>
            </li>
            <li class="nav-item">
                <a href="/events" class="nav-link">Events</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sports
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Football</a>
                    <a class="dropdown-item" href="#">Volleyball</a>
                    <a class="dropdown-item" href="#">Basketball</a>
                    <a class="dropdown-item" href="#">Cricket</a>
                    <a class="dropdown-item" href="#">other</a>
                </div>
            </li>
        </ul>

        <ul class="navbar-nav">
            <i class='bx bx-sun' id="darkLight"></i>
            <li>
                <div class="col-4">languge
                    <br>
                    <div id="google_translate_element">
                    </div>
                </div>
            </li>

                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                 </li>
        </ul>
    </div>
</nav>
