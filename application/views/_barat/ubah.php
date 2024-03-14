<div class="container-fluid">

                    <!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit</h1>


    <div class="row">
        <div class="col-lg-8">

        <?= form_open_multipart('barat/ubah/'. $penerima['id']) ?>
        <input type="hidden" name="id" value="<?= $penerima['id']; ?>">

        <div class="form-group-row">
        <label for="nik" class="col-sm-2 col-form-label">Nik</label>
        <div class="col-sm-10">
            <input type="text" name="nik" class="form-control" id="nik" value="<?= $penerima['nik']; ?>">
        </div>
        </div>

        <div class="form-group-row">
        <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
        <div class="col-sm-10">
            <input type="text" name="tahun" class="form-control" id="tahun"  value="<?= $penerima['tahun']; ?>">
        </div>
        </div>

        <div class="form-group-row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" id="nama"  value="<?= $penerima['nama']; ?>">
        </div>
        </div>
        <div class="form-group-row">
        <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
        <div class="col-sm-10">
            <input type="text" name="alamat" class="form-control" id="alamat"  value="<?= $penerima['alamat']; ?>">
        </div>
        </div>
        <div class="form-group-row">
        <label for="no_hp" class="col-sm-2 col-form-label">Nomor Hp</label>
        <div class="col-sm-10">
            <input type="text" name="no_hp" class="form-control" id="no_hp"  value="<?= $penerima['no_hp']; ?>">
        </div>
        </div>
        <div class="form-group-row">
        <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
        <div class="col-sm-10">
            <input type="text" name="pekerjaan" class="form-control" id="pekerjaan"  value="<?= $penerima['pekerjaan']; ?>">
            <?= form_error('pekerjaan','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        </div>

        <div class="form-group-row">
        <label for="nama" class="col-sm-3 col-form-label">Jenis Bantuan</label>
        <div class="col-sm-10">
            <input type="text" name="jenis_bantuan" class="form-control" id="jenis_bantuan"  value="<?= $penerima['jenis_bantuan']; ?>">
        </div>
        </div>
        <div class="form-group-row">
            <div class="col-sm-2">Gambar</div>
            
            <div class="col-sm-10">

            <div class="row">
                <div class="col-sm-3">
                    <img src="<?= base_url('assets/img/rumah/') . $penerima['gambar_rumah']?>" class="img-thumbnail">
                </div>
                <div class="col-sm-9">
                <div class="custom-file">
            <input type="file" class="custom-file-input" id="gambar_rumah" name="gambar_rumah">
            <input type="hidden" name="gambar_lama" value="<?= $penerima['gambar_rumah']; ?>">
            <label class="custom-file-label" for="gambar_rumah">Pilih Gambar</label>
            </div>
                </div>
            </div>
            </div>

        </div>

        <br>
        <div class="col-lg-8">
        <button type="submit" class="btn btn-primary ">Ubah</button>
        <a href="<?= base_url('barat')?>" class="btn btn-primary ">Kembali</a>
        </div> 
        </form>

        </div>
    </div>

</div>
</div>