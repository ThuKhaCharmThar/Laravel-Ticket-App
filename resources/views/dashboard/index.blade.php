<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.header')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src={{ asset('dist/img/AdminLTELogo.png') }} alt="AdminLTELogo" height="60"
                width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-olive elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src={{ asset('dist/img/gicLogo.png') }} alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-bold" style="color:  #add8e6;">TicketGenius</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src={{ asset('dist/img/avatar4.png') }} class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><span style="color: #add8e6">
                            {{ Auth::user()->name }}
                        </span></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                {{-- <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div> --}}

                <!-- Sidebar Menu -->

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('ticket.index') }}" class="nav-link">
                                <span style="color: #7393B3;">
                                 <i class="nav-icon fas fa-list-alt"></i>
                                </span>
                                <p style="color: #ffffff">
                                    Ticket
                                    {{-- <span class="right badge badge-danger">New</span>  --}}
                                </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('ticket.create') }}" class="nav-link">
                                <span style="color: #7393B3;">
                                 <i class="nav-icon fas fa-plus"></i>
                                </span>
                                <p style="color: #ffffff ">
                                    Create Ticket 
                                </p>
                            </a>
                        </li>
                    </ul> 
                    @if ((Auth::user()->role==0))
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('user.index') }}" class="nav-link ">
                                <span style="color: #B2BEB5;">
                                 <i class="nav-icon fas fa-th"></i>
                                </span>
                                <p style="color: #ffffff">
                                    User
                                    {{-- <span class="right badge badge-danger">New</span> --}}
                                </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('user.create') }}" class="nav-link">
                                <span style="color: #7393B3;">
                                  <i class="nav-icon fas fa-plus"></i>
                                </span>
                                <p style="color: #ffffff">
                                    Create User
                                </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('priority.index') }}" class="nav-link">
                                <span style="color: #B2BEB5;">
                                 <i class="nav-icon fas fa-list-alt"></i>
                                </span>
                                <p style="color: #ffffff">
                                    Priority
                                    {{-- <span class="right badge badge-danger">New</span>  --}}
                                </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('priority.create') }}" class="nav-link">
                                <span style="color: #7393B3;">
                                 <i class="nav-icon fas fa-plus"></i>
                                </span>
                                <p style="color:#ffffff ">
                                    Create priotity
                                </p>
                            </a>
                        </li>
                    </ul> 
                    
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('category.index') }}" class="nav-link">
                            <span style="color: #B2BEB5;">
                             <i class="nav-icon fas fa-list-alt"></i>
                            </span>
                            <p style="color: #feffff">
                                Category
                                {{-- <span class="right badge badge-danger">New</span>  --}}
                            </p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('category.create') }}" class="nav-link">
                            <span style="color: #7393B3;">
                             <i class="nav-icon fas fa-plus"></i>
                            </span>
                            <p style="color:rgb(255, 255, 255) ">
                                Create Category
                            </p>
                        </a>
                    </li>
                </ul> 
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('label.index') }}" class="nav-link">
                        <span style="color: #B2BEB5;">
                         <i class="nav-icon fas fa-list-alt"></i>
                        </span>
                        <p style="color: #f8ffff">
                            Label
                            {{-- <span class="right badge badge-danger">New</span>  --}}
                        </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('label.create') }}" class="nav-link">
                        <span style="color: #7393B3;">
                         <i class="nav-icon fas fa-plus"></i>
                        </span>
                        <p style="color:rgb(211, 205, 204) ">
                            Create label
                        </p>
                    </a>
                </li>
            </ul> 
            @endif
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <div class="content-wrapper"style="background-image: url('dist/img/background-spot.svg')">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
 
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        {{-- @yield('content') --}}
    </div>
    </div>
    @extends('dashboard.footer')
</body>
</html>
