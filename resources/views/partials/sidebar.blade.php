<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="../dashboard/index.html" class="b-brand text-primary">
                <img
                    src="{{ asset('assets/images/logo-20.svg') }}"
                    class="img-fluid logo-lg"
                    alt="logo"
                />
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item">
                    <a href="/" class="pc-link">
                        <span class="pc-micon"
                            ><i class="ti ti-dashboard"></i
                        ></span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="/home" class="pc-link">
                        <span class="pc-micon"
                            ><i class="ti ti-dashboard"></i
                        ></span>
                        <span class="pc-mtext">Home</span>
                    </a>
                </li>

                <li class="pc-item pc-caption">
                    <label>UI Components</label>
                    <i class="ti ti-dashboard"></i>
                </li>
                <li class="pc-item">
                    <a href="/chart" class="pc-link">
                        <span class="pc-micon"
                            ><i class="ti ti-color-swatch"></i
                        ></span>
                        <span class="pc-mtext">Chart</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="/card" class="pc-link">
                        <span class="pc-micon"
                            ><i class="ti ti-color-swatch"></i
                        ></span>
                        <span class="pc-mtext">Card</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="/flights" class="pc-link">
                        <span class="pc-micon"
                            ><i class="ti ti-color-swatch"></i
                        ></span>
                        <span class="pc-mtext">Flight</span>
                    </a>
                </li>

                <li class="pc-item pc-caption">
                    <label>Other</label>
                    <i class="ti ti-brand-chrome"></i>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link"
                        ><span class="pc-micon"><i class="ti ti-menu"></i></span
                        ><span class="pc-mtext">Administrator</span
                        ><span class="pc-arrow"
                            ><i data-feather="chevron-right"></i></span
                    ></a>
                    <ul class="pc-submenu">
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link"
                                >Role and Permission<span class="pc-arrow"
                                    ><i data-feather="chevron-right"></i></span
                            ></a>
                            <ul class="pc-submenu">
                                <li class="pc-item">
                                    <a
                                        class="pc-link"
                                        href="{{ route('roles.index') }}"
                                        >Roles</a
                                    >
                                </li>
                                <li class="pc-item">
                                    <a
                                        class="pc-link"
                                        href="{{ route('permissions.index') }}"
                                        >Permissions</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link"
                                >Setting<span class="pc-arrow"
                                    ><i data-feather="chevron-right"></i></span
                            ></a>
                            <ul class="pc-submenu">
                                <li class="pc-item">
                                    <a
                                        class="pc-link"
                                        href="{{ route('users.index') }}"
                                        >User</a
                                    >
                                </li>
                                <li class="pc-item">
                                    <a class="pc-link" href="#!">Menu</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="pc-item">
                    <a href="/login" class="pc-link">
                        <span class="pc-micon"
                            ><i class="ti ti-brand-chrome"></i
                        ></span>
                        <span class="pc-mtext">Login</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
