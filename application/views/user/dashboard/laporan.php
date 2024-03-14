

        


        

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

                    
                

                    <div class="card" >
                    <div class="card-body">
                    <h5 class="card-title">Laporan Data Nama Usulan Tahun </h5>
                    <div class="table-responsive">
                    <table class="table">
                        <thead class="table-bordeed">
                            <tr>
                            <th >No</th>
                                            <th >Kecamatan</th>
                                            <th >Jenis Bantuan</th>
                    
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
                            <td><?= $b->jenis_bantuan?></td>
                            <td><?= $b->nik;?></td>
                            <td><?= $b->nama;?></td>
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

           
     