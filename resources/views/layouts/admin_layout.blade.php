<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
    </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/admin/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/storage/common/Os1U2BnGzy4nxtgiuLRlXiutEmz1JClchoKtx2UG.png"
                alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href={{ route('dashboard') }} class="nav-link">{{ __('Home') }}</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="/admin/dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="/admin/dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="/admin/dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true"
                        href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <div class="conntainer">
            <div class="row">
                <div class="col-lg-2">
                    <!-- Main Sidebar Container -->
                    <aside class="main-sidebar sidebar-dark-primary elevation-4">
                        <!-- Brand Logo -->
                        <a href="index3.html" class="brand-link">
                            <img src="/storage/common/Os1U2BnGzy4nxtgiuLRlXiutEmz1JClchoKtx2UG.png"
                                alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                            <span class="brand-text font-weight-light">
                                @yield('title')
                            </span>
                        </a>

                        <!-- Sidebar -->
                        <div class="sidebar">
                            <!-- Sidebar user panel (optional) -->
                            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                <div class="image" style="text-align: center;">
                                    @if (Auth::user()->volunteer && Auth::user()->volunteer->photo)
                                        <img src="{{ asset('storage/' . Auth::user()->volunteer->photo) }}"
                                            alt="User Photo" class="img-circle elevation-2"
                                            style="max-width: 150px;">
                                    @else
                                        <img src="{{ asset('/storage/common/02ulyUfj0IDpOJKrj550BDY9vwR2s9rJAGBmMvO9.jpg') }}"
                                            alt="Default Photo" class="img-circle elevation-2"
                                            style="max-width: 150px;">
                                    @endif
                                    <a href="#"
                                        class="d-block">{{ Auth::user()->name }}<br />{{ Auth::user()->email }}</a>
                                </div>
                                <div class="info">

                                </div>
                            </div>

                            <!-- SidebarSearch Form -->
                            <div class="form-inline">
                                <div class="input-group" data-widget="sidebar-search">
                                    <input class="form-control form-control-sidebar" type="search"
                                        placeholder="Search" aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-sidebar">
                                            <i class="fas fa-search fa-fw"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <nav class="mt-2">
                                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
                                    role="menu" data-accordion="false">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-user-alt"></i>
                                            <p style="margin-left: 12px;">
                                                {{ __('All Users') }}
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ route('admin_users_index') }}" class="nav-link">
                                                    <i class="fas fa-user-friends"></i>
                                                    <p class="ml-3">{{ __('List') }}</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('admin_users_create') }}" class="nav-link">
                                                    <i class="fas fa-user-plus"></i>
                                                    <p class="ml-3">
                                                        {{ __('Create') }}
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon far fa-grin-stars"></i>
                                            <p style="margin-left: 2px;">
                                                {{ __('Volunteers') }}
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ route('admin_volunteers_index') }}" class="nav-link">
                                                    <i class="fas fa-user-friends"></i>
                                                    <p class="ml-3">{{ __('List') }}</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('admin_users_index') }}" class="nav-link">
                                                    <i class="fas fa-user-plus"></i>
                                                    <p class="ml-3">
                                                        {{ __('Create') }}
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fab fa-readme"></i>
                                            <p style="margin-left: 12px;">
                                                {{ __('Reports') }}
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ route('admin_reports_index') }}" class="nav-link">
                                                    <i class="fas fa-layer-group"></i>
                                                    <p class="ml-3">{{ __('List') }}</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('admin_report_create') }}" class="nav-link">
                                                    <i class="fas fa-plus"></i>
                                                    <p class="ml-3">
                                                        {{ __('Create') }}
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-tools"></i>
                                            <p style="margin-left: 12px;">
                                                {{ __('Skills') }}
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ route('admin_skills_list') }}" class="nav-link">
                                                    <i class="fas fa-tasks"></i>
                                                    <p class="ml-3">{{ __('List') }}</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('admin_skill_create') }}" class="nav-link">
                                                    <i class="fas fa-plus"></i>
                                                    <p class="ml-3">
                                                        {{ __('Create') }}
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-bullhorn"></i>
                                            <p style="margin-left: 12px;">
                                                {{ __('Offers') }}
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ route('admin_offers_index') }}" class="nav-link">
                                                    <i class="fas fa-briefcase"></i>
                                                    <p class="ml-3">{{ __('List') }}</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('admin_offer_create') }}" class="nav-link">
                                                    <i class="fas fa-plus"></i>
                                                    <p class="ml-3">
                                                        {{ __('Create') }}
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-award"></i>
                                            <p style="margin-left: 12px;">
                                                {{ __('Tenders') }}
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ route('admin_tender_index') }}" class="nav-link">
                                                    <i class="fas fa-bars"></i>
                                                    <p class="ml-3">{{ __('List') }}</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('admin_tender_create') }}" class="nav-link">
                                                    <i class="fas fa-plus"></i>
                                                    <p class="ml-3">
                                                        {{ __('Create') }}
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-bahai"></i>
                                            <p style="margin-left: 8px;">
                                                {{ __('Tender Proposal') }}
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ route('admin_tender_proposals_index') }}"
                                                    class="nav-link">
                                                    <i class="fas fa-bars"></i>
                                                    <p class="ml-3">{{ __('List') }}</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('admin_tender_index') }}" class="nav-link">
                                                    <i class="fas fa-plus"></i>
                                                    <p class="ml-3">
                                                        {{ __('Create') }}
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-newspaper"></i>
                                            <p style="margin-left: 8px;">
                                                {{ __('News') }}
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ route('admin.news.index') }}" class="nav-link">
                                                    <i class="fas fa-bars"></i>
                                                    <p class="ml-3">{{ __('List') }}</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-file"></i>
                                            <p style="margin-left: 8px;">
                                                {{ __('Storage Files') }}
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ route('admin_storage_files_index') }}" class="nav-link">
                                                    <i class="fas fa-bars"></i>
                                                    <p class="ml-3">{{ __('List') }}</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </nav>
                            <!-- /.sidebar-menu -->
                        </div>
                        <!-- /.sidebar -->
                    </aside>
                </div>
                <div class="col-lg-10">
                    <div class="paddi">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

        <!-- /.content-wrapper -->
        {{-- <footer class="main-footer">
          
        </footer> --}}

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="/admin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="/admin/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="/admin/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="/admin/plugins/moment/moment.min.js"></script>
    <script src="/admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/admin/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/admin/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/admin/dist/js/pages/dashboard.js"></script>
    @yield('scripts')
</body>

</html>
