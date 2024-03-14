       
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
        <div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Data Kecamatan</h1>

       
<div class="row">
        <div class="col-lg-8">

        <form action="<?= base_url('admin/data_kecamatan/tambah')?>" method="post">

        <div class="form-group-row">
        <label for="nik" class="col-sm-2 col-form-label">Kecamatan</label>
        <div class="col-sm-10">
            <input type="text" name="kecamatan" class="form-control" id="kecamatan" placeholder="Masukan Kecamatan...">
            <?= form_error('nik','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        </div>
        <br>
        <div class="col-lg-8">
        <button type="submit" class="btn btn-primary ">Tambah</button>
        <a href="<?= base_url('admin/data_kecamatan')?>" class="btn btn-primary ">Kembali</a>
        </div> 
        </form>
        


        </div>
        
        </div>

</div>
        
</div>


   
