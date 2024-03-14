       
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Halaman Detail </h1>
                    
                        
                        <div class="col-lg-12">
                            
                    <div class="card shadow mb-4" >
                    
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-5">
                             <h4 style="color:black;"><?= $penerima['nama_usulan']?></h4>
                             </div>
                             <div class="col-lg-5">
                             <h4 class="ml-5 "style="color:black;"><?= $penerima['jenis_bantuan']?></h4>
                             </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <div class="row">
                   
                        <div class="col-lg-6">
                            

                        
                    <img src="<?= base_url('assets/img/rumah/') . $penerima['gambar_rumah']?>" style="width:360px; height:240px;" class="card-img-top">
                            
                            
                        

                   
                   

                    
                    <br>
                    <hr class="col-lg-8 ml-1" style="border: 1px solid black; border-radius:4px;">
                   
                    <div class="ml-2">
                    <label for="nama" class="card-title text-uppercase font-weight-bold text-dark">Kecamatan</label>
                    <h5 class="card-title"><?= $penerima['kecamatan']?></h5>
                    </div>
                    <div class="ml-2">
                    <label for="nama" class="card-title text-uppercase font-weight-bold text-dark">Desa</label>
                    <h5 class="card-title"><?= $penerima['desa']?></h5>
                    </div>
                    
                    </div>

                    <div class="col lg-6">
                    <label for="nama" class="card-title text-uppercase font-weight-bold text-dark">Nik</label>
                    <h5 class="card-title"><?= $penerima['nik']?></h5>

                    
                
                    <label for="nama" class="card-title text-uppercase font-weight-bold text-dark">Nama</label>
                    <h5 class="card-title"><?= $penerima['nama_usulan']?></h5>

                   <label for="nama" class="card-title text-uppercase font-weight-bold text-dark">Alamat Lengkap</label>
                    <h5 class="card-text ml-2"><?= $penerima['alamat']?></h5>

                    <label for="nama" class="card-title text-uppercase  font-weight-bold text-dark">Nomor Handphone</label>
                    <h5 class="card-text ml-2"><?= $penerima['no_hp']?></h5>

                    <label for="nama" class="card-title text-uppercase font-weight-bold text-dark">Pekerjaan</label>
                    <h5 class="card-text ml-2"><?= $penerima['pekerjaan']?></h5>

                    <label for="nama" class="card-title text-uppercase font-weight-bold text-dark">Pengusul</label>
                    <h5 class="card-text ml-2"><?= $penerima['nama']?></h5>
                    </div>
                    
                    
                    </div>
                    
                    </div>
                    <div class="card-footer">
                        <div class="col ">
                            <div class="row">
                    <form action="<?= base_url('admin/dashboard/terima/'. $penerima['id'])?>" method="post">
                    <input type="hidden" name="id" value="<?= $penerima['id']; ?>">
                    <input type="hidden" name="terima" id="terima" value="1" >
                    <input type="hidden" name="id_usulan" id="id_usulan" value="<?= $penerima['id']?>" >
                       
                        <button type="submit"  class="btn btn-success  ml-2" onclick="return confirm('Apakah Data Sudah Sesuai?');">Terima</button>
                       
                    </form>
                    
                        <form action="<?= base_url('admin/dashboard/tolak/'. $penerima['id'])?>" method="post">
                        <input type="hidden" name="id" value="<?= $penerima['id']; ?>">
                    
                        <input type="hidden" name="tolak" value=2 >
                        <button type="submit"  class="btn btn-danger  ml-2" onclick="return confirm('Anda Yakin?');">Tolak</button>
                        </form>
                        <a href="<?= base_url('admin/dashboard/validasi')?>" class="btn btn-primary float-right ml-2">Kembali</a>
                        </div>
                        </div>
                    
                    </div>
                    </div>
                    
                   
                    </div>
                </div>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           
     