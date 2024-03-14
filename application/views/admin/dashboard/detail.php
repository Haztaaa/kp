<?php
date_default_timezone_set('Asia/Makassar');
$tahun_sekarang = date('Y');
?>       
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Halaman Detail </h1>
                    
                    <?= $this->session->flashdata('message'); ?>
                        <div class="col-lg-12">
                            
                    <div class="card shadow mb-4" >
                    
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-3">
                             <h4 style="color:black;"><?= $penerima['nama_usulan']?></h4>
                             </div>
                             <div class="col-lg-3">
                             <h4 class="ml-5 "style="color:black;"><?= $penerima['jenis_bantuan']?></h4>
                             </div>
                             <div class="col-lg-3">
                             <h4 class="ml-5 "style="color:black;"><?= $penerima['tahun']?></h4>
                             </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <div class="row">
                   
                        <div class="col-lg-6">
                            
                        <label for="nama" class="card-title text-uppercase font-weight-bold text-dark">Gambar Rumah</label>
                        
                    <img src="<?= base_url('assets/img/rumah/') . $penerima['gambar_rumah']?>" style="width:360px; height:240px;" class="card-img-top">
                            
                            
                        
                    
                   
                   

                    
                    <hr class="col-lg-8 ml-1" style="border: 1px solid black; border-radius:4px;">
                    <label for="nama" class="card-title text-uppercase font-weight-bold text-dark">Gambar Ktp</label>
                    <br>


                    <img src="<?= base_url('assets/img/rumah/') . $penerima['gambar_ktp']?>" style="width:360px; height:240px;" class="card-img-top">
                    <hr class="col-lg-8 ml-1" style="border: 1px solid black; border-radius:4px;">

                    <label for="nama" class="card-title text-uppercase font-weight-bold text-dark">Gambar KK</label>
                    <br>


                    <img src="<?= base_url('assets/img/rumah/') . $penerima['gambar_kk']?>" style="width:360px; height:240px;" class="card-img-top">
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

                    <label for="nama" class="card-title text-uppercase font-weight-bold text-dark">Penghasilan Bulanan</label>
                    <h5 class="card-text ml-2">Rp. <?= $penerima['penghasilan']?></h5>

                    <label for="nama" class="card-title text-uppercase font-weight-bold text-dark">Pengusul</label>
                    <h5 class="card-text ml-2"><?= $penerima['nama']?></h5>
                    <label for="nama" class="card-title text-uppercase font-weight-bold text-dark">Gambar Surat Keterangan Miskin</label>
                    <br>


                    <img src="<?= base_url('assets/img/rumah/') . $penerima['gambar_sk']?>" style="width:360px; height:240px;" class="card-img-top">
                    <hr class="col-lg-8 ml-1" style="border: 1px solid black; border-radius:4px;">

                    
                    </div>
                    
                    
                    </div>
                    
                    </div>
                    <div class="card-footer">
                        <div class="col ">
                            <div class="row">
                                <?php if($tahun_sekarang == $penerima['tahun']) : ?>
                    <form action="<?= base_url('admin/dashboard/terima/'. $penerima['id'])?>" method="post">
                    <input type="hidden" name="id" value="<?= $penerima['id']; ?>">
                    <input type="hidden" name="id_jbantuan" value="<?= $penerima['id_jbantuan']; ?>">
                    <input type="hidden" name="id_tahun" value="<?= $penerima['id_tahun']; ?>">
                    <input type="hidden" name="terima" id="terima" value="1" >
                    <input type="hidden" name="id_usulan" id="id_usulan" value="<?= $penerima['id']?>" >
                       
                        <button type="submit"  class="btn btn-success  ml-2" onclick="return confirm('Apakah Data Sudah Sesuai?');">Terima</button>
                       
                    

                        
                        
                    </form>
                    
                        <form action="<?= base_url('admin/dashboard/tolak/'. $penerima['id'])?>" method="post">
                        <input type="hidden" name="id" value="<?= $penerima['id']; ?>">
                        
                        
                        <input type="hidden" name="tolak" value=2 >
                        
                        <button type="button"  id="btn-hide" class="btn btn-danger  ml-2" data-toggle="modal" data-target="#exampleModal">Tolak </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambahkan Komentar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="form-group-row">
                                <label for="alamat" class="col-sm-3 col-form-label">Komentar</label>
                                <div class="col-sm-10">
                                <textarea name="komentar" class="form-control" id="alamat" placeholder="Masukan Alasan" rows="3"></textarea>
                          
                                </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                <button type="submit"  class="btn btn-danger  ml-2">Tolak</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </form>
                    <?php else : ?>
                        <span class="badge badge-warning">Pesan Ini Akan Muncul Jika Data yang di usulkan tidak sesuai dengan tahun sekarang</span>
                        <form action="<?= base_url('admin/dashboard/hapus')?>" method="post">
                        <input type="hidden" name="id"value="<?= $penerima['id']; ?>">

                        <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        <?php endif; ?>
                        

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

           
    