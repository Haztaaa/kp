
        <div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Laporan Data Usulan</h1>

    <div class="card" >
    <div class="card-body" >
    <h5 class="card-title col-md-2">Laporan</h5>
    <a href="<?= base_url('tes/tambah'); ?>" class="btn btn-primary ">Tambah</a>
    
            <h1 align="center">Laporan Aktif Dan Tidak Aktif </h1>
            <div class="table-responsive">
             <table class="table">
                <thead class="table-hover-table">
                    <tr>
                        
                    <th scope="col ">No</th>
                    <th scope="col">Nama Buku</th>
                    <th scope="col">Nama Peminjam</th>
                    <th>Jumlah</th>
                    <th>Jumlah Kembali</th>
                    
                    <th>Status</th>
                    <th>Aksi</th>

                   
                    </tr>
                   
                </thead>
                <tbody>
                    <tr>
                    <?php  $i =1; ?>
                    <?php foreach($semua as $u) : ?>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $u['nama_buku']; ?> </td>
                    <td><?= $u['nama']; ?> </td>
                    <td><?= $u['jumlah']; ?> </td>
                    <td><?= $u['jumlah_kembali']; ?> </td>
                    <td>                 
                        <?php 
                            if($u['status'] == 0) 
                            {  
                        ?>
                            <span class="badge badge-success">Aktif</span> 
                        <?php 
                            }
                            else
                            {
                        ?>             
                            <span class="badge badge-danger">Non-Aktif</span> 
                        <?php 
                            }
                        ?>    
                    </td>
                    

                          <td><a href="<?= base_url('_tes/detail/'. $u['id']); ?>"class="btn btn-success "><i class="fas fa-edit"></i></a>
                              <a href="<?= base_url('_tes/ubah/'. $u['id']); ?>" class="btn btn-primary ">kembalikan</a></td>
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


   
