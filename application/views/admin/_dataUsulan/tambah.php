<div class="container-fluid">

                    <!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Tambah</h1>


    <div class="row">
        <div class="col-lg-8">

        <?php echo form_open_multipart('admin/data_usulan/tambah'); ?>

        <div class="form-group-row">
        <label for="jenis_bantuan" class="col-sm-5 col-form-label">Kecamatan</label>
        <div class="col-sm-10">
          <select name="id_kecamatan" id="id_kecamatan" class="form-control">
          
          <option value="">Pilih Kecamatan</option>
          <?php foreach($kecamatan as $k) :?>
            <option value="<?= $k['id']; ?>"><?= $k['kecamatan']; ?></option>
          <?php endforeach;?>
         
          </select>
          </div>
          </div>

        <div class="form-group-row">
        <label for="jenis_bantuan" class="col-sm-5 col-form-label">Jenis Bantuan</label>
        <div class="col-sm-10">
          <select name="id_jbantuan" id="id_jbantuan" class="form-control">
          
          <option value="">Pilih Bantuan</option>
          <?php foreach($jenis_bantuan as $jb) :?>
            <option value="<?= $jb['id']; ?>"><?= $jb['jenis_bantuan']; ?></option>
          <?php endforeach;?>
         
          </select>
          </div>
          </div>

          <div class="form-group-row">
        <label for="jenis_bantuan" class="col-sm-5 col-form-label">Pilih Tahun</label>
        <div class="col-sm-10">
          <select name="id_tahun" id="id_tahun" class="form-control">
          
          <option value="">Pilih Tahun</option>
          <?php foreach($tahun as $t) :?>
            <option value="<?= $t['id']; ?>"><?= $t['tahun']; ?></option>
          <?php endforeach;?>
         
          </select>
          </div>
          </div>

        <div class="form-group-row">
        <label for="nik" class="col-sm-2 col-form-label">Nik</label>
        <div class="col-sm-10">
            <input type="text" name="nik" class="form-control" id="nik" placeholder="Nik">
            <?= form_error('nik','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        </div>
        
        <div class="form-group-row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
            <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        </div>
        <div class="form-group-row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
            <?= form_error('alamat','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        </div>
        <div class="form-group-row">
        <label for="no_hp" class="col-sm-5 col-form-label">Nomor Handphone</label>
        <div class="col-sm-10">
            <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="Nomor Handphone">
            <?= form_error('no_hp','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        </div>

        <div class="form-group-row">
        <label for="pekerjaan" class="col-sm-5 col-form-label">Pekerjaan</label>
        <div class="col-sm-10">
            <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan">
            <?= form_error('pekerjaan','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        </div>

        


        <div class="form-group-row"> 
        <label for="nama" class="col-sm-5 col-form-label">Gambar Rumah</label>
            <div class="col-sm-10">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="gambar_rumah" name="gambar_rumah">
            
            <label class="custom-file-label" for="gambar_rumah">Pilih Gambar</label>
            </div>
            </div>
        </div>

        
        <br>
        <div class="col-lg-8">
        <button type="submit" class="btn btn-primary ">Tambah</button>
        <a href="<?= base_url('user/data_usulan')?>" class="btn btn-primary ">Kembali</a>
        </div>   


        </form>
        </div>
    </div>

</div>
</div>