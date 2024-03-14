
        <div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Laporan Data Usulan</h1>

    <div class="card" id="result">
    <div class="card-body" >
    <h5 class="card-title col-md-2">Laporan</h5>
    <div class="row">
    <div class="col">
    <form class="form-horizontal row" action="" id="FormLaporan">
    <div class="form-group col-md-2 col-sm-12">
            <select class="form-control" id="tahun">
               <?php for ($i = 2020; $i <= 2035; $i++) { ?>
                  <option value="<?=$i;?>" >
                    <?=$i;?>
                  </option>
               <?php } ?>
            </select>   
         </div>
         <button type="submit" name="Submit" class="btn btn-primary mb-4">Submit</button>
         </form>
         </div>
         <div class="col-">
         <i class="fas fa-print"></i>
            <a href="<?= base_url('barat/tambah'); ?>" class="btn btn-primary ">Print</a></div>
            </div>
    <table class="table">
                <thead class="table-dark">
                    <tr>
                        
                    <th scope="col ">No</th>
                    <th scope="col">Nik</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No.Hp</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Jenis Bantuan</th>
                    </tr>
                   
                </thead>
                <tbody>
                    <tr>
                    <?php foreach($usulan as $u) : ?>
                    <th scope="row"><?= ++$start; ?></th>
                    <td><?= $u['nik']; ?> </td>
                    <td><?= $u['nama']; ?></td> 
                    <td><?= $u['alamat']; ?></td> 
                    <td><?= $u['no_hp']; ?></td>   
                    <td><?= $u['pekerjaan']; ?></td>
                    <td><?= $u['jenis_bantuan']; ?></td>         
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>

    </div>
    </div>

</div>
        
</div>


   
