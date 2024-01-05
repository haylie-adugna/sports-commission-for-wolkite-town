 <!-- navbar -->
 <nav class="navbar">
    <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="assets/images/logo.png" alt="CodingNepal" style="width: 100px; height: 100px;"> <!-- Adjust the width as needed -->
        wolkite town sport commission
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

      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="assets/images/profile1.jpg" alt="hugenerd" width="30" height="30" class="rounded-circle">
          <span class="d-none d-sm-inline mx-1">{{ Auth::user()->name }}</span>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Football</a>
          <a class="dropdown-item" href="#">Volleyball</a>
          <a class="dropdown-item" href="#">Basketball</a>
          <a class="dropdown-item" href="#">Cricket</a>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>
      </div>

</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
  @csrf
</form>
  </nav>
