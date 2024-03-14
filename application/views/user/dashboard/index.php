

        


        

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                   
                    <div class="row">
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-dark">Total Data Yang Di Ajukan</h6>
                                    <div class="dropdown no-arrow">                              
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <h5 class="text-dark">Total Usulan Oleh Anda Sebanyak <b class="text-info"><?= $tuser; ?></b> Data</h5>
                                    <div class="chart-pie pt-4 pb-2">
                                        
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-warning"></i> Pending
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Diterima
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-danger"></i> Ditolak
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">

                            <!-- Area Chart -->
                            <!-- <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                                </div>
                                <div class="card-body">
                                <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                               Nama Belum Di Terima</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fw fa-user fa-2x text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    
                                </div>
                            </div> -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-dark">Tentang Anda</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col-lg-5">
                                        <img 
                                            src="<?= base_url('assets/'); ?>img/undraw_personal_info_0okl.png" style="width: 200px;">
                                            </div>
                                        
                                        <div class="col-lg-6">
                                        <label for="nama" class="card-title text-uppercase font-weight-bold text-dark">Nama</label>
                                        <h5 class="card-text ml-2"><?= $this->session->userdata('nama'); ?></h5>
                                       

                                        
                                        </div>
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card shadow" >
                    <div class="card-header text-dark">
                    <h6 class="m-0 font-weight-bold text-dark">Pengusulan Anda</h6>
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">Nama - Nama Yang telah di ajukan Oleh Anda</h5>
                    <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th >No</th>
                                            <th >Kecamatan</th>
                                            <th >Jenis Bantuan</th>
                                            <th >Tahun</th>
                                           
                                            <th >Nama</th>
                                           
                                            <th>Komentar</th>
                                            <th >Status</th>
                                           
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php  $i =1; ?>
                                    <?php foreach($total as $b) : ?>
                                        <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $b->kecamatan; ?></td>
                                        <td><?= $b->jenis_bantuan; ?></td>
                                        <td><?= $b->tahun; ?></td>
                                        
                                        <td><?= $b->nama_usulan;?></td>
                                        <td><?= $b->komentar; ?></td>
                                        
                                        
                                        <td>
                                            
                                            <?php
                                                if($b->status == 0)
                                                {
                                                    ?>
                                                        <span class="badge badge-warning">pending</span>
                                                    <?php  
                                                }
                                                else if($b->status == 1)
                                                {
                                                    ?>
                                                        <span class="badge badge-success">Diterima</span>
                                                    <?php  
                                                  
                                                }
                                                else
                                                {
                                                    ?>
                                                        <span class="badge badge-danger">Ditolak</span>
                                                    <?php  
                                                }
                                            ?>
                                        </td>
                                        
                                       
                                        </tr>
                                        <?php $i++;?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                    </div>
                            <br>
                   

                </div>
                <!-- /.container-fluid  onclick="return confirm('Apakah Data Sudah sesuai?'); " -->

            </div>
            <!-- End of Main Content -->

           
     