<!DOCTYPE html>
<html>
    <head>
        @include('maintenance::layouts.main.head')
    </head>
    <body class="skin-blue">

    <header class="header">
        <a href="{{ route('maintenance.dashboard.index') }}" class="logo"><i class="fa fa-wrench"></i> {{ $siteTitle }}</a>

        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    
                    <li id="loading" class="hidden"><img width="40" src="{{ asset('packages/stevebauman/maintenance/img/loading.gif') }}" /></li>
                    
                    @include('maintenance::layouts.main.notifications')
                    
                    @include('maintenance::layouts.main.profile')
                </ul>
            </div>
        </nav>
    </header>
    <!--End of header-->

    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{asset('packages/stevebauman/maintenance/adminlte/img/user.jpg')}}" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>Hello, 
                            @if(Sentry::getUser()->first_name)
                                    {{ Sentry::getUser()->first_name }}
                            @else
                                    {{ Sentry::getUser()->last_name }}
                            @endif
                        </p>
                    </div>
                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">

                    <li>
                        <a href="{{ route('maintenance.admin.users.index') }}">
                            <i class="fa fa-user"></i> Users
                        </a>
                    </li>
                    
                    <li>
                        <a href="{{ route('maintenance.admin.groups.index') }}">
                            <i class="fa fa-users"></i> Groups
                        </a>
                    </li>
                    
                    <li class="treeview">
                        <a href="{{ route('maintenance.admin.archive.index') }}">
                            <i class="fa fa-archive"></i> Archive
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ route('maintenance.admin.archive.work-orders.index') }}" style="margin-left: 10px;">
                                    <i class="fa fa-book"></i> Work Orders
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('maintenance.admin.archive.inventory.index') }}" style="margin-left: 10px;">
                                    <i class="fa fa-dropbox"></i> Inventory
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('maintenance.admin.archive.assets.index') }}" style="margin-left: 10px;">
                                    <i class="fa fa-truck"></i> Assets
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('header')
                <ol class="breadcrumb">
                    @section('breadcrumb')
                    <li><a href="{{ route('maintenance.dashboard.index') }} ">
                            <i class="fa fa-dashboard"></i>
                            Dashboard
                        </a>
                    </li>
                    @show
                </ol>
            </section>

            <!-- Main content -->
             <section class="content">
                <div id="alerts">
                    @include('maintenance::layouts.main.alert')
                </div>
                
                <div id="content">
                    @yield('content')
                </div>
            </section>
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->
    
    @include('maintenance::layouts.main.foot')
    
    <!-- Bootbox-->
    {{ HTML::script('packages/stevebauman/maintenance/adminlte/bootbox/bootbox.min.js') }}
    <!-- AdminLTE App -->
    {{ HTML::script('packages/stevebauman/maintenance/adminlte/js/app.js') }}

    </body>
</html>