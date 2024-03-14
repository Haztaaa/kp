       
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

        


        

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Data Diterima</h1>

                    
                    <?= $this->session->flashdata('message'); ?>

                    <div class="card shadow" >
                        <div class="card-header">
                            <a href="<?= base_url('admin/dashboard'); ?>" class="btn btn-primary">Kembali</a>
                        </div>
                    <div class="card-body">
                    <h5 class="card-title">Laporan Data Nama Usulan yang diterima </h5>
                     <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th >No</th>
                                            <th >Kecamatan</th>
                                            <th >Jenis Bantuan</th>
                                            <th >Tahun</th>
                                            <th >Nik</th>
                                            <th >Nama</th>
                                            <th>Pengusul</th>
                                            <th >Status</th>
                                            
                                        
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php  $i =1; ?>
                                    <?php foreach($data as $b) : ?>
                                        <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $b->kecamatan; ?></td>
                                        <td><?= $b->jenis_bantuan; ?></td>
                                        <td><?= $b->tahun; ?></td>
                                        <td><?= $b->nik; ?></td>
                                        <td><?= $b->nama_usulan;?></td>
                                        <td><?= $b->nama;?></td>
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
                            
                    

                </div>
                <!-- /.container-fluid  onclick="return confirm('Apakah Data Sudah sesuai?'); " -->

            </div>
            <!-- End of Main Content -->

           
     