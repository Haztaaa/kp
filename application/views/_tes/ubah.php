<div class="container-fluid">

                    <!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Tambah</h1>


    <div class="row">
        <div class="col-lg-8">

        <?php echo form_open_multipart('tes/ubah/'.$semua['id']); ?>
        <input type="hidden" name="id" value="<?= $semua['id']; ?>">
        
        <div class="form-group-row">
        <label for="alamat" class="col-sm-2 col-form-label">nama p</label>
        <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" id="alamat" value="<?= $semua['nama']?>">
            <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        </div>

        <div class="form-group-row">
        <label for="alamat" class="col-sm-4 col-form-label">Jumlah Peminajman</label>
        <div class="col-sm-10">
            <input type="text" name="jumlah" value="<?= $semua['jumlah']?>" readonly>
          
        </div>

        </div>
        <div class="form-group-row">
        <label for="alamat" class="col-sm-4 col-form-label">Jumlah Dikembalikan</label>
        <div class="col-sm-10">
            <input type="number" name="jumlah_kembali" class="form-control" >
          
        </div>
        </div>

        <div class="forms-group-row col-lg-10">
        <label for="role_id" class="form-label">Buku</label>
            <select name="buku_id" id="id_kecamatanubah" class="form-control">
            
          <?php foreach($buku as $k) :?>
            <?php if($k['id'] == $semua['buku_id']) : ?>
            <option value="<?= $k['id']; ?>"selected><?= $k['nama_buku']; ?></option>
            <?php else : ?>
                <option value="<?= $k['id']; ?>"><?= $k['nama_buku']; ?></option>
            <?php endif ; ?>

          <?php endforeach;?>
          
          </select>
          </div>


        
        <br>
        <div class="col-lg-8">
        <button type="submit" class="btn btn-primary ">Tambah</button>
        <a href="<?= base_url('tes')?>" class="btn btn-primary ">Kembali</a>
        </div>   


        </form>
        </div>
    </div>

</div>
</div>