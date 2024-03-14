       
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
<div class="container-fluid">

                    <!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Tambah Data Pengguna</h1>

        <div class="row mt-3">
        <div class="col-md-6">
        
        <form action="<?= base_url('admin/management/tambah')?>" method="post">
        
        <div class="forms-group">
            <label for="nama"  class="form-label" >Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" >
            <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        <div class="forms-group">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username">
            <?= form_error('username','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        <div class="forms-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" >
            <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        <div class="forms-group">
        <label for="role_id" class="form-label">Role</label>
        <select name="role_id" id="role_id" class="form-control">
            <option value="">Pilih Role</option>
            <?php foreach($user_role as $ur) :?>
            <option value="<?= $ur['id']; ?>"><?= $ur['role']; ?></option>
            <?php endforeach;?>
        </select>
          </div>
        <br>
        <div class="col-lg-2"><button type="submit" name="tambah" class="btn btn-primary ">Tambah</button></div>
        </form>
        
        </div>
        
        </div>
        
</div>
                <!-- /.container-fluid -->

</div>
            <!-- End of Main Content -->

           
     