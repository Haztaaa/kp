<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Page Heading -->


        <h1 class="h3 mb-4 text-gray-800">Data Usulan Kecamatan Tomohon Barat</h1>
        

        <?= $this->session->flashdata('message'); ?>
    <div class="row">


        <div class="col">
        

        
        <div class="card" >
            <div class="card-body">
             
            <h5 class="card-title">Tomohon Barat</h5>
             
             <div class="row">
          <div class="col-md-4">
            <form action="<?= base_url('barat')?>" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Cari" name="keyword" autocomplete="off">
              <div class="input-group-append">
                <input class="btn btn-dark" type="submit" name="submit">
                
              </div>
              </div>
            </form>
           
          </div>
          <div class="col-">
            <a href="<?= base_url('barat/tambah'); ?>" class="btn btn-primary mb-2">Tambah Data</a></div>
          </div>
        
        <table class="table">
        
  <thead class="table-dark">
    <tr>
      <th scope="col ">No</th>
      <th scope="col">Nik</th>
      <th scope="col">Tahun</th>
      <th scope="col">Nama</th>
      <th scope="col">Kecamatan</th>
      <th scope="col">Alamat</th>
      <th scope="col">No.Hp</th>
      <th scope="col">Pekerjaan</th>
      
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  
    <?php foreach($penerima as $b) : ?>
    <tr>
      <th scope="row"><?= ++$start; ?></th>
      <td><?= $b['nik']; ?></td>
      <td><?= $b['tahun']; ?></td>
      <td><?= $b['nama']; ?></td>
      <td>ww</td>
      <td> <?= $b['alamat']; ?></td>
      <td ><?= $b['no_hp']; ?></td>
      <td><?= $b['pekerjaan']; ?></td>
     
      <td>
      <a href="<?= base_url(); ?>barat/ubah/<?= $b['id']?>" class="btn btn-primary ">Ubah</a>
        <a href="<?= base_url(); ?>barat/detail/<?= $b['id']?>" class="btn btn-success ">Detail</a>
      

    </td>
    </tr>
    
    <?php endforeach; ?>
    
  </tbody>
</table>
  <?= $this->pagination->create_links(); ?>
</div>
</div>
        </div>


    </div>




</div>
 

</div>
  
            
     