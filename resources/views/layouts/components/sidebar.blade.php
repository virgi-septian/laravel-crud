<div class="sidebar ">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          @guest
            <a href="#" class="d-block">User</a>
          @else
            <a href="#" class="d-block">{{Auth::user()->name}}</a>
          @endguest
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
            <a href="{{url('/')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item menu">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-server"></i>
              <p>
                Contoh
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('post.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon nav-icon"></i> 
                  <p>Data Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('wali.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon nav-icon"></i> 
                  <p>Data Wali</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-server"></i>
                  <p>
                    Latihan
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('siswa.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Siswa</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('nilai.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Nilai</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('jurusan.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Jurusan</p>
                    </a>
                  </li>
                </ul>
              </li>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>