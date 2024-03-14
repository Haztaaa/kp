
        <div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Pkh</h1>
<?= $this->session->flashdata('message'); ?>
        <div class="card shadow mb-4">
                        <div class="card-header py-3"> 
                            <?= form_open_multipart('admin/penerima/pkh/import')?>
                            
                            <div class="row">
                            <div class="col-lg-3 ">
                            <input type="file" class="form-control-file mb-2 ml-8" id="import" name="import" accept=".xlsx,.xls">


                            <button type="submit" class="btn btn-success">Import</button>
                            
                            </div>
                        </div>
                        <?= form_close(); ?>
                        </div>
                        <div class="card-body">

                        <div class="row">
          <div class="col-mb">    
          <a href="<?= base_url(''); ?>" class="btn btn-primary mb-2 ml-2">Tambah Data</a>    
          <a href="<?= base_url('admin/penerima/pkh/export'); ?>" class="btn btn-success mb-2 ml-2">Export</a>
          </div>
         
          </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th >No</th>
                                            <th >Jenis Bantuan</th>
                                            <th >Kecamatan</th>
                                            <th >Nik</th>
                                            <th >Nama</th>
                                            <th >Pekejaan</th>
                                         <!-- /.   <th>Status</th> -->
                                            <th >Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  $i =1; ?>
                                    <?php foreach($penerima as $p) : ?>
                                    <tr>
                                        <th scope="row"><?= $i;?></th>
                                            <td><?= $p['jenis_bantuan']?></td>
                                            <td><?= $p['kecamatan']?></td>
                                            <td><?= $p['nik']?></td>
                                            <td><?= $p['nama_usulan']?></td>
                                            <td><?= $p['pekerjaan']?></td>
                                            <!-- /. <td><span class="badge badge-success">menerima</span></td>  -->
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


   
