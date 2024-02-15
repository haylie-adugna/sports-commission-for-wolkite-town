<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('assets/images/logo.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->first_name }} {{ Auth::user()->middle_name }}</p>
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
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="{{ route('dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        @if (Auth::user()->user_type === 'commissioner' || Auth::user()->user_type === 'gameofficer' || Auth::user()->user_type === 'clubmanager' || Auth::user()->user_type === 'projectmanager')
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-users"></i>
            <span>Users</span>
            <span class="label label-primary pull-right bg-green">4</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('users.create')}}"><i class="fa fa-fw fa-user-plus"></i> Add new user</a></li>
            <li><a href="{{route('users.index')}}"><i class="fa fa-fw fa-gear"></i> User managment</a></li>
            <li><a href="{{route('users.analaysis')}}"><i class="fa fa-fw fa-spinner"></i> User Analysis</a></li>
            @if (Auth::user()->user_type === 'commissioner')
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-fw fa-user-secret"></i> Staff user</a></li>
            @endif
          </ul>
        </li>
        @endif

        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-fw fa-futbol-o"></i> <span>Games</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          @if (Auth::user()->user_type === 'commissioner')
          <ul class="treeview-menu">
            <li><a href="{{route('games.create')}}"><i class="fa fa-fw fa-life-bouy"></i> Add new games</a></li>
            <li><a href="{{route('games.index')}}"><i class="fa fa-fw fa-gear"></i> Manage games</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-fw fa-spinner"></i> Game Analysis</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-fw fa-info-circle"></i> About Games</a></li>
          </ul>
          @endif
          @if (Auth::user()->user_type === 'gameofficer')
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-fw fa-life-bouy"></i> Add game stastics</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-fw fa-gear"></i> Manage games stastics</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-fw fa-spinner"></i> See stastics</a></li>
          </ul>
          @endif

        </li>
        <li>
            <a href="pages/widgets.html">
              <i class="fa fa-fw fa-futbol-o"></i> <span>Match</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            @if (Auth::user()->user_type === 'gameofficer' || Auth::user()->user_type === 'commissioner')
            <ul class="treeview-menu">
                <li><a href="{{route('matchs.create')}}"><i class="fa fa-fw fa-life-bouy"></i> Create Match</a></li>
                <li><a href="{{route('matchs.index')}}"><i class="fa fa-fw fa-life-bouy"></i> Manage Matchs</a></li>
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-fw fa-life-bouy"></i> Add game stastics</a></li>
                <li><a href="pages/charts/morris.html"><i class="fa fa-fw fa-gear"></i> Manage games stastics</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-fw fa-spinner"></i> See stastics</a></li>
            </ul>
            @endif
            @if (Auth::user()->user_type === 'gameofficer')
            <ul class="treeview-menu">
                <li><a href="{{route('matchs.create')}}"><i class="fa fa-fw fa-life-bouy"></i> Create Match</a></li>
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-fw fa-life-bouy"></i> Manage Matchs</a></li>
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-fw fa-life-bouy"></i> Add game stastics</a></li>
                <li><a href="pages/charts/morris.html"><i class="fa fa-fw fa-gear"></i> Manage games stastics</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-fw fa-spinner"></i> See stastics</a></li>
            </ul>
            @endif

          </li>
          <li>
            <a href="pages/widgets.html">
              <i class="fa fa-fw fa-futbol-o"></i> <span>Clubs</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            @if (Auth::user()->user_type === 'gameofficer' || Auth::user()->user_type === 'commissioner')
            <ul class="treeview-menu">
                <li><a href="{{route('clubs.create')}}"><i class="fa fa-fw fa-life-bouy"></i> Create Clubs</a></li>
                <li><a href="{{route('clubs.index')}}"><i class="fa fa-fw fa-life-bouy"></i> Manage Clubs</a></li>
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-fw fa-life-bouy"></i> Clubs stastics</a></li>
            </ul>
            @endif
          </li>

        <li class="treeview">
          <a href="pages/widgets.html">
            <i class="fa fa-fw fa-newspaper-o"></i>
            <span>Events</span>
            <small class="label pull-right bg-green">news</small>
          </a>
          @if (Auth::user()->user_type === 'commissioner' || Auth::user()->user_type === 'gameofficer')
          <ul class="treeview-menu">
            <li><a href="{{route('events.create')}}"><i class="fa fa-fw fa-hacker-news"></i> Add Events</a></li>
            <li><a href="{{route('events.index')}}"><i class="fa fa-fw fa-gear"></i> Manage Events</a></li>
            <li><a href="{{route('events.index')}}"><i class="fa fa-fw fa-spinner"></i> Events Analaysis</a></li>
          </ul>
          @endif
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <span>Match recored</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('matchsrecored.create')}}"><i class="fa fa-fw fa-plus-circle"></i> assigned match</a></li>
              @if (Auth::user()->user_type === 'commissioner' || Auth::user()->user_type === 'gameofficer')
              <li><a href="#{{--{{route('events.index')}}--}}"><i class="fa fa-fw fa-gear"></i> Manages</a></li>
              @endif
              <li><a href="#{{--{{route('events.index')}}--}}"><i class="fa fa-fw fa-commenting"></i> comment</a></li>
            </ul>
          </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Complain</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-fw fa-plus-circle"></i> Add Complain</a></li>
            @if (Auth::user()->user_type === 'commissioner' || Auth::user()->user_type === 'gameofficer')
            <li><a href="#{{--{{route('events.index')}}--}}"><i class="fa fa-fw fa-gear"></i> Manages complain</a></li>
            @endif
            <li><a href="#{{--{{route('events.index')}}--}}"><i class="fa fa-fw fa-commenting"></i> comment</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>projects</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          @if (Auth::user()->user_type === 'commissioner' || Auth::user()->user_type === 'gameofficer' || Auth::user()->user_type === 'clubmanager')
          <ul class="treeview-menu">
            <li><a href="{{route('project.create')}}"><i class="fa fa-fw fa-plus-square"></i> Add New project</a></li>
            <li><a href="{{route('project.index')}}"><i class="fa fa-fw fa-gear"></i> Manage project</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-fw fa-gears"></i> project Analaysis</a></li>
          </ul>
          @endif
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
