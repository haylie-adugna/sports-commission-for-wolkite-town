<header class="main-header">
    <nav class="navbar navbar-fixed-top" >
      <div class="container" style="width: 97%;">
        <div class="navbar-header">
          <a href="/" class="navbar-brand"><b>Wolkite</b>TSC</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="{{ route('aboutas') }}">About Us</a></li>
            <li><a href="{{ route('contact-us') }}">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sports <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Football</a></li>
                <li><a href="#">Vollyball</a></li>
                <li><a href="#">BasketBall</a></li>
                <li class="divider"></li>
                <li><a href="#">Cultural Games</a></li>
                <li class="divider"></li>
                <li><a href="#">Ethiopian league</a></li>
              </ul>
            </li>
            <li id="google_translate_element"></li>
          </ul>

          <form action="" method="get" class="navbar-form navbar-left" id="search-form">
            <div class="form-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                </span>
            </div>
        </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li><a href="{{ route('login') }}" class="btn btn-block  btn-lg">Log In</a></li>
            <li><a  href="{{ route('register') }}"class="btn btn-block  btn-lg">Register</a></li>


          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>

