<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('assets/admin/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                {{-- <p>{{ (strlen(\Auth::user()->FullName) > 23) ? substr(\Auth::user()->FullName, 0, 23) . '...' : \Auth::user()->FullName }}</p> --}}
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        {{-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form> --}}
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview {{ Request::is('/') ? 'active' : '' }}">
                <a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>
            @if(!empty(Auth::user()->ParentId))
            <li class="treeview {{ Request::is('scoring/*') || Request::is('scoring') ? 'active' : '' }}">
                <a href="{{ url('/scoring') }}"><i class="fa fa-edit"></i> <span>Submit Score</span></a>
            </li>
            @endif
            <li class="treeview {{ Request::is('approval/*') || Request::is('approval') ? 'active' : '' }}">
                <a href="{{ url('/approval') }}"><i class="fa fa-edit"></i> <span>Pending Approval</span></a>
            </li>
            <li class="treeview {{ Request::is('scoring-result/*') || Request::is('scoring-result') ? 'active' : '' }}">
                <a href="{{ url('/scoring-result') }}"><i class="fa fa-check"></i> <span>Complete Scoring</span></a>
            </li>
            <li class="treeview {{ Request::is('master/*') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-desktop"></i> <span>Master</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ Request::is('master/*') ? 'menu-open' : '' }}">
                    {{-- @if(Auth::user()->LevelLogin > 1) --}}
                    <li class="{{ Request::is('master/area') ? 'active' : '' }}"><a href="{{ url('/master/area') }}"><i class="fa fa-globe"></i> Area</a></li>
                    <li class="{{ Request::is('master/branch') ? 'active' : '' }}"><a href="{{ url('/master/branch') }}"><i class="fa fa-building"></i> Branch</a></li>
                    <li class="{{ Request::is('master/employee') ? 'active' : '' }}"><a href="{{ url('/master/employee') }}"><i class="fa fa-users"></i> Employee</a></li>
                    <li class="{{ Request::is('master/status') ? 'active' : '' }}"><a href="{{ url('/master/status') }}"><i class="fa fa-legal"></i> Employee Status</a></li>
                    <li class="{{ Request::is('master/organization') ? 'active' : '' }}"><a href="{{ url('/master/organization') }}"><i class="fa fa-sitemap"></i> Organization Unit</a></li>
                    <li class="{{ Request::is('master/position') ? 'active' : '' }}"><a href="{{ url('/master/position') }}"><i class="fa fa-street-view"></i> Position</a></li>
                    <li class="{{ Request::is('master/position-level') ? 'active' : '' }}"><a href="{{ url('/master/position-level') }}"><i class="fa fa-cogs"></i> Position Level</a></li>
                    {{-- @else
                    <li class="{{ Request::is('master/employee') ? 'active' : '' }}"><a href="{{ url('/master/employee') }}"><i class="fa fa-users"></i> Employee</a></li>
                    @endif --}}
                </ul>
            </li>
        </ul>
    </section><!-- /.sidebar -->
</aside>
