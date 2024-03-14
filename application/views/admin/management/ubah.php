       
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
<div class="container-fluid">

                    <!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit Data</h1>

        <div class="row mt-3">
        <div class="col-md-6">
        
        <form action="<?= base_url('admin/management/ubah/').$user['id'];?>" method="post">
        <input type="hidden" name="id" value="<?= $user['id']; ?>">
        <div class="forms-group">
            <label for="nama"  class="form-label" >Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="<?= $user['nama'];?>">
            <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        <div class="forms-group">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username"class="form-control" id="username" value="<?= $user['username'];?>">
            <?= form_error('username','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        <div class="forms-group">
            <label for="password" class="form-label">Password</label>
            <input type="text" name="password" class="form-control" id="password" value="<?= $user['password'];?>">
            <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        <div class="forms-group">
        <label for="role_id" class="form-label">Role</label>
            <select name="role_id" id="role_id" class="form-control">
            
          <?php foreach($user_role as $ur) :?>
            <?php if($ur['id'] == $user['role_id']) : ?>
            <option value="<?= $ur['id']; ?>"selected><?= $ur['role']; ?></option>
            <?php else : ?>
                <option value="<?= $ur['id']; ?>"><?= $ur['role']; ?></option>
            <?php endif ; ?>

          <?php endforeach;?>
          
          </select>
          </div>
        <br>
        <div class="col-lg-2"><button type="submit" name="tambah" class="btn btn-primary ">Ubah</button></div>
        </form>
        
        </div>
        
        </div>
        
</div>
                <!-- /.container-fluid -->

</div>
            <!-- End of Main Content -->

           
     