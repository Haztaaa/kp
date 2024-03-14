
        <div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Pkh</h1>
        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-gray">Data Pkh</h6>
                        </div>
                        <div class="card-body">
                        <div class="row">
          <div class="col-mb">           
          </div>
          <div class="col-">
            <a href="<?= base_url(''); ?>" class="btn btn-primary mb-2">Tambah Data</a></div>
          </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th >No</th>
                                            <th >Nik</th>
                                            <th >Nama</th>
                                            <th >Alamat</th>
                                            <th >Pekejaan</th>
                                            <th >Nomor Handphone</th>
                                            <th >Aksi</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php  $i =1; ?>
                                    <?php foreach($tes as $b) : ?>
                                        <tr>
                                        <th scope="row"><?= $i; ?></th>
                                            <td><?= $b['nik']?></td>
                                            <td><?= $b['nama']?></td>
                                            <td><?= $b['alamat']?></td>
                                            <td><?= $b['pekerjaan']?></td>
                                            <td><?= $b['no_hp']?></td>
                                            <td><a href=""class="btn btn-success"><i class="fas fa-edit"></i></a></td>
                                            
                                        </tr>
                                        <?php $i++;?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

</div>
        
</div>


   
