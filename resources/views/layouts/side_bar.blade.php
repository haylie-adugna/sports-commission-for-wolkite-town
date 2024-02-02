<!-- sidebar -->
<nav class="sidebar">
    <div class="menu_content">
      <ul class="menu_items">
        <div class="menu_title menu_dahsboard"></div>
        <!-- duplicate or remove this li tag if you want to add or remove navlink with submenu -->
        <!-- start -->
        <li class="item">
            <div href="#" class="nav_link submenu_item">
              <span class="navlink_icon">
                <i class="bx bx-home-alt"></i>
              </span>
              <a href="{{ route('dashboard') }}" class="nav_link sublink">Dashboard</a>

            </div>
          </li>
          @if (Auth::user()->user_type === 'commissioner' || Auth::user()->user_type === 'gameofficer' || Auth::user()->user_type === 'clubmanager' || Auth::user()->user_type === 'projectmanager')
          <li class="item">
            <div href="#" class="nav_link submenu_item">
              <span class="navlink_icon">
                <i class="bx bx-user"></i> <!-- Change the icon for Users here -->
              </span>
              <span class="navlink">Users</span>
              <i class="bx bx-chevron-right arrow-left"></i>
            </div>

            <ul class="menu_items submenu">
              <a href="{{route('users.create')}}" class="nav_link sublink">
                <span class="navlink_icon">
                  <i class="bx bx-user-plus"></i> <!-- Icon for Add New User -->
                </span>
                Add New User
              </a>
              <a href="{{route('users.index')}}" class="nav_link sublink">
                <span class="navlink_icon">
                  <i class="bx bx-cog"></i> <!-- Icon for Manage Users -->
                </span>
                Manage Users
              </a>
            </ul>
          </li>

      @endif
      @if (Auth::user()->user_type === 'commissioner' || Auth::user()->user_type === 'gameofficer')
      <li class="item">
          <div href="#" class="nav_link submenu_item">
              <span class="navlink_icon">
                  <i class="bx bx-chat"></i> <!-- Icon for Announcement -->
              </span>
              <span class="navlink">Announcements</span>
              <i class="bx bx-chevron-right arrow-left"></i>
          </div>

          <ul class="menu_items submenu">
              <a href="{{route('sportproject.edit')}}" class="nav_link sublink">
                  <span class="navlink_icon">
                      <i class="bx bx-plus"></i> <!-- Icon for Add New Announcement -->
                  </span>
                  Add New Announcement
              </a>
              <a href="#" class="nav_link sublink">
                  <span class="navlink_icon">
                      <i class="bx bx-cog"></i> <!-- Icon for Manage Announcement -->
                  </span>
                  Manage Announcement
              </a>
          </ul>
      </li>
  @endif

   <li class="item">
      <div href="#" class="nav_link submenu_item">
          <span class="navlink_icon">
              <i class="bx bx-message-square"></i> <!-- Icon for Complain -->
          </span>
          <span class="navlink">Complain</span>
          <i class="bx bx-chevron-right arrow-left"></i>
      </div>
      <ul class="menu_items submenu">
          <a href="#" class="nav_link sublink">
              <span class="navlink_icon">
                  <i class="bx bx-plus"></i> <!-- Icon for Add New Complain -->
              </span>
              Add New Complain
          </a>
          @if (Auth::user()->user_type === 'commissioner' || Auth::user()->user_type === 'gameofficer' || Auth::user()->user_type === 'clubmanager' || Auth::user()->user_type === 'projectmanager'|| Auth::user()->user_type === 'couch')
          <a href="#" class="nav_link sublink">
              <span class="navlink_icon">
                  <i class="bx bx-cog"></i> <!-- Icon for Manage Complains -->
              </span>
              Manage Complains
          </a>
          @endif
      </ul>
  </li>






      @if (Auth::user()->user_type === 'commissioner')
      <li class="item">
        <div href="#" class="nav_link submenu_item">
          <span class="navlink_icon">
            <i class="bx bx-task"></i> <!-- Change the icon for project here -->
          </span>
          <span class="navlink">project</span>
          <i class="bx bx-chevron-right arrow-left"></i>
        </div>

        <ul class="menu_items submenu">
          <a href="#" class="nav_link sublink">
            <span class="navlink_icon">
              <i class="bx bx-plus"></i> <!-- Icon for Add New project -->
            </span>
            Add New project
          </a>
          <a href="#" class="nav_link sublink">
            <span class="navlink_icon">
              <i class="bx bx-cog"></i> <!-- Icon for Manage project -->
            </span>
            Manage project
          </a>
        </ul>
      </li>

      @endif

    <li class="item">
        <div href="#" class="nav_link submenu_item">
            <span class="navlink_icon">
                <i class="bx bx-news"></i> <!-- Icon for News -->
            </span>
            <span class="navlink">News</span>
            <i class="bx bx-chevron-right arrow-left"></i>
        </div>

        <ul class="menu_items submenu">
            <a href="#" class="nav_link sublink">
                <span class="navlink_icon">
                    <i class="bx bx-plus"></i> <!-- Icon for Add New News -->
                </span>
                Today News
            </a>
            @if (Auth::user()->user_type === 'commissioner' || Auth::user()->user_type === 'gameofficer')
            <a href="#" class="nav_link sublink">
                <span class="navlink_icon">
                    <i class="bx bx-plus"></i> <!-- Icon for Add New News -->
                </span>
                Add New News
            </a>
            <a href="#" class="nav_link sublink">
                <span class="navlink_icon">
                    <i class="bx bx-cog"></i> <!-- Icon for Manage News -->
                </span>
                Manage News
            </a>
            @endif
        </ul>
    </li>


        <!-- duplicate this li tag if you want to add or remove  navlink with submenu -->
        <!-- start -->
        <li class="item">
          <div href="#" class="nav_link submenu_item">
            <span class="navlink_icon">
              <i class="bx bx-grid-alt"></i>
            </span>
            <span class="navlink">Overview</span>
            <i class="bx bx-chevron-right arrow-left"></i>
          </div>

          <ul class="menu_items submenu">
            <a href="#" class="nav_link sublink">Nav Sub Link</a>
            <a href="#" class="nav_link sublink">Nav Sub Link</a>
            <a href="#" class="nav_link sublink">Nav Sub Link</a>
            <a href="#" class="nav_link sublink">Nav Sub Link</a>
          </ul>
        </li>
        <!-- end -->
      </ul>

      <ul class="menu_items">
        <div class="menu_title menu_editor"></div>
        <!-- duplicate these li tag if you want to add or remove navlink only -->
        <!-- Start -->
        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bxs-magic-wand"></i>
            </span>
            <span class="navlink">Magic build</span>
          </a>
        </li>
        <!-- End -->

        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-loader-circle"></i>
            </span>
            <span class="navlink">Filters</span>
          </a>
        </li>
        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-filter"></i>
            </span>
            <span class="navlink">Filter</span>
          </a>
        </li>
        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-cloud-upload"></i>
            </span>
            <span class="navlink">Upload new</span>
          </a>
        </li>
      </ul>
      <ul class="menu_items">
        <div class="menu_title menu_setting"></div>
        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-flag"></i>
            </span>
            <span class="navlink">Notice board</span>
          </a>
        </li>
        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-medal"></i>
            </span>
            <span class="navlink">Award</span>
          </a>
        </li>
        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-cog"></i>
            </span>
            <span class="navlink">Setting</span>
          </a>
        </li>
        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-layer"></i>
            </span>
            <span class="navlink">Features</span>
          </a>
        </li>
      </ul>

      <!-- Sidebar Open / Close -->
      <div class="bottom_content">
        <div class="bottom expand_sidebar">
          <span> Expand</span>
          <i class='bx bx-log-in' ></i>
        </div>
        <div class="bottom collapse_sidebar">
          <span> Collapse</span>
          <i class='bx bx-log-out'></i>
        </div>
      </div>
    </div>
  </nav>
