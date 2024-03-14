       
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
        <div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Tambah Data Tahun</h1>

       
<div class="row">
        <div class="col-lg-8">

        <form action="<?= base_url('admin/tahun/tambah')?>" method="post">

        <div class="form-group-row">
        <label for="nik" class="col-sm-2 col-form-label">Tahun</label>
        <div class="col-sm-10">
            <input type="text" name="tahun" class="form-control" id="tahun" placeholder="Masukan Tahun...">
            <?= form_error('tahun','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        </div>
        <br>
        <div class="col-lg-8">
        <button type="submit" class="btn btn-primary ">Tambah</button>
        <a href="<?= base_url('admin/tahun')?>" class="btn btn-primary ">Kembali</a>
        </div> 
        </form>
        


        </div>
        
        </div>

</div>
        
</div>


   
