<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">



        <!-- Begin Page Content -->
        <div class="container-fluid">
            <br>
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Dasbor</h1>

            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total Data Usulan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <h3><?= $usulan ?></h3>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas  fa-fw fa-user fa-2x text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total Usulan Tahun Ini</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <h3><?= $tahun_ini ?></h3>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-fw fa-user fa-2x text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total Kecamatan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <h3><?= $kecamatan ?></h3>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-fw fa-user fa-2x text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total Jenis Bantuan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <h3><?= $jb ?></h3>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-fw fa-user fa-2x text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Data Belum Di Validasi
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-warining">Total Data Belum Di validasi</h5>
                            <p class="card-text"><i class="fas fa-fw fa-user fa-2x text-warning"></i> <?= $status ?> Data Usulan</p>
                            <a href="<?= base_url('admin/dashboard/validasi') ?>" class="btn btn-warning">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Usulan Diterima
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-success">Total Data Diterima</h5>
                            <p class="card-text"><i class="fas fa-fw fa-user fa-2x text-success"></i> <?= $status_terima ?> Data</p>
                            <a href="<?= base_url('admin/dashboard/viewterima') ?>" class="btn btn-success">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Usulan Ditolak
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Total Data Ditolak</h5>
                            <p class="card-text"><i class="fas fa-fw fa-user fa-2x text-danger"></i> <?= $status_tolak ?> Data</p>
                            <a href="<?= base_url('admin/dashboard/viewtolak') ?>" class="btn btn-danger">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <!-- <div class="card" >
                    <div class="card-body">
                    <h5 class="card-title">Laporan Data Nama Usulan Tahun </h5>
                    <div class="table-responsive">
                    <table class="table">
                        <thead class="table-bordeed">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tahun</th>
                            
                            
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($tahun as $t) : ?>
                            <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $t['tahun'] ?></td>
                            
                            
                            <td>
                                <a href="<?= base_url('admin/dashboard/laporan/') . $t['id']; ?>" class="btn btn-success">Lihat Laporan</a>
                                
                            </td>
                            </tr>
                            <?php $i++; ?>
                             <?php endforeach; ?>
                        </tbody>
                        </table>
                        </div>
                    </div>
                    </div> -->


        </div>
        <!-- /.container-fluid  onclick="return confirm('Apakah Data Sudah sesuai?'); " -->

    </div>
    <!-- End of Main Content -->