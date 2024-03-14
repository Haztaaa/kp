       
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
        <div class="container-fluid">
<br>
<h1 class="h3 mb-4 text-gray-800">Ubah Data Desa</h1>

       
<div class="row ">
        <div class="col-lg-4 ml-2">

        <form action="<?= base_url('admin/data_desa/ubah/'.$data['id'])?>" method="post">
        <input type="hidden" name="id" value="<?= $data['id']?>">

        <div class="forms-group">
        <label for="role_id" class="form-label">Role</label>
            <select name="id_kecamatan" id="role_id" class="form-control">
            
          <?php foreach($kecamatan as $ur) :?>
            <?php if($ur['id'] == $data['id_kecamatan']) : ?>
            <option value="<?= $ur['id']; ?>"selected><?= $ur['kecamatan']; ?></option>
            <?php else : ?>
                <option value="<?= $ur['id']; ?>"><?= $ur['kecamatan']; ?></option>
            <?php endif ; ?>

          <?php endforeach;?>
          
          </select>
          </div>

        <div class="form-group-row">
        <label for="nik" class="col-sm-4 col-form-label">Nama Desa</label>
        <div class="col-sm-10">
            <input type="text" name="desa" class="form-control" id="jenis_bantuan" value="<?= $data['desa']?>">
            <?= form_error('desa','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        </div>
        <br>
        <div class="col-lg-8">
        <button type="submit" class="btn btn-primary ">Ubah</button>
        <a href="<?= base_url('admin/data_desa')?>" class="btn btn-primary ">Kembali</a>
        </div> 
        </form>
        


        </div>
        
        </div>

</div>
        
</div>


   
