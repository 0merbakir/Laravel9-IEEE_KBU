  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="navbar-brand js-scroll-trigger" href="/admin">
            <img class="img-fluid" src="{{asset('assets')}}/images/ieee-logo.png" width="254" height="70">
          </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/admin/mesajlar" class="nav-link">
            <i class="nav-icon far fa-envelope"></i>
              <p>
                Mesajlar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/uyeler" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
              <p>
                Üyeler
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/blogs" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
              <p>
                Bloglar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/etkinlikler" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
              <p>
                Etkinlikler
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>