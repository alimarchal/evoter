<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
            <a href="{{route('dashboard')}}" class="nav-link {{ request()->routeIs('dashboard')?'active':''}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>

        <li class="nav-item {{ request()->routeIs('voterList.create')?'menu-open':''}}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-vote-yea"></i>
                <p>
                    E-Voter
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('voterList.create')}}" class="nav-link {{ request()->routeIs('voterList.create')?'active':''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Register Voter</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('voterList.index')}}" class="nav-link {{ request()->routeIs('voterList.index')?'active':''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View & Search Voter</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item {{ request()->routeIs('voterList.reportAreaWise')?'menu-open':''}}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-pager"></i>
                <p>
                    Reports
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('voterList.reportAreaWise')}}" class="nav-link {{ request()->routeIs('voterList.reportAreaWise')?'active':''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Area Wise Report</p>
                    </a>
                </li>
            </ul>
        </li>


        <li class="nav-item {{ request()->routeIs('electionDashboard.create')?'menu-open':''}}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-vote-yea"></i>
                <p>
                    Election Dashboard
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('electionDashboard.create')}}" class="nav-link {{ request()->routeIs('voterList.create')?'active':''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Create Record</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('electionDashboard.index')}}" class="nav-link {{ request()->routeIs('voterList.index')?'active':''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View & Search</p>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</nav>
