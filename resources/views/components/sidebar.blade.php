<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/home') }}">Absence</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/home') }}">AB</a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item dropdown {{ Request::is('dashboard-general-dashboard') || Request::is('company/*') || Request::is('user*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('user*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('user.index') }}">Users</a>
                    </li>
                    @php
                        $company = \App\Models\Company::first();
                    @endphp
                    <li class="{{ Request::is('company/*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ $company ? route('company.show', $company->id) : '#' }}">Company Profile</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
