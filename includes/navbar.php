<header class="header" id="header">
    <div class="header_toggle">
        <i class='bx bx-menu text-white' id="header-toggle"></i>
    </div>

</header>

<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav_logo">
                <img src="assets/img/icon/logo.svg" alt="" width="25px">
                <span class="nav_logo-name">RS. ASOY</span>
            </a>
            <div class="nav_list">
                <a href="?page=dashboard" class="nav_link <?= ($page == "dashboard") ? 'active' : '' ?>">
                    <i class="fas fa-th-large"></i>
                    <span class="nav_name">Dashboard</span>
                </a>
                <a href="?page=pasien" class="nav_link <?= ($page == "pasien") ? 'active' : '' ?>">
                    <i class="fas fa-user"></i>
                    <span class="nav_name">Data Pasien</span>
                </a>
                <a href="?page=jadwal_dokter" class="nav_link <?= ($page == "jadwal_dokter") ? 'active' : '' ?>">
                    <i class="fas fa-clock"></i>
                    <span class="nav_name">Jadwal Dokter</span>
                </a>
                <a href="?page=obat" class="nav_link <?= ($page == "obat") ? 'active' : '' ?>">
                    <i class="fas fa-pills"></i>
                    <span class="nav_name">Data Obat</span>
                </a>
                <a href="?page=dokter" class="nav_link <?= ($page == "dokter") ? 'active' : '' ?>">
                    <i class="fas fa-user-md"></i>
                    <span class="nav_name">Data Dokter</span>
                </a>
                <a href="?page=transaksi" class="nav_link <?= ($page == "transaksi") ? 'active' : '' ?>">
                    <i class="fas fa-money-check-alt"></i>
                    <span class="nav_name">Data Transaksi</span>
                </a>
                <a href="?page=absensi" class="nav_link <?= ($page == "absensi") ? 'active' : '' ?>">
                    <i class="fas fa-address-book"></i>
                    <span class="nav_name">Data Absensi</span>
                </a>
                <a href="?page=logout" class="nav_link" <?= ($page == "logout") ? 'active' : '' ?>">
                    
                </a>
            </div>
        </div>
    </nav>
</div>