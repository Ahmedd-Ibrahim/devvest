
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.home')}}" class="brand-link">
        <img src="{{asset('assests/admin/dist/img/logobar.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">adminpanel</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assests/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('front.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Vist website
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.home')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.mail.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            mailBox
                            <span class="right badge badge-danger">{{\App\model\mail::count()}}</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-table"></i>
                      <p>
                        Portfolio
                        <span class="right badge badge-danger">{{\App\model\Portfolio::count()}}</span>
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                      <a href="{{route('admin.portfolio.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Show All</p>
                        </a>
                      </li>
                      <li class="nav-item">
                      <a href="{{route('admin.portfolio.create')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add new</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                      <p>
                        Testimonails
                        <span class="right badge badge-danger">{{\App\model\Testimony::count()}}</span>
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                      <a href="{{route('admin.testimony.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Show All</p>
                        </a>
                      </li>
                      <li class="nav-item">
                      <a href="{{route('admin.testimony.create')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add new</p>
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
