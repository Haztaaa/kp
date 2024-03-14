       
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
        <div class="container-fluid">
<br>
<h1 class="h3 mb-4 text-gray-800">Data Jenis Bantuan</h1>

<?= $this->session->flashdata('message'); ?>
        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-gray">Data Jenis Bantuan (Setiap Tahun Harus Menambahkan Jenis Bantuan Yang Baru)</h6>
                        </div>
                        <div class="card-body">
                        <div class="row">
          <div class="col-mb">           
          </div>
          <div class="col-">
            <a href="<?= base_url('admin/data_jbantuan/tambah')?>" class="btn btn-primary ml-3" >Tambah Data</a>
            
        </div>
            
          </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th >No</th>
                                            <th >Jenis Bantuan</th>
                                            <th>Kuota</th>
                                            <th>Tahun</th>
                                            <th >Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php  $i =1; ?>
                                    <?php foreach($jenis_bantuan as $jb) : ?>
                                        <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $jb['jenis_bantuan']?></td>
                                        <td><?= $jb['kuota']?> Penerima </td>
                                        <td><?= $jb['tahun_jb']?></td>
                                        <td><a href="<?= base_url('admin/data_jbantuan/ubah/'.$jb['id'])?>"class="btn btn-success mb-3"><i class="fas fa-edit"></i></a></td> 
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


   
