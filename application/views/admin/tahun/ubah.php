       
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
        <div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Ubah Data Tahun</h1>

       
<div class="row">
        <div class="col-lg-8">

        <form action="<?= base_url('admin/tahun/ubah/'.$data['id'])?>" method="post">
        <input type="hidden" name="id" value="<?= $data['id']?>">

        <div class="form-group-row">
        <label for="nik" class="col-sm-3 col-form-label">Tahun</label>
        <div class="col-sm-10">
            <input type="text" name="tahun" class="form-control" value="<?= $data['tahun']?>">
            <?= form_error('tahun','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        </div>
        <br>
        <div class="col-lg-8">
        <button type="submit" class="btn btn-primary ">Ubah</button>
        <a href="<?= base_url('admin/tahun')?>" class="btn btn-primary ">Kembali</a>
        </div> 
        </form>
        


        </div>
        
        </div>

</div>
        
</div>


   
