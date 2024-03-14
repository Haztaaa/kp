<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Page Heading -->


        

    
            
        <h1 class="h3 mb-4 text-gray-800">Pkh</h1>
        <?= $this->session->flashdata('message'); ?>
        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-gray">Data Pkh</h6>
                        </div>
                        <div class="card-body">
                        <div class="row">
          <div class="col-mb">           
          </div>
          <div class="col-">
            <a href="<?= base_url('admin/data_usulan/tambah')?>" class="btn btn-primary ml-3 mb-2" >Tambah Data</a>
            <a href="" class="btn btn-success ml-3 mb-2" >Import</a>
        </div>
            
          </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="120%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th >No</th>
                                            <th >Kecamatan</th>
                                            <th >Jenis Bantuan</th>
                                            <th >Tahun</th>
                                            <th >Nik</th>
                                            <th >Nama</th>
                                            <th >Alamat</th>
                                            <th >Pekejaan</th>
                                            <th >Status</th>
                                            <th >Nomor Handphone</th>
                                            <th >Aksi</th>
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
                                        <td><?= $b->nik; ?></td>
                                        <td><?= $b->nama;?></td>
                                        <td><?= $b->alamat;?></td>
                                        <td><?= $b->pekerjaan;?></td>
                                        <td>
                                            
                                            <?php
                                                if($b->status == 0)
                                                {
                                                    ?>
                                                        <span class="label label-warning">pending</span>
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
                                        <td><?= $b->no_hp;?></td>
                                        <td>
                                        <a href="<?= base_url(); ?>admin/data_usulan/ubah/<?= $b->id;?>"class="btn btn-success mb-3"><i class="fas fa-edit"></i></a>
                                        <a href="<?= base_url(); ?>admin/data_usulan/detail/<?= $b->id;?>"class="btn btn-success"><i class="fas fa-info"></i></a>
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
 

</div>
  

     