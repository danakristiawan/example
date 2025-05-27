<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('home') }}" class="b-brand text-primary">
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
                    <a href="/home" class="pc-link">
                        <span class="pc-micon"
                            ><i class="ti ti-dashboard"></i
                        ></span>
                        <span class="pc-mtext">Home</span>
                    </a>
                </li>

                <li class="pc-item pc-caption">
                    <label>Menu</label>
                </li>
                @isset($landing) @foreach($permissions as $r)
                @foreach($r->menus()->get() as $s)

                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon"
                            ><i class="{{ $s->icon }}"></i
                        ></span>
                        <span class="pc-mtext">{{ $s->name }}</span>
                    </a>
                </li>

                @endforeach @endforeach @endisset

                <li class="pc-item pc-caption">
                    <label>Lainnya</label>
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
                                <li class="pc-item">
                                    <a
                                        class="pc-link"
                                        href="{{ route('menus.index') }}"
                                        >Menu</a
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
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
