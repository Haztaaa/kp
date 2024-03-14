<!-- Begin Page Content -->
       
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
<div class="container-fluid">

    <!-- Page Heading -->


        <h1 class="h3 mb-4 text-gray-800">Manajemen Data Pengguna</h1>
        
        <?= $this->session->flashdata('message'); ?>

    <div class="row">


        <div class="col-lg">
        <?php if(validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
              <?= validation_errors(); ?>
            </div>
        <?php endif; ?>
        <div class="card" >
                    <div class="card-body">
            <a href="<?= base_url('admin/management/tambah')?>" class="btn btn-primary mb-3" >Tambah Data</a>
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">Role</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php  $i =1; ?>
    <?php foreach($nama as $n) : ?>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $n['nama']?></td>
      <td>
      <?= $n['username']?>
      </td>
      <td> <?= $n['role']?> </td>
      <td>
      <a href="<?= base_url(); ?>admin/management/ubah/<?= $n['id']; ?>" class="btn btn-success "><i class="fas fa-edit"></i></a>
      <a href="<?= base_url(); ?>admin/management/hapus/<?= $n['id']; ?>" class="btn btn-danger " onclick="return confirm('Anda Yakin?'); "><i class="fas fa-trash"></i></a>
    </td>
    </tr>
    <?php $i++;?>
    <?php endforeach; ?>
    
  </tbody>
</table>
</div>


    </div>
        </div>


    </div>




</div>
 

</div>
  
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="tambahDataModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahDataModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/management')?>" method="post">
      <div class="modal-body">
           <div class="form-group">
           <label for="username" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
          
          </div>
          <div class="form-group">
            
          <input type="text" class="form-control" id="username" name="username" placeholder="Username">
          
        </div>


          <div class="form-group ">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          
          </div>
          <div class="form-group ">
          <select name="role_id" id="role_id" class="form-control">

          <option value="">Pilih Role</option>
          <?php foreach($user_role as $ur) :?>
            <option value="<?= $ur['id']; ?>"><?= $ur['role']; ?></option>
          <?php endforeach;?>
          </select>
          </div>
          
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>
            
     