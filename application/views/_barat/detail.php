
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Halaman Detail data usulan</h1>

                    <div class="card" >
                    <div class="card-body">
                    
                   
                        <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/rumah/') . $penerima['gambar_rumah']?>" style="width:360px;">
                            </div>
                            <div class="col-sm-9">
                            </div>
                        </div>
                        </div>

                    <div class="col">
                    <label for="nama" class="col-sm-3 col-form-label">Nik</label>
                    <h5 class="card-title"><?= $penerima['nik']?></h5>

                    <label for="nama" class="col-sm-3 col-form-label">Tahun</label>
                    <h5 class="card-title"><?= $penerima['tahun']?></h5>

                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                    <h5 class="card-title"><?= $penerima['nama']?></h5>

                    <label for="nama" class="col-sm-3 col-form-label">Alamat</label>
                    <h5 class="card-title"><?= $penerima['alamat']?></h5>

                    <label for="nama" class="col-sm-3 col-form-label">Nomor Handphone</label>
                    <h5 class="card-title"><?= $penerima['no_hp']?></h5>

                    <label for="nama" class="col-sm-3 col-form-label">Pekerjaan</label>
                    <h5 class="card-title"><?= $penerima['pekerjaan']?></h5>

                    <label for="nama" class="row-lg-3 col-form-label">Nama</label>
                    <h5 class="card-title"><?= $penerima['nama']?></h5>

                    </div>
                    
                    </div>
                    </div>

                <a href="<?= base_url('barat')?>" class="btn btn-primary ">Kembali</a>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           
     