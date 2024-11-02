<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="/" class="brand-link"> <!--begin::Brand Image--> <img src="{{ asset('adminlte')}}/dist/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">AdminLTE 4</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open"> <a href="/" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">Admin Panel</li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Kesiswaan
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="{{ asset('adminlte/dist/pages')}}/widgets/small-box.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Tambah Siswa</p>
                            </a> </li>
                        <li class="nav-item"> <a href="{{ asset('adminlte/dist/pages')}}/widgets/info-box.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Daftar Siswa</p>
                            </a> </li>
                        <li class="nav-item"> <a href="{{ asset('adminlte/dist/pages')}}/widgets/cards.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Data Mutasi</p>
                            </a> </li>
                    </ul>
                </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-clipboard-fill"></i>
                        <p>
                            Kelas
                            {{-- <span class="nav-badge badge text-bg-secondary me-3">6</span> --}} <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="{{ asset('adminlte/dist/pages')}}/layout/unfixed-sidebar.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Tambah Kelas</p>
                            </a> </li>
                        <li class="nav-item"> <a href="{{ asset('adminlte/dist/pages')}}/layout/fixed-sidebar.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Daftar Kelas</p>
                            </a> </li>
                    </ul>
                </li>
                <li class="nav-header">SETTINGS</li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-clipboard-fill"></i>
                    <p>
                        Pengaturan Akun
                        {{-- <span class="nav-badge badge text-bg-secondary me-3">6</span> --}} <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item"> <a href="{{ asset('adminlte/dist/pages')}}/layout/unfixed-sidebar.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                            <p>Ganti Password</p>
                        </a> </li>
                    <li class="nav-item"> <a href="{{ asset('adminlte/dist/pages')}}/layout/fixed-sidebar.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                            <p>Logout</p>
                        </a> </li>
                </ul>
            </li>

            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside> <!--end::Sidebar-->
