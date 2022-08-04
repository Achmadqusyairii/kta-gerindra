        <!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class=""></i>
    </div>
    <img class="" src="<?php echo base_url()?>assets/img/logo.png">
    <div class="sidebar-brand-text mx-3">E-KTA PARTAI <sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="">
        <i class=""></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    MASTER DATA
</div>

<!-- Nav Item - Pages Collapse Menu -->

<li class="nav-item">
    <a class="nav-link" href="http://localhost/kta-gerindra/level/index/">
       <i class="fas fa-thin fa-address-card"></i>
        <span>LEVEL JABATAN</span></a>
</li>

<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-thin fa-map"></i>
                    <span>WILAYAH</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tambah Wilayah</h6>
                        <a class="collapse-item" href="http://[::1]/kta-gerindra/provinsi/index/">Provinsi</a>
                        <a class="collapse-item" href="http://localhost/kta-gerindra/kabupaten/index">Kabupaten</a>
                        <a class="collapse-item" href="http://localhost/kta-gerindra/kecamatan/index">Kecamatan</a>
                        <a class="collapse-item" href="http://localhost/kta-gerindra/desa/index">Desa</a>
                    </div>
                </div>
            </li>

 <!-- <li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-user"></i>
        <span>ANGGOTA</span></a>
</li> -->




<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    DATA ANGGOTA
</div>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="http://localhost/kta-gerindra/anggota/index/">
        <i class="fas fa-thin fa-plus"></i>
        <span>ANGGOTA</span></a>
</li>
<!-- Heading -->
<div class="sidebar-heading">
    LAPORAN
</div>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="http://localhost/kta-gerindra/anggota/printkta/">
        <i class="fas fa-thin fa-file"></i>
        <span>LAPORAN</span></a>
</li>
<!-- Heading -->
<div class="sidebar-heading">
    USER
</div>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-thin fa-file"></i>
        <span>DATA USER</span></a>
</li>



</ul>
<!-- End of Sidebar -->