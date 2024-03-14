

        


        

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

                    
                

                    <div class="card shadow" >
                        <h5 class="card-header">Laporan Data Nama Usulan Tahun </h5>
                    <div class="card-body">
                    
                    <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="120%" cellspacing="0">
                        <thead>
                            <tr>
                            <th >No</th>
                                            <th >Kecamatan</th>
                                            <th>Desa</th>
                                            <th >Jenis Bantuan</th>
                            <th>Tahun</th>
                                            <th >Nik</th>
                                            <th >Nama</th>
                                            <th >Alamat</th>
                                            <th >Pekejaan</th>
                                            <th >Nomor Handphone</th>
                                           
                            </tr>
                        </thead>
                        <tbody>
                        
                        <?php  $i =1; ?>
                        <?php foreach($data as $b) : ?>
                            <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $b->kecamatan; ?></td>
                            <td><?= $b->desa; ?></td>
                            <td><?= $b->jenis_bantuan?></td>
                            <td><?= $b->tahun?></td>
                            <td><?= $b->nik;?></td>
                            <td><?= $b->nama_usulan;?></td>
                            <td><?= $b->alamat;?></td>
                            <td><?= $b->pekerjaan;?></td>
                            <td><?= $b->no_hp?></td>
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

           
     