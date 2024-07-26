<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light text-center">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/admin-dashboard" class="nav-link {{Request::is('admin-dashboard') ? 'active' : ''}}">
              <i class="nav-icon fas fa-home "></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin-dashboard/destinations" class="nav-link {{Request::is('admin-dashboard/destinations*') ? 'active' : ''}}">
                <i class="nav-icon fa-solid fa-location-dot"></i>
              <p>
                Destinations
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin-dashboard/packages" class="nav-link {{Request::is('admin-dashboard/package*') ? 'active' : ''}}">
              <i class="nav-icon fa-solid fa-boxes-packing"></i>
              <p>
                Packages
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin-dashboard/gallery" class="nav-link {{Request::is('admin-dashboard/gallery*') ? 'active' : ''}}">
                <i class="nav-icon fa-solid fa-images"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin-dashboard/library" class="nav-link {{Request::is('admin-dashboard/library*') ? 'active' : ''}}">
                <i class="nav-icon fa-solid fa-images"></i>
              <p>
                Library
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin-dashboard/articles" class="nav-link {{Request::is('admin-dashboard/articles*') ? 'active' : ''}}">
                <i class="nav-icon fa-solid fa-newspaper"></i>
              <p>
                Articles
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin-dashboard/reviews" class="nav-link {{Request::is('admin-dashboard/reviews*') ? 'active' : ''}}">
                <i class="nav-icon fa-solid fa-comments"></i>
              <p>
                Reviews
              </p>
            </a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="POST">
                @csrf
                <button class="nav-link btn text-white text-start">
                <i class=" nav-icon fas fa-angle-double-left"></i>
                <p>
                    Logout
                </p>
                </button>
            </form>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
