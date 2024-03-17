<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          @if(Auth::user()->photo)
                <img src="{{ asset('upload/user/image') }}/{{ Auth::user()->photo }}" class="img-circle" alt="User Image">
            @else
                <img src="{{ asset('dist/img/avatar.png') }}" class="img-circle" alt="User Image">
            @endif
        </div>
        <div class="pull-left info">
          <p><b>{{ Auth::user()->first_name }} {{ Auth::user()->middle_name }}</b></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" id="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li id="google_translate_element"></li>
        <li class="active treeview">
          <a href="{{ route('dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
    @can('user_management_access')
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-users"></i>
            <span>Users</span>
            <span class="label label-primary pull-right bg-green">4</span>
          </a>
          <ul class="treeview-menu">
            @can('permission_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                            <i class="fa fa-fw fa-gear">

                            </i>
                            manage permission
                        </a>
                    </li>
                @endcan
                @can('role_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                            <i class="fa fa-fw fa-gear">

                            </i>
                            manage role
                        </a>
                    </li>
                @endcan
                @can('user_create')
            <li><a href="{{ route('admin.users.create') }}"><i class="fa fa-fw fa-user-plus"></i> Add new user</a></li>
            @endcan
            @can('user_access')
            <li><a href="{{ route("admin.users.index") }}"><i class="fa fa-fw fa-gear"></i> User managment</a></li>
            @endcan
            <li><a href="{{route('users.analaysis')}}"><i class="fa fa-fw fa-spinner"></i> User Analysis</a></li>
            @can('manage_staff_user')
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-fw fa-user-secret"></i> Staff user</a></li>
            @endcan
          </ul>
        </li>
    @endcan

        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-fw fa-futbol-o"></i> <span>Games</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          @can('manage_games')
          <ul class="treeview-menu">
            <li><a href="{{route('games.create')}}"><i class="fa fa-fw fa-life-bouy"></i> Add new games</a></li>
            <li><a href="{{route('games.index')}}"><i class="fa fa-fw fa-gear"></i> Manage games</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-fw fa-spinner"></i> Game Analysis</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-fw fa-info-circle"></i> About Games</a></li>
          </ul>
          @endcan
          @can('add_game_stastics')
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-fw fa-life-bouy"></i> Add game stastics</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-fw fa-gear"></i> Manage games stastics</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-fw fa-spinner"></i> See stastics</a></li>
          </ul>
          @endcan

        </li>
        <li>
            <a href="pages/widgets.html">
              <i class="fa fa-fw fa-futbol-o"></i> <span>Match</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            @can('create_matchs')
            <ul class="treeview-menu">
                <li><a href="{{route('matchs.create')}}"><i class="fa fa-fw fa-life-bouy"></i> Create Match</a></li>
                <li><a href="{{route('matchs.index')}}"><i class="fa fa-fw fa-life-bouy"></i> Manage Matchs</a></li>
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-fw fa-life-bouy"></i> Add game stastics</a></li>
                <li><a href="pages/charts/morris.html"><i class="fa fa-fw fa-gear"></i> Manage games stastics</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-fw fa-spinner"></i> See stastics</a></li>
            </ul>
            @endcan
          </li>
          <li>
            <a href="pages/widgets.html">
              <i class="fa fa-fw fa-futbol-o"></i> <span>Venue</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            @can('manage_venues')
            <ul class="treeview-menu">
                <li><a href="{{route('venue.create')}}"><i class="fa fa-fw fa-life-bouy"></i> Create venue</a></li>
                <li><a href="{{route('venue.index')}}"><i class="fa fa-fw fa-life-bouy"></i> Manage venues</a></li>
            </ul>
            @endcan
          </li>
          <li>
            <a href="pages/widgets.html">
              <i class="fa fa-fw fa-futbol-o"></i> <span>Clubs</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            @can('create_clubs')
            <ul class="treeview-menu">
                <li><a href="{{route('clubs.create')}}"><i class="fa fa-fw fa-life-bouy"></i> Create Clubs</a></li>
                <li><a href="{{route('clubs.index')}}"><i class="fa fa-fw fa-life-bouy"></i> Manage Clubs</a></li>
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-fw fa-life-bouy"></i> Clubs stastics</a></li>
            </ul>
            @endcan
            @can('manage_club')
            <ul class="treeview-menu">
                <li><a href="{{route('clubs.index')}}"><i class="fa fa-fw fa-life-bouy"></i> Manage Club</a></li>
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-fw fa-life-bouy"></i> Club stastics</a></li>
            </ul>
            @endcan
          </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-newspaper-o"></i>
            <span>Events</span>
            <small class="label pull-right bg-green">news</small>
          </a>
          @can('manage_events')
          <ul class="treeview-menu">
            <li><a href="{{route('events.create')}}"><i class="fa fa-fw fa-hacker-news"></i> Add Events</a></li>
            <li><a href="{{route('events.index')}}"><i class="fa fa-fw fa-gear"></i> Manage Events</a></li>
            <li><a href="{{route('events.index')}}"><i class="fa fa-fw fa-spinner"></i> Events Analaysis</a></li>
          </ul>
          @endcan
        </li>
        @can('manage_match_recored')
        <li class="treeview">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <span>Match recored</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('matchsrecored.create')}}"><i class="fa fa-fw fa-plus-circle"></i> assigned match</a></li>
              <li><a href="#{{--{{route('events.index')}}--}}"><i class="fa fa-fw fa-gear"></i> Manages</a></li>
              <li><a href="#{{--{{route('events.index')}}--}}"><i class="fa fa-fw fa-commenting"></i> comment</a></li>
            </ul>
          </li>
          @endcan
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Complain</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-fw fa-plus-circle"></i> Add Complain</a></li>
            @can('manage_complain')
            <li><a href="#{{--{{route('events.index')}}--}}"><i class="fa fa-fw fa-gear"></i> Manages complain</a></li>
            @endcan
            <li><a href="#{{--{{route('events.index')}}--}}"><i class="fa fa-fw fa-commenting"></i> comment</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>projects</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          @can('manage_project')
          <ul class="treeview-menu">
            <li><a href="{{route('project.create')}}"><i class="fa fa-fw fa-plus-square"></i> Add New project</a></li>
            <li><a href="{{route('project.index')}}"><i class="fa fa-fw fa-gear"></i> Manage project</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-fw fa-gears"></i> project Analaysis</a></li>
          </ul>
          @endcan
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Lineup</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            @can('lineup_football')
            <ul class="treeview-menu">
              <li><a href="{{route('football_lineup.create')}}"><i class="fa fa-fw fa-plus-square"></i> Football club lineup</a></li>
              <li><a href="{{route('football_lineup.index')}}"><i class="fa fa-fw fa-gear"></i> Manage lineup</a></li>
            </ul>
            @endcan
            @can('lineup_volleyball')
            <ul class="treeview-menu">
              <li><a href="{{route('volleyball_lineup.create')}}"><i class="fa fa-fw fa-plus-square"></i> Volleyball club lineup</a></li>
              <li><a href="{{route('volleyball_lineup.index')}}"><i class="fa fa-fw fa-gear"></i> Manage lineup</a></li>
            </ul>
            @endcan
            @can('lineup_basketball')
            <ul class="treeview-menu">
              <li><a href="{{route('basketball_lineup.create')}}"><i class="fa fa-fw fa-plus-square"></i> Basketball club lineup</a></li>
              <li><a href="{{route('basketball_lineup.index')}}"><i class="fa fa-fw fa-gear"></i> Manage lineup</a></li>
            </ul>
            @endcan
          </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <small class="label pull-right bg-red">3</small>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <small class="label pull-right bg-yellow">12</small>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="control-sidebar-bg"></div>
