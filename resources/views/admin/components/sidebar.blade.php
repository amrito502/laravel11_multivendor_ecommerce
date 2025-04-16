<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark" style="background: #9718D3!important">
    <div class="sidebar-brand">
        <a href="" class="brand-link">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="brand-image opacity-75 shadow" />
            <span class="brand-text" style="color: #ffffff !important;">Admin Panel</span>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="./generate/theme.html" class="nav-link text-white">
                        <i class="nav-icon bi bi-palette"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Blog Management
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./widgets/small-box.html" class="nav-link text-white">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Add Blog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./widgets/info-box.html" class="nav-link text-white">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Blog List</p>
                            </a>
                        </li>

                    </ul>
                </li>



                <li class="nav-item">
                    <a href="#" class="nav-link text-white" style="display: flex;justify-content: flex-start;align-items: center;">
                        <i class="fa-solid fa-users nav-icon"></i>
                        <p>
                            User Management

                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Roles
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('roles.create') }}" class="nav-link text-white">
                                        <i class="nav-icon bi bi-circle"></i>

                                        <p>Add Role</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('roles.index') }}" class="nav-link text-white">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Roles List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Permissions
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('permissions.create') }}" class="nav-link text-white">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Add Permission</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('permissions.index') }}" class="nav-link text-white">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Permissions List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Users
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('users.create') }}" class="nav-link text-white">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Add User</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('users.index') }}" class="nav-link text-white">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Users List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
