<!-- Sidebar -->
<ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/">
        <div class="sidebar-brand-icon">
            <img src="/siakad/img/logo.png" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">SIAKAD</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/admin/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu Utama
    </div>

    <!-- Nav Item Guru-->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-th-large"></i>
            <span>Master Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/admin/data-guru">Guru</a>
                <a class="collapse-item" href="/admin/data-siswa">Siswa</a>
                <a class="collapse-item" href="/admin/data-guru">Kelas</a>
                <a class="collapse-item" href="/admin/data-guru">Pelajaran</a>
            </div>
        </div>
    </li>

    <!-- Nav Item Siswa -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-user"></i>
            <span>Data Siswa</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/admin/utilities-color">Daftar Siswa</a>
                <a class="collapse-item" href="/admin/utilities-border">Tambah Siswa</a>
                <!-- <a class="collapse-item" href="/admin/utilities-animation">Animations</a> -->
                <!-- <a class="collapse-item" href="/admin/utilities-other">Other</a> -->
            </div>
        </div>
    </li>


    <!-- Nav Item Kelas-->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKelas" aria-expanded="true" aria-controls="collapseKelas">
            <i class="fas fa-fw fa-th-large"></i>
            <span>Data Kelas</span>
        </a>
        <div id="collapseKelas" class="collapse" aria-labelledby="headingKelas" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/admin/buttons">Daftar Kelas</a>
                <a class="collapse-item" href="/admin/cards">Tambah Kelas</a>
            </div>
        </div>
    </li>


    <!-- Nav Item Pelajaran-->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePelajaran" aria-expanded="true" aria-controls="collapsePelajaran">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Data Pelajaran</span>
        </a>
        <div id="collapsePelajaran" class="collapse" aria-labelledby="headingPelajaran" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/admin/buttons">Daftar Pelajaran</a>
                <a class="collapse-item" href="/admin/cards">Tambah Pelajaran</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu Pengguna
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pengaturan</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="/login">Login</a>
                <a class="collapse-item" href="/register">Register</a>
                <a class="collapse-item" href="/forgot-password">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="/admin/404">404 Page</a>
                <a class="collapse-item" href="/admin/blank">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="/admin/charts">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li> -->

    <!-- Nav Item - Tables -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="/admin/tables">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <!-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> -->

    <!-- Sidebar Message -->
    <div class="sidebar-card">
        <img class="sidebar-card-illustration mb-2" src="/siakad/img/logo.png" alt="">
        <p class="text-center mb-2"><strong>SIAKAD</strong> merupakan aplikasi pengelolaan sekolah berbasis web!</p>
        <a class="btn btn-success btn-sm" href="https://karyane.com">Upgrade to Pro!</a>
    </div>

</ul>
<!-- End of Sidebar -->