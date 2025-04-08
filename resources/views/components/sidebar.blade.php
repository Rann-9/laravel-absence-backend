<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/home') }}">Absence</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/home') }}">AB</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>

            {{-- Users --}}
            <li class="nav-item dropdown {{ Request::is('user*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('user*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('user.index') }}">All Users</a>
                    </li>
                </ul>
            </li>

            {{-- Company --}}
            <li class="nav-item dropdown {{ Request::is('company*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-building"></i><span>Company</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('company*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('company.show', 1) }}">Company Profile</a>
                    </li>
                </ul>
            </li>
        </ul>

    </aside>
</div>
