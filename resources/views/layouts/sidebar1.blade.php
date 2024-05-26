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
            <li><a href="{{ route("admin.users.index") }}"><i class="fa fa-fw fa-gear"></i> User managment</a></li>
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
            <li><a href="{{route('users.analaysis')}}"><i class="fa fa-fw fa-spinner"></i> User Analysis</a></li>
            @can('manage_staff_user')
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-fw fa-user-secret"></i> Staff user</a></li>
            @endcan
          </ul>
        </li>
    @endcan

        <li>
          <a href="{{route('view.games')}}">
            <i class="fa fa-fw fa-futbol-o"></i> <span>Games</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          @can('manage_games')
          <ul class="treeview-menu">
            <li><a href="{{route('games.index')}}"><i class="fa fa-fw fa-gear"></i> Manage games</a></li>
            <li><a href="{{route('view.games')}}"><i class="fa fa-fw fa-eye"></i> Games</a></li>
            <li><a href="#"><i class="fa fa-fw fa-spinner"></i> Game Analysis</a></li>
            <li><a href="#"><i class="fa fa-fw fa-info-circle"></i> About Games</a></li>
          </ul>
          @endcan
          @can('add_game_stastics')
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-fw fa-life-bouy"></i> Add game stastics</a></li>
            <li><a href="#"><i class="fa fa-fw fa-gear"></i> Manage games stastics</a></li>
            <li><a href="{{route('view.games')}}"><i class="fa fa-fw fa-eye"></i> See stastics</a></li>
          </ul>
          @endcan

        </li>
        <li>
            <a href="{{route('view.matchs')}}">
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
            <a href="{{route('view.venue')}}">
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
            <a href="{{route('view.clubs')}}">
              <i class="fa fa-fw fa-futbol-o"></i> <span>Clubs</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            @can('manage_club')
            <ul class="treeview-menu">
                <li><a href="{{route('clubs.index')}}"><i class="fa fa-fw fa-life-bouy"></i> Manage Club</a></li>
                <li><a href="{{route('players.index')}}"><i class="fa fa-fw fa-futbol-o"></i> Player Managment</a></li>
                <li><a href="{{route('coachs.index')}}"><i class="fa fa-fw fa-futbol-o"></i> coachs Managment</a></li>
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-fw fa-life-bouy"></i> Club stastics</a></li>
            </ul>
            @endcan
          </li>


        <li class="treeview">
          <a href="{{route('view.events')}}">
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
              <li><a href="{{route('matchsrecored.index')}}"><i class="fa fa-fw fa-gear"></i> Manages</a></li>
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
            <li><a href="#"><i class="fa fa-fw fa-plus-circle"></i> Add Complain</a></li>
            @can('manage_complain')
            <li><a href="#{{--{{route('events.index')}}--}}"><i class="fa fa-fw fa-gear"></i> Manages complain</a></li>
            @endcan
            <li><a href="#{{--{{route('events.index')}}--}}"><i class="fa fa-fw fa-commenting"></i> comment</a></li>
          </ul>
        </li>
        @can('manage_league')
        <li class="treeview">
            <a href="{{route('leagues.index')}}">Manage League</a>
          </li>
          @endcan
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Manage project</span>
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

        <li><a href="#"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Contact us</span></a></li>

      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="control-sidebar-bg"></div>
