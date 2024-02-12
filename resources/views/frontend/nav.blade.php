<header class="main-header">
    <nav class="navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../../index2.html" class="navbar-brand"><b>Wolkite</b>TSCMS</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="#">About Us</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sports <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Football</a></li>
                <li><a href="#">Vollyball</a></li>
                <li><a href="#">BasketBall</a></li>
                <li class="divider"></li>
                <li><a href="#">Cultural Game</a></li>
                <li class="divider"></li>
                <li><a href="#">Ethiopian league</a></li>
              </ul>
            </li>
          </ul>

          <form action="#" method="get" class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
                  <span class="form-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li id="google_translate_element"></li>
            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- Inner Menu: contains the notifications -->
                  <ul class="menu">
                    <li><!-- start notification -->
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <!-- end notification -->
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>

            <li><a href="{{ route('login') }}" class="btn btn-block btn-success btn-lg">Log In</a></li>
            <li><a  href="{{ route('register') }}"class="btn btn-block btn-success btn-lg">Register</a></li>


          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>

