<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link" href="{{route('dashboard.index')}}">
        <span class="font-weight-bold">MyPos</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            {{-- <div class="image">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div> --}}
            <div class="info">
                <a href="#" class="d-block">
                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard.index')}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>{{trans('site.dashboard')}}</p>
                    </a>
                </li>
                @if (auth()->user()->hasPermission('read-users'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('users.index')}}">
                            <i class="nav-icon fas fa-users-cog"></i>
                            <p>{{trans('site.users')}}</p>
                        </a>
                    </li>
                @endif

                @if (auth()->user()->hasPermission('read-clients'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('clients.index')}}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>{{trans('site.clients')}}</p>
                        </a>
                    </li>
                @endif

                @if (auth()->user()->hasPermission('read-categories'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('categories.index')}}">
                            <i class="nav-icon fas fa-layer-group"></i>
                            <p>{{trans('site.categories')}}</p>
                        </a>
                    </li>
                @endif

                @if (auth()->user()->hasPermission('read-products'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('products.index')}}">
                            <i class="nav-icon fas fa-clone"></i>
                            <p>{{trans('site.products')}}</p>
                        </a>
                    </li>
                @endif

                @if (auth()->user()->hasPermission('read-orders'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('orders.index')}}">
                            <i class="nav-icon fas fa-clone"></i>
                            <p>{{trans('site.orders')}}</p>
                        </a>
                    </li>
                @endif


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
