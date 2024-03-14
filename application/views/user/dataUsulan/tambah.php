<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Tambah</h1>
  <h5 style="color: red;">* Jika Data pernah yang pernah ditambahkan ditolak maka data</h5>
  <h5 style="color: red;" class="text">tersebut bisa ditambahkan </h5>

  <div class="row">
    <div class="col-lg-8">
      <?= $this->session->flashdata('message'); ?>
      <?php echo form_open_multipart('user/data_usulan/tambah', 'id="myForm"'); ?>

      <div class="form-group-row">
        <label for="jenis_bantuan" class="col-sm-5 col-form-label">Kecamatan</label>
        <div class="col-sm-10">
          <select name="id_kecamatan" id="id_kecamatan" class="form-control" required>

            <option value="">Pilih Kecamatan</option>
            <?php foreach ($kecamatan as $k) : ?>
              <option value="<?= $k['id']; ?>"><?= $k['kecamatan']; ?></option>
            <?php endforeach; ?>

          </select>
        </div>
      </div>

      <div class="form-group-row">
        <label for="jenis_bantuan" class="col-sm-5 col-form-label">Kelurahan</label>
        <div class="col-sm-10">
          <select name="desa" id="desa" class="form-control" required>

            <option value="">Pilih Desa</option>


          </select>
        </div>
      </div>

      <div class="form-group-row">
        <label for="jenis_bantuan" class="col-sm-7 col-form-label">Jenis Bantuan <b style="color: red;">(Jika Jenis Bantuan Tidak Muncul, Maka tambahkan jenis bantuan yang baru)</b></label>
        <div class="col-sm-10">
          <select name="id_jbantuan" id="id_jbantuan" class="form-control" required>

            <option value="">Pilih Bantuan</option>
            <?php foreach ($jenis_bantuan as $jb) : ?>
              <option value="<?= $jb['id']; ?>"><?= $jb['jenis_bantuan']; ?></option>
            <?php endforeach; ?>

          </select>
        </div>
      </div>

      <div class="form-group-row">
        <label for="jenis_bantuan" class="col-sm-5 col-form-label">Pilih Tahun</label>
        <div class="col-sm-10">
          <select name="id_tahun" id="id_tahun" class="form-control" required>

            <option value="">Pilih Tahun</option>
            <?php foreach ($tahun as $t) : ?>
              <option value="<?= $t['id']; ?>"><?= $t['tahun']; ?></option>
            <?php endforeach; ?>

          </select>
        </div>
      </div>

      <div class="form-group-row">
        <label for="nik" class="col-sm-2 col-form-label">Nik</label>
        <div class="col-sm-10">
          <input type="text" name="nik" class="form-control" id="nik" maxlength="16" onkeypress="return hanyaAngka(event)" placeholder="Nik (16 Angka)">
          <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
          <div class="text-danger" id="show"></div>
        </div>
      </div>

      <div class="form-group-row">
        <label for="nama_usulan" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" name="nama_usulan" onkeypress="return /^[a-zA-Z() ]+$/i.test(event.key)" class="form-control" id="nama_usulan" placeholder="Nama">
          <?= form_error('nama_usulan', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <div class="form-group-row">
        <label for="alamat" class="col-sm-3 col-form-label">Alamat Lengkap</label>
        <div class="col-sm-10">
          <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat Lengkap" rows="3"></textarea>

          <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <div class="form-group-row">
        <label for="no_hp" class="col-sm-5 col-form-label">Nomor Handphone</label>
        <div class="col-sm-10">
          <input type="text" name="no_hp" onkeydown="return hanyaAngka(event)" class="form-control" id="no_hp" maxlength="12" placeholder="Nomor Handphone">
          <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>

      <div class="form-group-row">
        <label for="pekerjaan" class="col-sm-5 col-form-label">Pekerjaan</label>
        <div class="col-sm-10">
          <input type="text" name="pekerjaan" onkeypress="return /^[a-zA-Z() ]+$/i.test(event.key)" class="form-control" id="pekerjaan" placeholder="Pekerjaan">
          <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <div class="form-group-row">
        <label for="pekerjaan" class="col-sm-5 col-form-label">Penghasilan (Bulanan)</label>
        <div class="col-sm-10">
          <input type="text" name="penghasilan" class="form-control" id="pekerjaan" placeholder="Masukan Penghasilan..">
          <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>

      <input type="hidden" name="id_user" value="<?= $user['id'] ?>">
      <input type="hidden" name="status" value="2">


      <div class="form-group-row">
        <label for="nama" class="col-sm-5 col-form-label">Gambar Rumah <b>(maks 5mb)</b></label>
        <div class="col-sm-10">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="gambar_rumah" name="gambar_rumah" accept=".png,.jpg,.jpeg">

            <label class="custom-file-label" for="gambar_rumah">Pilih Gambar</label>
          </div>
        </div>
      </div>

      <div class="form-group-row">
        <label for="nama" class="col-sm-5 col-form-label">Gambar KTP <b>(maks 5mb)</b></label>
        <div class="col-sm-10">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="gambar_ktp" name="gambar_ktp" accept=".png,.jpg,.jpeg">

            <label class="custom-file-label" for="gambar_rumah">Pilih Gambar</b></label>
          </div>
        </div>
      </div>
      <div class="form-group-row">
        <label for="nama" class="col-sm-5 col-form-label">Gambar KK <b>(maks 5mb)</b></label>
        <div class="col-sm-10">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="gambar_kk" name="gambar_kk" accept=".png,.jpg,.jpeg">

            <label class="custom-file-label" for="gambar_rumah">Pilih Gambar</label>
          </div>
        </div>
      </div>
      <div class="form-group-row">
        <label for="nama" class="col-sm-5 col-form-label">Gambar Surat Keterangan Miskin <b>(maks 5mb)</b></label>
        <div class="col-sm-10">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="gambar_sk" name="gambar_sk" accept=".png,.jpg,.jpeg">

            <label class="custom-file-label" for="gambar_rumah">Pilih Gambar</label>
          </div>
        </div>
      </div>

      <br>
      <div class="col-lg-8">
        <button id="button" type="submit" class="btn btn-primary " onclick="return confirm('Apakah Data Usulan Sudah Benar? Tolong Dicek Kembali');">Tambah</button>
        <a href="<?= base_url('user/data_usulan') ?>" class="btn btn-primary ">Kembali</a>
      </div>


      </form>
    </div>
  </div>



</div>
</div>
<script>
  function alphaOnly(event) {
    var key = event.keyCode;
    return ((key >= 65 && key <= 90) || key == 8);
  };
</script>
<script>
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
    return true;
  }
</script>