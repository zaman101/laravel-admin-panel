<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ request()->segment(1) == 'dashboard' ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item {{ request()->segment(1) == 'crud' ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ request()->segment(1) == 'crud' ? 'active' : '' }}">
                <i class="nav-icon fas fa-notes-medical"></i>
                <p>
                    CRUD
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('crud.index') }}" class="nav-link {{ request()->segment(1) == 'crud' && request()->segment(2) == '' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Index</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('crud.create') }}" class="nav-link {{ request()->segment(2) == 'create' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
