  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('lte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Nuri Izatti A.</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">

          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <ul class="nav nav-treeview nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="/admin/home" class="nav-link">
                  <i></i>
                  <p>Beranda</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/instansi" class="nav-link">

                  <i></i>
                  <p>Instansi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/masyarakat" class="nav-link ">
                  <i></i>
                  <p>Masyarakat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i></i>
                  <p>Postingan</p>
                </a>
              </li>
            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>