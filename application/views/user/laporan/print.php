
        <div class="container-fluid">



    
        
        
           
        <div class="row" >
 
        <div class="col-md-3" style="text-align: right;"><img src="<?= base_url('assets/img/sosial.png'); ?>" style="width: 150px; "></div>

        <div class="col-md-6 ml-2">
        <h3 style="text-align:center ; color:black" class="text-uppercase">Dinas Sosial Kota Tomohon</h3>      
        <p style="text-align: center; color:black; font-style: italic; ">Jl.Perlombaan No. 98 Kel.Kakaskasen II Kec. Tomohon Utara</p>
        <p style="text-align: center; color:black; font-style: italic;">Email : dinsostomohon@gmail.com</p>
        <p style="text-align: center; color:black; font-style: italic;">Kode Pos : 95422</p>
        </div>
        </div>
            <hr class="" style="border: 1px solid black; border-radius:4px;">
            <h4 style="text-align: center; color:black" class="text-uppercase  ml-2"><b>Laporan Data Usulan Tahun <?= $tahun['tahun']?></b> </h4>
            
             <table class="table table-bordered">
                <thead >
                    <tr>
                        
                    <th >No</th>
                                            <th >Kecamatan</th>
                                            <th>Kelurahan</th>
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
                    <tr>
                    <?php  $i =1; ?>
                    <?php foreach($semua as $u) : ?>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $u['kecamatan']; ?> </td>
                    <td><?= $u['desa']; ?> </td>
                    <td><?= $u['jenis_bantuan']; ?> </td>
                    <td><?= $u['tahun']; ?> </td>
                    <td><?= $u['nik']; ?> </td>
                    <td><?= $u['nama_usulan']; ?></td> 
                    <td><?= $u['alamat']; ?></td> 
                    <td><?= $u['no_hp']; ?></td>   
                    <td><?= $u['pekerjaan']; ?></td>
                          
                    </tr>
                    <?php $i++;?>
                    <?php endforeach; ?>
                </tbody>
                </table>
                

    
    

</div>
        
</div>

   
