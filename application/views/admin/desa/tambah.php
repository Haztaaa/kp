       
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
        <div class="container-fluid">
<br>
<h1 class="h3 mb-4 text-gray-800">Tambah data Desa</h1>

       
<div class="row ">
        <div class="col-lg-4 ml-2">

        <form action="<?= base_url('admin/data_desa/tambah')?>" method="post">
        
        <div class="form-group ">
          <select name="id_kecamatan" id="role_id" class="form-control">

          <option value="">Pilih Kecamatan</option>
          <?php foreach($kecamatan as $ur) :?>
            <option value="<?= $ur['id']; ?>"><?= $ur['kecamatan']; ?></option>
          <?php endforeach;?>
          </select>
          </div>

        <div class="form-group-row">
        <label for="nik" class="col-sm-4 col-form-label">Nama Desa</label>
        <div class="col-sm-10">
            <input type="text" name="desa" class="form-control" id="jenis_bantuan" placeholder="Masukan Nama Desa">
            <?= form_error('desa','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        </div>
        <br>
        <div class="col-lg-8">
        <button type="submit" class="btn btn-primary ">Tambah</button>
        <a href="<?= base_url('admin/data_desa')?>" class="btn btn-primary ">Kembali</a>
        </div> 
        </form>
        


        </div>
        
        </div>

</div>
        
</div>


   
