<!-- Sidebar -->
<ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #8c0f0f;">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/dashboard')?>">
    <div class="sidebar-brand-icon justify-content-center ">
        
    </div>
    <div class="sidebar-brand-text mx-3 mt-3"><?php echo $this->session->userdata('nama'); ?><br>-Admin-</div>
    
</a>
<br>
<!-- Divider -->
<hr class="sidebar-divider ">

<!-- Nav Item - Dashboard -->

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/dashboard')?>">
    <i class="fas fa-house-user"  style="color: #ffffff;"></i>
        <span>Dasbor</span></a>
</li>

<?php if($this->session->userdata('role_id') == 1)
{ ?>

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/management')?>">
        <i class="fas  fa-fw fa-user "style="color: #ffffff;"></i>
        <span>Manajemen User</span></a>
</li>
    <?php } ?>

    <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsedata"
    aria-expanded="true" aria-controls="collapsedata">
        <i class="fas  fa-fw fa-user "style="color: #ffffff;"></i>
        <span>Master Data</span></a>
        <div id="collapsedata" class="collapse" aria-labelledby="headingdata" data-parent="#accordionSidebar">
                    <div class="bg-danger py-2 collapse-inner rounded">
                        <h6 class="collapse-header font-weight-bold text-light text-uppercase">Master Data</h6>
                        <a class="collapse-item font-weight-bold text-white text-uppercase" href="<?= base_url('admin/data_jbantuan')?>">Jenis Bantuan</a>
                        <a class="collapse-item font-weight-bold text-white text-uppercase" href="<?= base_url('admin/data_kecamatan')?>">Kecamatan</a>
                        <a class="collapse-item font-weight-bold text-white text-uppercase" href="<?= base_url('admin/tahun')?>">Tahun</a>
                        <a class="collapse-item font-weight-bold text-white text-uppercase" href="<?= base_url('admin/data_desa')?>">Desa</a>
                    </div>


                    <li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/penerima');?>">
    
        <i class="fas fa-fw fa-user"style="color: #ffffff;"></i>
        <span>Penerima</span></a>
</li>   


<li class="nav-item">
    <a class="nav-link" href="<?= base_url('auth/logout');?>">
    
        <i class="fas fa-sign-out-alt"style="color: #ffffff;"></i>
        <span>Keluar</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>