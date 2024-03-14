   
   <?php date_default_timezone_set('Asia/Makassar');
        $tahun_sekarang = date('Y');
   ?>

<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
        <div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Tambah Data Jenis Bantuan</h1>

       
<div class="row">
        <div class="col-lg-8">

        <form action="<?= base_url('admin/data_jbantuan/tambah')?>" method="post">

        <div class="form-group-row">
        <label for="nik" class="col-sm-3 col-form-label">Jenis Bantuan</label>
        <div class="col-sm-10">
            <input type="text" name="jenis_bantuan" class="form-control" id="jenis_bantuan" placeholder="Masukan Jenis Bantuan...">
            <?= form_error('jenis_bantuan','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        </div>
        <div class="form-group-row">
        <label for="nik" class="col-sm-3 col-form-label">Kuota Penerima</label>
        <div class="col-sm-10">
            <input type="text" name="kuota" class="form-control" id="jenis_bantuan" placeholder="Masukan Kuota Penerima...">
           <input type="hidden" name="tahun" value="<?= $tahun_sekarang ?>">
            <?= form_error('jenis_bantuan','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        </div>
        <br>
        <div class="col-lg-8">
        <button type="submit" class="btn btn-primary ">Tambah</button>
        <a href="<?= base_url('admin/data_jbantuan')?>" class="btn btn-primary ">Kembali</a>
        </div> 
        </form>
        


        </div>
        
        </div>

</div>
        
</div>


   
