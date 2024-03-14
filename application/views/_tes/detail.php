<div class="container-fluid">

                    <!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Detail</h1>


    <div class="row">
        <div class="col-lg-8">

        <?php echo form_open_multipart('tes/detail/'.$semua['id']); ?>
        <input type="hidden" name="id" value="<?= $semua['id']; ?>">
        
        <div class="form-group-row">
        <label for="alamat" class="col-sm-2 col-form-label">nama p</label>
        <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" id="alamat" value="<?= $semua['nama']?>">
           
        </div>
        </div>

        <div class="form-group-row">
        <label for="alamat" class="col-sm-4 col-form-label">Jumlah Peminajman</label>
        <div class="col-sm-10">
            <input type="text" name="jumlah" value="<?= $semua['jumlah']?>" readonly>
          
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

          <div class="form-group-row">
        <label for="jenis_bantuan" class="col-sm-5 col-form-label">Status </label>
        <div class="col-sm-10">
          <select name="status" id="jenis_bantuan" class="form-control">
          
          <option value="">Pilih Status</option>
          
            <option value="0">Aktif</option>
            <option value="1">Non-Aktif</option>
        
         
          </select>
          </div>
          </div>

          <div class="form-group-row">
        <label for="jenis_bantuan" class="col-sm-5 col-form-label">Tes</label>
        <div class="col-sm-10">
          <select name="status" id="kondisi" class="form-control" onchange="chageStatus()">
          
          <option value="">Pilih Status</option>
          
            <option value="0">Aman</option>
            <option value="1">Kurang</option>
            <option value="2">Hilang</option>
        
         
          </select>
          </div>
          </div>

          <div class="form-group-row" id="jumlahkembali" style="display: none;">
        <label for="alamat" class="col-sm-4 col-form-label">Jumlah Dikembalikan</label>
        <div class="col-sm-10">
            <input type="number" name="jumlah_kembali" class="form-control" >
            <?= form_error('jumlah_kembali','<small class="text-danger pl-3">','</small>'); ?>
        </div>
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

