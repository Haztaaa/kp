<div class="container-fluid">

                    <!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Tambah</h1>


    <div class="row">
        <div class="col-lg-8">

        <?php echo form_open_multipart('tes/tambah'); ?>

        
        <div class="form-group-row">
        <label for="alamat" class="col-sm-2 col-form-label">nama</label>
        <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" id="alamat" placeholder="Alamat">
            <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        </div>
        
        <div class="form-group-row">
        <label for="alamat" class="col-sm-2 col-form-label">jumlah</label>
        <div class="col-sm-10">
            <input type="number" name="jumlah" id="jumlah" class="form-control" >
          
        </div>
        </div>

        <div class="form-group-row">
        <label for="jenis_bantuan" class="col-sm-5 col-form-label">Jenis Bantuan</label>
        <div class="col-sm-10">
          <select name="id_buku" id="jenis_bantuan" class="form-control">
          
          <option value="">Pilih Bantuan</option>
          <?php foreach($buku as $jb) :?>
            <option value="<?= $jb['id']; ?>"><?= $jb['nama_buku']; ?></option>
          <?php endforeach;?>
         
          </select>
          </div>
          </div>


        
        <br>
        <div class="col-lg-8">
        <button type="submit" class="btn btn-primary ">Tambah</button>
        <a href="<?= base_url('barat')?>" class="btn btn-primary ">Kembali</a>
        </div>   


        </form>
        </div>
    </div>

    <script>

            $('#jumlah').on(function(){
              var check = $(this).val();
              console.log(check);
            });

    </script>
</div>
</div>