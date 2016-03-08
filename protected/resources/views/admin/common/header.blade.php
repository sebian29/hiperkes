<header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>M</b>TF</span>
        <!-- logo for regular state and mobile devices -->
        <!-- <span class="logo-lg"><b>Admin</b>LTE</span> -->
        <span class="logo-lg"><img src="{{ asset('assets/admin/img/logo-credit.png') }}" width="90%" /></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('assets/admin/img/user2-160x160.jpg') }}" class="user-image" alt="User Image" />
                    <span class="hidden-xs">{{ (empty(Auth::user()->FullName)) ? '' : Auth::user()->FullName }}</span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <img src="{{ asset('assets/admin/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
                        <p style="font-size:12px;margin-top:2px">
                            {{-- {{ (empty(Auth::user()->Nip)) ? '' : Auth::user()->Nip .' - '. Auth::user()->FullName }}<br /> --}}
                            {{-- {{ (empty(Auth::user()->jobPosition()->Description)) ? '' : Auth::user()->jobPosition()->Description }} --}}
                            <small>{{ (empty(Auth::user()->StartJobDate)) ? '' : 'Work since '.date('F dS, Y', strtotime(Auth::user()->StartJobDate)) }} </small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            {{-- <a href="{{ url('/profile', Auth::user()->id) }}" class="btn btn-default btn-flat">Profile</a> --}}
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('/auth/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    </nav>
</header>
