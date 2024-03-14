       
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
        <div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Data Kelurahan</h1>

<?= $this->session->flashdata('message'); ?>
        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-gray">Data Kelurahan</h6>
                        </div>
                        <div class="card-body">
                        <div class="row">
          <div class="col-mb">           
          </div>
          <div class="col-">
            <a href="<?= base_url('admin/data_desa/tambah')?>" class="btn btn-primary mb-2" >Tambah Data</a>
            
        </div>
            
          </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" >
                                    <thead>
                                        <tr>
                                            <th >No</th>
                                            <th>Kecamatan</th>
                                            <th >Desa</th>
                                            <th >Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

</div>
        
</div>


   
