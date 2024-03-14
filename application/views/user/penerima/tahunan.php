
        <div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Ekspor Data Penerima</h1>

<div class="card" >
                    <div class="card-body">
                    <h5 class="card-title">Ekspor Data Penerima Tahunan (File Excel)</h5>
                    <div class="table-responsive">
                    <table class="table">
                        <thead class="table-bordeed">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tahun</th>
                            
                            
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  $i =1; ?>
                        <?php foreach($tahun as $t) : ?>
                            <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $t['tahun']?></td>
                            
                            
                            <td>
                            <a href="<?= base_url('user/penerima/export/').$t['id'];?>" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
        <i class="fas fa-file-download"></i>
                </span>
                <span class="text">Ekspor</span>
        </a>
                                
        <span class="icon text-white-50">
        <i class="fas fa-print"></i>
                </span>
                
        </a>
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


   
