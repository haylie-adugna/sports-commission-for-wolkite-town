 <!-- navbar -->
 <nav class="navbar fixed-top">
    <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="{{ asset('assets/images/logo.png') }}" alt="wtsc" style="width: 60px; height: 60px;"> <!-- Adjust the width as needed -->
        WTSC - {{ Auth::user()->user_type }}
    </div>



    <div class="search_bar">
      <input type="text" placeholder="Search" />
    </div>

    <div class="navbar_content">
        <div class="col-2">
            <br>

        </div>
        <div class="col-4">
            <br>
            <div id="google_translate_element">
            </div>
        </div>
      <i class='bx bx-sun' id="darkLight"></i>
      <i class='bx bx-bell' ></i>


      <div class="dropdown" style="display: inline-block;">
        <div class="d-flex align-items-center">
            <img src="{{ asset('assets/images/profile1.jpg') }}" alt="" width="30" height="30" class="rounded-circle">
            <span class="d-none d-sm-inline mx-1">{{ Auth::user()->name }}</span>
        </div>


        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Edit profile</a></li>
            <li><a class="dropdown-item" href="#">View profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">About</a></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
        </ul>
    </div>

    <!-- Bootstrap JS, make sure it's loaded after jQuery -->
    <script src="path/to/jquery.min.js"></script>
    <script src="path/to/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap 5 Hover Script -->
    <script>
        // Show dropdown on hover
        $('.dropdown').hover(
            function () {
                $(this).find('.dropdown-menu').addClass('show');
            },
            function () {
                $(this).find('.dropdown-menu').removeClass('show');
            }
        );
    </script>


</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
  @csrf
</form>
  </nav>
