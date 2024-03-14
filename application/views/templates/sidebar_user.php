<!-- Sidebar -->
<ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #8c0f0f;">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user/dashboard')?>">
    <div class="sidebar-brand-icon justify-content-center ">
        <img src="<?= base_url('assets/img/sosial.png'); ?>" class="mt-3" style="width: 90px;">
    </div>
    <div class="sidebar-brand-text mx-3 mt-3 text-white">Dinas Sosial </div>
</a>
<br>
<!-- Divider -->
<hr class="sidebar-divider ">

<!-- Nav Item - Dashboard -->

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('user/dashboard')?>">
    <i class="fas fa-house-user"  style="color: #ffffff;"></i>
        <span>Dasbor</span></a>
</li>

<?php if($this->session->userdata('role_id') == 1)
{ ?>

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/management')?>">
        <i class="fas  fa-fw fa-user "style="color: #570707;"></i>
        <span>Mangement User</span></a>
</li>
    <?php } ?>

    <?php if($this->session->userdata('role_id') == 1)
                        { ?>

                        
    <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsedata"
    aria-expanded="true" aria-controls="collapsedata">
        <i class="fas  fa-fw fa-user "style="color: #570707;"></i>
        <span>Master Data</span></a>
        <div id="collapsedata" class="collapse" aria-labelledby="headingdata" data-parent="#accordionSidebar">
                    <div class="bg-danger py-2 collapse-inner rounded">
                        <h6 class="collapse-header font-weight-bold text-light text-uppercase">Master Data</h6>
                        <a class="collapse-item font-weight-bold text-white text-uppercase" href="<?= base_url('admin/data_jbantuan')?>">Jenis Bantuan</a>
                        <a class="collapse-item font-weight-bold text-white text-uppercase" href="<?= base_url('admin/data_kecamatan')?>">Kecamatan</a>
                        <a class="collapse-item font-weight-bold text-white text-uppercase" href="<?= base_url('admin/tahun')?>">Tahun</a>
                    </div>
                    <?php } ?>

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('user/data_usulan')?>">
    <i class="fas fa-user-plus" style="color: #ffffff;"></i>
    <span>Pengusulan Data Bantuan</span></a>
</li>

<!-- <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo"
    aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas  fa-fw fa-user "style="color: #570707;"></i>
        <span>Penerima Bantuan</span></a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class=" py-2 collapse-inner rounded" style="background-color: #570707;">
                        <h6 class="collapse-header font-weight-bold text-light text-uppercase">Bantuan Pusat</h6>
                        <a class="collapse-item font-weight-bold text-white text-uppercase" href="<?= base_url('admin/penerima/pkh')?>">PKH</a>
                        <a class="collapse-item font-weight-bold text-white text-uppercase" href="<?= base_url('admin/penerima/bst')?>">BST</a>
                        <a class="collapse-item font-weight-bold text-white text-uppercase" href="<?= base_url('admin/penerima/bpnt')?>">BPNT</a>
                    </div>
                    <div class="bg-danger py-2 collapse-inner rounded">
                        <h6 class="collapse-header font-weight-bold text-light text-uppercase">Bantuan Daerah</h6>
                        <a class="collapse-item font-weight-bold text-white text-uppercase" href="<?= base_url('admin/penerima/rtlh')?>">RLTH</a>
                        <a class="collapse-item font-weight-bold text-white text-uppercase" href="<?= base_url('admin/penerima/kube')?>">KUBE</a>
                     
                    </div>
                </div>
                </li> -->
<?php if($this->session->userdata('role_id') == 2)
{ ?> 
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('user/penerima');?>">
    
        <i class="fas fa-fw fa-user"style="color: #ffffff;"></i>
        <span>Penerima</span></a>
</li>            

<li class="nav-item">
<a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseLaporan"
    aria-expanded="true" aria-controls="collapseLaporan">
        <i class="fas  fa-fw fa-file"style="color: #ffffff;"></i>
        <span>Laporan</span></a>
        <div id="collapseLaporan" class="collapse" aria-labelledby="headingLaporan" data-parent="#accordionSidebar">
                    <div class="py-2 collapse-inner rounded" style="background-color: #570707;">
                        <h6 class="collapse-header font-weight-bold text-light text-uppercase">Bantuan Pusat</h6>
                        <a class="collapse-item font-weight-bold text-white text-uppercase" href="<?= base_url('user/laporan/laporan')?>">Laporan Tahun</a>
                        <a class="collapse-item font-weight-bold text-white text-uppercase" href="<?= base_url('user/laporan/laporantol')?>">Laporan Ditolak</a>
                        <a class="collapse-item font-weight-bold text-white text-uppercase" href="<?= base_url('user/laporan/laporanter')?>">Laporan Diterima</a>
                    </div>
                </div>
</li>
<?php } ?>

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('auth/logout');?>">
    
        <i class="fas fa-sign-out-alt"style="color:#ffffff;"></i>
        <span>Keluar</span></a>
</li>
<!-- <li class="nav-item">
    <a class="nav-link" href="<?= base_url('_tes');?>">
    
        <i class="fas fa-sign-out-alt"style="color:#ffffff;"></i>
        <span>tes</span></a>
</li> -->

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">
<div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="<?= base_url('assets/img/sosial.png'); ?>" alt="...">
        <p class="text-center mb-2 text-dark"><strong>Dinas Sosial Kota Tomohon</strong> 2021</p>
       
</div>
<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>