
        <div class="container-fluid" >

<h1 class="h3 mb-4 text-gray-800">Laporan Data Usulan</h1>

    <div class="card" >
    <div class="card-body" >
    <h5 class="card-title col-md-2">Cari </h5>
    <div class="row" id="result">
    <div class="col">
    <form class="form-horizontal row" action="" method="GET" id="FormLaporan">
    <div class="form-group col-md-2 col-sm-12">
            <select class="form-control" name="id_tahun" id="id_tahun">
                
            <option value="">Pilih Tahun</option>
          <?php foreach($tahun as $t) :?>
            <option value="<?= $t['id']; ?>"><?= $t['tahun']; ?></option>
          <?php endforeach;?>
               
            </select>   
         </div>
         <button type="submit" name="cari"  class="btn btn-primary mb-4">Cari</button>
         <button type="button" value="print" onclick="PrintDiv();" class="btn btn-primary btn-icon-split mb-4 ml-2"><span class="icon text-white-50">
        <i class="fa fa-print"></i>
                </span>
                <span class="text">Cetak</span></button>
         
         </form>
         </div>
         
            </div>
            <hr class="" style="border: 1px solid black; border-radius:4px;">
            <div id="divToPrint">
                <div class="row">
                    <div class="col-md-3" style="text-align: right;"><img src="<?= base_url('assets/img/sosial.png'); ?>" style="width: 150px; "></div>
                    <div class="col-sm-10 ml-2">
                    <h3 style="text-align:center ; color:black" class="text-uppercase">Dinas Sosial Kota Tomohon</h3>      
                    <p style="text-align: center; color:black; font-style: italic; ">Jl.Perlombaan No. 98 Kel.Kakaskasen II Kec. Tomohon Utara</p>
                    <p style="text-align: center; color:black; font-style: italic;">Email : dinsostomohon@gmail.com</p>
                    <p style="text-align: center; color:black; font-style: italic;">Kode Pos : 95422</p>
                    </div>
            </div>
            <hr class="" style="border: 1px solid black; border-radius:4px;">
            <h4 style="text-align: center; color:black" class="text-uppercase  ml-2">Laporan Data Pengusulan Yang Diterima Tahun <?php 
            if($tahun1 == null)
            { 
                ?>
                <span></span>

                <?php
            } else 
            { ?>
                    <span><?=$tahun1 ['tahun'] ?></span>
                    <?php
                    
            } 
            ?>

            </h4>
            
            <div class="table-responsive mt-4" >
                <table class="table table-bordered">
                    
                        
                <thead >
                    <tr>
                        
                    <th scope="col ">No</th>
                    <th scope="col">Kecamatan</th>
                    <th scope="col">Desa</th>
                    <th>Tahun</th>
                    <th scope="col">Jenis Bantuan</th>
                    <th scope="col">Nik</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No.Hp</th>
                    <th scope="col">Pekerjaan</th>
                    <th>Status</th>
                    </tr>
                   
                </thead>
                <tbody>
                    <tr>
                    <?php  $i =1; ?>
                    <?php foreach($semua as $u) : ?>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $u['kecamatan']; ?> </td>
                    <td><?= $u['desa']; ?> </td>
                    <td><?= $u['tahun']; ?> </td>
                    <td><?= $u['jenis_bantuan']; ?> </td>
                    <td><?= $u['nik']; ?> </td>
                    <td><?= $u['nama_usulan']; ?></td> 
                    <td><?= $u['alamat']; ?></td> 
                    <td><?= $u['no_hp']; ?></td>   
                    <td><?= $u['pekerjaan']; ?></td>
                    <td>
                    <?php
                                                if($u['status'] == 0)
                                                {
                                                    ?>
                                                        <span class="badge badge-warning">pending</span>
                                                    <?php  
                                                }
                                                else if($u['status'] == 1)
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
                <p style="text-align: right; color:black;">Tanggal <?php 
            date_default_timezone_set('Asia/Makassar');
            echo date("d-m-Y");?></p>
                </div>
    </div>
    </div>

</div>
        
</div>


   
