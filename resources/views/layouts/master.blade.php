<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home | Mantis Bootstrap 5 Admin Template</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"
        />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link
            rel="icon"
            href="{{ asset('assets/images/favicon.svg') }}"
            type="image/x-icon"
        />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap"
            id="main-font-link"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/fonts/tabler-icons.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/style.css') }}"
            id="main-style-link"
        />
    </head>

    <body data-pc-theme="light">
        <nav class="pc-sidebar">
            <div class="navbar-wrapper">
                <div class="m-header">
                    <a
                        href="../dashboard/index.html"
                        class="b-brand text-primary"
                    >
                        <!-- ========   Change your logo from here   ============ -->
                        <img
                            src="{{ asset('assets/images/logo-19.svg') }}"
                            class="img-fluid logo-lg"
                            alt="logo"
                        />
                    </a>
                </div>
                <div class="navbar-content">
                    <ul class="pc-navbar">
                        <li class="pc-item">
                            <a href="../dashboard/index.html" class="pc-link">
                                <span class="pc-micon"
                                    ><i class="ti ti-dashboard"></i
                                ></span>
                                <span class="pc-mtext">Dashboard</span>
                            </a>
                        </li>

                        <li class="pc-item pc-caption">
                            <label>UI Components</label>
                            <i class="ti ti-dashboard"></i>
                        </li>
                        <li class="pc-item">
                            <a
                                href="../elements/bc_typography.html"
                                class="pc-link"
                            >
                                <span class="pc-micon"
                                    ><i class="ti ti-typography"></i
                                ></span>
                                <span class="pc-mtext">Typography</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="../elements/bc_color.html" class="pc-link">
                                <span class="pc-micon"
                                    ><i class="ti ti-color-swatch"></i
                                ></span>
                                <span class="pc-mtext">Color</span>
                            </a>
                        </li>

                        <li class="pc-item pc-caption">
                            <label>Other</label>
                            <i class="ti ti-brand-chrome"></i>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link"
                                ><span class="pc-micon"
                                    ><i class="ti ti-menu"></i></span
                                ><span class="pc-mtext">Menu levels</span
                                ><span class="pc-arrow"
                                    ><i data-feather="chevron-right"></i></span
                            ></a>
                            <ul class="pc-submenu">
                                <li class="pc-item">
                                    <a class="pc-link" href="#!">Level 2.1</a>
                                </li>
                                <li class="pc-item pc-hasmenu">
                                    <a href="#!" class="pc-link"
                                        >Level 2.2<span class="pc-arrow"
                                            ><i
                                                data-feather="chevron-right"
                                            ></i></span
                                    ></a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item">
                                            <a class="pc-link" href="#!"
                                                >Level 3.1</a
                                            >
                                        </li>
                                        <li class="pc-item">
                                            <a class="pc-link" href="#!"
                                                >Level 3.2</a
                                            >
                                        </li>
                                        <li class="pc-item pc-hasmenu">
                                            <a href="#!" class="pc-link"
                                                >Level 3.3<span class="pc-arrow"
                                                    ><i
                                                        data-feather="chevron-right"
                                                    ></i></span
                                            ></a>
                                            <ul class="pc-submenu">
                                                <li class="pc-item">
                                                    <a class="pc-link" href="#!"
                                                        >Level 4.1</a
                                                    >
                                                </li>
                                                <li class="pc-item">
                                                    <a class="pc-link" href="#!"
                                                        >Level 4.2</a
                                                    >
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pc-item pc-hasmenu">
                                    <a href="#!" class="pc-link"
                                        >Level 2.3<span class="pc-arrow"
                                            ><i
                                                data-feather="chevron-right"
                                            ></i></span
                                    ></a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item">
                                            <a class="pc-link" href="#!"
                                                >Level 3.1</a
                                            >
                                        </li>
                                        <li class="pc-item">
                                            <a class="pc-link" href="#!"
                                                >Level 3.2</a
                                            >
                                        </li>
                                        <li class="pc-item pc-hasmenu">
                                            <a href="#!" class="pc-link"
                                                >Level 3.3<span class="pc-arrow"
                                                    ><i
                                                        data-feather="chevron-right"
                                                    ></i></span
                                            ></a>
                                            <ul class="pc-submenu">
                                                <li class="pc-item">
                                                    <a class="pc-link" href="#!"
                                                        >Level 4.1</a
                                                    >
                                                </li>
                                                <li class="pc-item">
                                                    <a class="pc-link" href="#!"
                                                        >Level 4.2</a
                                                    >
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="pc-item">
                            <a href="../other/sample-page.html" class="pc-link">
                                <span class="pc-micon"
                                    ><i class="ti ti-brand-chrome"></i
                                ></span>
                                <span class="pc-mtext">Sample page</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="pc-header">
            <div class="header-wrapper">
                <div class="me-auto pc-mob-drp">
                    <ul class="list-unstyled">
                        <li class="pc-h-item pc-sidebar-collapse">
                            <a
                                href="#"
                                class="pc-head-link ms-0"
                                id="sidebar-hide"
                            >
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="pc-h-item pc-sidebar-popup">
                            <a
                                href="#"
                                class="pc-head-link ms-0"
                                id="mobile-collapse"
                            >
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="ms-auto">
                    <ul class="list-unstyled">
                        <li class="dropdown pc-h-item header-user-profile">
                            <a
                                class="pc-head-link dropdown-toggle arrow-none me-0"
                                data-bs-toggle="dropdown"
                                href="#"
                                role="button"
                                aria-haspopup="false"
                                data-bs-auto-close="outside"
                                aria-expanded="false"
                            >
                                <img
                                    src="../assets/images/user/avatar-2.jpg"
                                    alt="user-image"
                                    class="user-avtar"
                                />
                                <span>Stebin Ben</span>
                            </a>
                            <div
                                class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown"
                            >
                                <div class="dropdown-header">
                                    <div class="d-flex mb-1">
                                        <div class="flex-shrink-0">
                                            <img
                                                src="../assets/images/user/avatar-2.jpg"
                                                alt="user-image"
                                                class="user-avtar wid-35"
                                            />
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Stebin Ben</h6>
                                            <span>UI/UX Designer</span>
                                        </div>
                                        <a
                                            href="#!"
                                            class="pc-head-link bg-transparent"
                                            ><i
                                                class="ti ti-power text-danger"
                                            ></i
                                        ></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <div class="pc-container">
            <div class="pc-content">
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Home</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">
                                    Total Page Views
                                </h6>
                                <h4 class="mb-3">
                                    4,42,236
                                    <span
                                        class="badge bg-light-primary border border-primary"
                                        ><i class="ti ti-trending-up"></i>
                                        59.3%</span
                                    >
                                </h4>
                                <p class="mb-0 text-muted text-sm">
                                    You made an extra
                                    <span class="text-primary">35,000</span>
                                    this year
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">
                                    Total Users
                                </h6>
                                <h4 class="mb-3">
                                    78,250
                                    <span
                                        class="badge bg-light-success border border-success"
                                        ><i class="ti ti-trending-up"></i>
                                        70.5%</span
                                    >
                                </h4>
                                <p class="mb-0 text-muted text-sm">
                                    You made an extra
                                    <span class="text-success">8,900</span> this
                                    year
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">
                                    Total Order
                                </h6>
                                <h4 class="mb-3">
                                    18,800
                                    <span
                                        class="badge bg-light-warning border border-warning"
                                        ><i class="ti ti-trending-down"></i>
                                        27.4%</span
                                    >
                                </h4>
                                <p class="mb-0 text-muted text-sm">
                                    You made an extra
                                    <span class="text-warning">1,943</span> this
                                    year
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">
                                    Total Sales
                                </h6>
                                <h4 class="mb-3">
                                    $35,078
                                    <span
                                        class="badge bg-light-danger border border-danger"
                                        ><i class="ti ti-trending-down"></i>
                                        27.4%</span
                                    >
                                </h4>
                                <p class="mb-0 text-muted text-sm">
                                    You made an extra
                                    <span class="text-danger">$20,395</span>
                                    this year
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-xl-8">
                        <div
                            class="d-flex align-items-center justify-content-between mb-3"
                        >
                            <h5 class="mb-0">Unique Visitor</h5>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">
                                    This Week Statistics
                                </h6>
                                <h3 class="mb-3">$7,650</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <h5 class="mb-3">Income Overview</h5>
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">
                                    This Week Statistics
                                </h6>
                                <h3 class="mb-3">$7,650</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-4 f-w-400 text-muted">
                                    This Week Statistics
                                </h6>
                                <div class="table-responsive">
                                    <table
                                        class="table table-hover table-bordered mb-0"
                                    >
                                        <thead>
                                            <tr>
                                                <th>TRACKING NO.</th>
                                                <th>PRODUCT NAME</th>
                                                <th>TOTAL ORDER</th>
                                                <th>STATUS</th>
                                                <th class="text-end">
                                                    TOTAL AMOUNT
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-muted"
                                                        >84564564</a
                                                    >
                                                </td>
                                                <td>Camera Lens</td>
                                                <td>40</td>
                                                <td>
                                                    <span
                                                        class="d-flex align-items-center gap-2"
                                                        ><i
                                                            class="fas fa-circle text-danger f-10 m-r-5"
                                                        ></i
                                                        >Rejected</span
                                                    >
                                                </td>
                                                <td class="text-end">
                                                    $40,570
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-muted"
                                                        >84564564</a
                                                    >
                                                </td>
                                                <td>Laptop</td>
                                                <td>300</td>
                                                <td>
                                                    <span
                                                        class="d-flex align-items-center gap-2"
                                                        ><i
                                                            class="fas fa-circle text-warning f-10 m-r-5"
                                                        ></i
                                                        >Pending</span
                                                    >
                                                </td>
                                                <td class="text-end">
                                                    $180,139
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-muted"
                                                        >84564564</a
                                                    >
                                                </td>
                                                <td>Mobile</td>
                                                <td>355</td>
                                                <td>
                                                    <span
                                                        class="d-flex align-items-center gap-2"
                                                        ><i
                                                            class="fas fa-circle text-success f-10 m-r-5"
                                                        ></i
                                                        >Approved</span
                                                    >
                                                </td>
                                                <td class="text-end">
                                                    $180,139
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-muted"
                                                        >84564564</a
                                                    >
                                                </td>
                                                <td>Camera Lens</td>
                                                <td>40</td>
                                                <td>
                                                    <span
                                                        class="d-flex align-items-center gap-2"
                                                        ><i
                                                            class="fas fa-circle text-danger f-10 m-r-5"
                                                        ></i
                                                        >Rejected</span
                                                    >
                                                </td>
                                                <td class="text-end">
                                                    $40,570
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-muted"
                                                        >84564564</a
                                                    >
                                                </td>
                                                <td>Laptop</td>
                                                <td>300</td>
                                                <td>
                                                    <span
                                                        class="d-flex align-items-center gap-2"
                                                        ><i
                                                            class="fas fa-circle text-warning f-10 m-r-5"
                                                        ></i
                                                        >Pending</span
                                                    >
                                                </td>
                                                <td class="text-end">
                                                    $180,139
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-muted"
                                                        >84564564</a
                                                    >
                                                </td>
                                                <td>Mobile</td>
                                                <td>355</td>
                                                <td>
                                                    <span
                                                        class="d-flex align-items-center gap-2"
                                                        ><i
                                                            class="fas fa-circle text-success f-10 m-r-5"
                                                        ></i
                                                        >Approved</span
                                                    >
                                                </td>
                                                <td class="text-end">
                                                    $180,139
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-muted"
                                                        >84564564</a
                                                    >
                                                </td>
                                                <td>Camera Lens</td>
                                                <td>40</td>
                                                <td>
                                                    <span
                                                        class="d-flex align-items-center gap-2"
                                                        ><i
                                                            class="fas fa-circle text-danger f-10 m-r-5"
                                                        ></i
                                                        >Rejected</span
                                                    >
                                                </td>
                                                <td class="text-end">
                                                    $40,570
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-muted"
                                                        >84564564</a
                                                    >
                                                </td>
                                                <td>Laptop</td>
                                                <td>300</td>
                                                <td>
                                                    <span
                                                        class="d-flex align-items-center gap-2"
                                                        ><i
                                                            class="fas fa-circle text-warning f-10 m-r-5"
                                                        ></i
                                                        >Pending</span
                                                    >
                                                </td>
                                                <td class="text-end">
                                                    $180,139
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-muted"
                                                        >84564564</a
                                                    >
                                                </td>
                                                <td>Mobile</td>
                                                <td>355</td>
                                                <td>
                                                    <span
                                                        class="d-flex align-items-center gap-2"
                                                        ><i
                                                            class="fas fa-circle text-success f-10 m-r-5"
                                                        ></i
                                                        >Approved</span
                                                    >
                                                </td>
                                                <td class="text-end">
                                                    $180,139
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-muted"
                                                        >84564564</a
                                                    >
                                                </td>
                                                <td>Mobile</td>
                                                <td>355</td>
                                                <td>
                                                    <span
                                                        class="d-flex align-items-center gap-2"
                                                        ><i
                                                            class="fas fa-circle text-success f-10 m-r-5"
                                                        ></i
                                                        >Approved</span
                                                    >
                                                </td>
                                                <td class="text-end">
                                                    $180,139
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <nav class="navbar sticky-bottom bg-body-tertiary">
                            <p class="mb-0 text-muted text-sm">
                                You made it !!!
                            </p>
                            <span class="navbar-text">
                                <p class="mb-0 text-muted text-sm">
                                    You made it !!!
                                </p>
                            </span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
        <script src="{{
                asset('assets/js/plugins/bootstrap.min.js')
            }}"></script>
        <script src="{{
                asset('assets/js/plugins/simplebar.min.js')
            }}"></script>
        <script src="{{ asset('assets/js/pcoded.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>
    </body>
</html>
