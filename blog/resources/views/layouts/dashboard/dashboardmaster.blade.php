<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="shortcut icon" href="{{ asset('dashboard_assets') }}/images/favicon.ico">

    <link href="dashboard_assets/libs/morris.js/morris.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="dashboard_assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="dashboard_assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="dashboard_assets/js/config.js"></script>
</head>
<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <!-- ========== Left Sidebar ========== -->
        <div class="main-menu">
            <!-- Brand Logo -->
            <div class="logo-box">
                <!-- Brand Logo Light -->
                <a class='logo-light' href='index.html'>
                    <img src="{{ asset('dashboard_assets') }}/images/logo-light.png" alt="logo" class="logo-lg" height="28">
                    <img src="{{ asset('dashboard_assets') }}/images/logo-sm.png" alt="small logo" class="logo-sm" height="28">
                </a>

                <!-- Brand Logo Dark -->
                <a class='logo-dark' href='index.html'>
                    <img src="{{ asset('dashboard_assets') }}/images/logo-dark.png" alt="dark logo" class="logo-lg" height="28">
                    <img src="{{ asset('dashboard_assets') }}/images/logo-sm.png" alt="small logo" class="logo-sm" height="28">
                </a>
            </div>

            <!--- Menu -->
            <div data-simplebar>
                <ul class="app-menu">

                    <li class="menu-title">Menu</li>

                    <li class="menu-item">
                        <a class='menu-link waves-effect waves-light' href='{{ route('home') }}'>
                            <span class="menu-icon"><i class="bx bx-home-smile"></i></span>
                            <span class="menu-text"> Dashboards </span>
                            <span class="badge bg-primary rounded ms-auto">01</span>
                        </a>
                    </li>

                    <li class="menu-title">Custom</li>

                    <li class="menu-item">
                        <a class='menu-link waves-effect waves-light' href='{{ route('profile') }}'>
                            <span class="menu-icon"><i class="bx bx-calendar"></i></span>
                            <span class="menu-text"> Profile </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="#menuExpages" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-file"></i></span>
                            <span class="menu-text"> Extra Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuExpages">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='pages-starter.html'>
                                        <span class="menu-text">Starter</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='pages-invoice.html'>
                                        <span class="menu-text">Invoice</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='pages-login.html'>
                                        <span class="menu-text">Log In</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='pages-register.html'>
                                        <span class="menu-text">Register</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='pages-recoverpw.html'>
                                        <span class="menu-text">Recover Password</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='pages-lock-screen.html'>
                                        <span class="menu-text">Lock Screen</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='pages-404.html'>
                                        <span class="menu-text">Error 404</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='pages-500.html'>
                                        <span class="menu-text">Error 500</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuLayouts" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-layout"></i></span>
                            <span class="menu-text"> Layouts </span>
                            <span class="badge bg-blue ms-auto">New</span>
                        </a>
                        <div class="collapse" id="menuLayouts">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='layout-horizontal.html'>
                                        <span class="menu-text">Horizontal</span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a class='menu-link' href='layout-sidenav-light.html'>
                                        <span class="menu-text">Sidenav Light</span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a class='menu-link' href='layout-sidenav-dark.html'>
                                        <span class="menu-text">Sidenav Dark</span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a class='menu-link' href='layout-topbar-dark.html'>
                                        <span class="menu-text">Topbar Dark</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-title">Components</li>

                    <li class="menu-item">
                        <a href="#menuComponentsui" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-cookie"></i></span>
                            <span class="menu-text"> UI Elements </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuComponentsui">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-alerts.html'>
                                        <span class="menu-text">Alerts</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-buttons.html'>
                                        <span class="menu-text">Buttons</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-cards.html'>
                                        <span class="menu-text">Cards</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-carousel.html'>
                                        <span class="menu-text">Carousel</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-dropdowns.html'>
                                        <span class="menu-text">Dropdowns</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-video.html'>
                                        <span class="menu-text">Embed Video</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-general.html'>
                                        <span class="menu-text">General UI</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-grid.html'>
                                        <span class="menu-text">Grid</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-images.html'>
                                        <span class="menu-text">Images</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-list-group.html'>
                                        <span class="menu-text">List Group</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-modals.html'>
                                        <span class="menu-text">Modals</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-offcanvas.html'>
                                        <span class="menu-text">Offcanvas</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-placeholders.html'>
                                        <span class="menu-text">Placeholders</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-progress.html'>
                                        <span class="menu-text">Progress</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-spinners.html'>
                                        <span class="menu-text">Spinners</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-tabs-accordions.html'>
                                        <span class="menu-text">Tabs & Accordions</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-tooltips-popovers.html'>
                                        <span class="menu-text">Tooltips & Popovers</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-typography.html'>
                                        <span class="menu-text">Typography</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuExtendedui" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-briefcase-alt-2"></i></span>
                            <span class="menu-text"> Components </span>
                            <span class="badge bg-info ms-auto">Hot</span>
                        </a>
                        <div class="collapse" id="menuExtendedui">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='components-range-slider.html'>
                                        <span class="menu-text">Range Slider</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='components-sweet-alert.html'>
                                        <span class="menu-text">Sweet Alert</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='components-loading-buttons.html'>
                                        <span class="menu-text">Loading Buttons</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuIcons" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-aperture"></i></span>
                            <span class="menu-text"> Icons </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuIcons">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='icons-feather.html'>
                                        <span class="menu-text">Feather Icons</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='icons-mdi.html'>
                                        <span class="menu-text">Material Design Icons</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='icons-dripicons.html'>
                                        <span class="menu-text">Dripicons</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuForms" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bxs-eraser"></i></span>
                            <span class="menu-text"> Forms </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuForms">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='forms-elements.html'>
                                        <span class="menu-text">General Elements</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='forms-advanced.html'>
                                        <span class="menu-text">Advanced</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='forms-validation.html'>
                                        <span class="menu-text">Validation</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='forms-quilljs.html'>
                                        <span class="menu-text">Editor</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='forms-file-uploads.html'>
                                        <span class="menu-text">File Uploads</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuTables" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-table"></i></span>
                            <span class="menu-text"> Tables </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuTables">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='tables-basic.html'>
                                        <span class="menu-text">Basic Tables</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='tables-datatables.html'>
                                        <span class="menu-text">Data Tables</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuCharts" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-doughnut-chart"></i></span>
                            <span class="menu-text"> Charts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuCharts">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='charts-apex.html'>
                                        <span class="menu-text">Apex Charts</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='charts-morris.html'>
                                        <span class="menu-text">Morris Charts</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='charts-chartjs.html'>
                                        <span class="menu-text">Chartjs Charts</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuMaps" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-map-alt"></i></span>
                            <span class="menu-text"> Maps </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuMaps">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='maps-google.html'>
                                        <span class="menu-text">Google Maps</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='maps-vector.html'>
                                        <span class="menu-text">Vector Maps</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuMultilevel" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-share-alt"></i></span>
                            <span class="menu-text"> Multi Level </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuMultilevel">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="#menuMultilevel2" data-bs-toggle="collapse"
                                        class="menu-link waves-effect waves-light">
                                        <span class="menu-text"> Second Level </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="menuMultilevel2">
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="javascript: void(0);" class="menu-link">
                                                    <span class="menu-text">Item 1</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="javascript: void(0);" class="menu-link">
                                                    <span class="menu-text">Item 2</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="menu-item">
                                    <a href="#menuMultilevel3" data-bs-toggle="collapse"
                                        class="menu-link waves-effect waves-light">
                                        <span class="menu-text">Third Level</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="menuMultilevel3">
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="javascript: void(0);" class="menu-link">
                                                    <span class="menu-text">Item 1</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#menuMultilevel4" data-bs-toggle="collapse"
                                                    class="menu-link waves-effect waves-light">
                                                    <span class="menu-text">Item 2</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="menuMultilevel4">
                                                    <ul class="sub-menu">
                                                        <li class="menu-item">
                                                            <a href="javascript: void(0);" class="menu-link">
                                                                <span class="menu-text">Item 1</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="javascript: void(0);" class="menu-link">
                                                                <span class="menu-text">Item 2</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                <div class="topbar">
                    <div class="topbar-menu d-flex align-items-center gap-lg-2 gap-1">

                        <!-- Brand Logo -->
                        <div class="logo-box">
                            <!-- Brand Logo Light -->
                            <a class='logo-light' href='index.html'>
                                <img src="{{ asset('dashboard_assets') }}/images/logo-light.png" alt="logo" class="logo-lg" height="22">
                                <img src="{{ asset('dashboard_assets') }}/images/logo-sm.png" alt="small logo" class="logo-sm" height="22">
                            </a>

                            <!-- Brand Logo Dark -->
                            <a class='logo-dark' href='index.html'>
                                <img src="{{ asset('dashboard_assets') }}/images/logo-dark.png" alt="dark logo" class="logo-lg" height="22">
                                <img src="{{ asset('dashboard_assets') }}/images/logo-sm.png" alt="small logo" class="logo-sm" height="22">
                            </a>
                        </div>

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>

                    <ul class="topbar-menu d-flex align-items-center gap-4">

                        <li class="d-none d-md-inline-block">
                            <a class="nav-link" href="#" data-bs-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen font-size-24"></i>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-magnify font-size-24"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-menu-end dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>


                        <li class="dropdown d-none d-md-inline-block">
                            <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('dashboard_assets') }}/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="18">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ asset('dashboard_assets') }}/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ asset('dashboard_assets') }}/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ asset('dashboard_assets') }}/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ asset('dashboard_assets') }}/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-bell font-size-24"></i>
                                <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                                <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 font-size-16 fw-semibold"> Notification</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                <small>Clear All</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="px-1" style="max-height: 300px;" data-simplebar>

                                    <h5 class="text-muted font-size-13 fw-normal mt-2">Today</h5>
                                    <!-- item-->

                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-1">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-primary">
                                                        <i class="mdi mdi-comment-account-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-size-14">Datacorp <small class="fw-normal text-muted ms-1">1 min ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-info">
                                                        <i class="mdi mdi-account-plus"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-size-14">Admin <small class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">New user registered</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <h5 class="text-muted font-size-13 fw-normal mt-0">Yesterday</h5>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon">
                                                        <img src="{{ asset('dashboard_assets') }}/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-size-14">Cristina Pride <small class="fw-normal text-muted ms-1">1 day ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <h5 class="text-muted font-size-13 fw-normal mt-0">30 Dec 2021</h5>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-primary">
                                                        <i class="mdi mdi-comment-account-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-size-14">Datacorp</h5>
                                                    <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon">
                                                        <img src="{{ asset('dashboard_assets') }}/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-size-14">Karen Robinson</h5>
                                                    <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="text-center">
                                        <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                                    </div>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="nav-link" id="theme-mode">
                            <i class="bx bx-moon font-size-24"></i>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                @if('auth()->user->profile_photo')
                                <img src="{{ asset('uploads/profile_photos') }}/{{ auth()->user()->profile_photo}}" class="img-fluid rounded-circle" alt="">

                                @else
                                <img src="{{ asset('dashboard_assets') }}/images/profile/profile.png" class="img-fluid rounded-circle"  width="20px"  alt="">
                                @endif
                                <span class="ms-1 d-none d-md-inline-block">
                                    {{ auth()->user()->name }} <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a class='dropdown-item notify-item' href='pages-lock-screen.html'>
                                    <i class="fe-lock"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a class='dropdown-item notify-item' href='{{ route('logout') }}'  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">>
                                    <i class="fe-log-out"></i>
                                    <span>Logout

                                    </span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- ========== Topbar End ========== -->

            <div class="px-3">

                <!-- Start Content-->
                <div class="container">
                    @yield('content')


                    <!-- end page title -->


                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div><script>document.write(new Date().getFullYear())</script> © Dashtrap</div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-none d-md-flex gap-4 align-item-center justify-content-md-end">
                                <p class="mb-0">Design & Develop by <a href="https://myrathemes.com/" target="_blank">MyraStudio</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- App js -->
    <script src="dashboard_assets/js/vendor.min.js"></script>
    <script src="dashboard_assets/js/app.js"></script>

    <!-- Knob charts js -->
    <script src="dashboard_assets/libs/jquery-knob/jquery.knob.min.js"></script>

    <!-- Sparkline Js-->
    <script src="dashboard_assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <script src="dashboard_assets/libs/morris.js/morris.min.js"></script>

    <script src="dashboard_assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard init-->
    <script src="dashboard_assets/js/pages/dashboard.js"></script>

</body>

</html>