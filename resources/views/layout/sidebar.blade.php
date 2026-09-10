<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="{{asset('/material/assets/img/AdminLTELogo.png')}}"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">AdminLTE 4</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2" aria-label="Main navigation">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              data-accordion="false"
              id="navigation"
            >
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Dashboard
                    <!-- <i class="nav-arrow bi bi-chevron-right"></i> -->
                  </p>
                </a>
               @if (in_array(auth()->user()->level, ['admin', 'guru']))
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-box-seam-fill"></i>
                  <p>
                    Data siswa 
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/input_data_siswa')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Input Data siswa</p>
                    </a>
                  </li>
                   <li class="nav-item">
                    <a href="{{url('/data')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Data siswa</p>
                    </a>
                  </li
                </ul>
              </li>
              @endif
              @if (auth()->user()->level === 'admin')
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-box-seam-fill"></i>
                  <p>
                    Data Kelas
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/input_data_kelas')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Input Data Kelas</p>
                    </a>
                  </li>
                   <li class="nav-item">
                    <a href="{{url('/data_kelas')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Data Kelas</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-box-seam-fill"></i>
                  <p>
                    Data Jurusan  
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/input_data_jurusan')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Input Data Jurusan</p>
                    </a>
                  </li>
                   <li class="nav-item">
                    <a href="{{url('/data_jurusan')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Data Jurusan</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
               <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-box-seam-fill"></i>
                  <p>
                    User Management 
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/register_user')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Tambah User</p>
                    </a>
                  </li>
                   <li class="nav-item">
                    <a href="{{url('/data_user')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Data User</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
              @endif
               <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link">
                  <i class="nav-icon bi bi-box-seam-fill"></i>
                  <p>
                    Logout
                  </p>
                </a>
              </li>
             
            </ul>
            <!--end::Sidebar Menu-->

           
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>