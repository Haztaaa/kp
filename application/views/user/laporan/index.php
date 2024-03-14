
        <div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Laporan </h1>

<div class="card" >
                    <div class="card-body">
                    <h5 class="card-title">Laporan Data Nama Usulan Tahunan</h5>
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
                                <a href="<?= base_url('user/laporan/laporan/tahun/').$t['id'];?>" class="btn btn-success">Lihat Laporan</a>
                                <a href="<?= base_url('user/laporan/laporan/print/').$t['id'];?>" class="btn btn-primary btn-icon-split ml-2">
        <span class="icon text-white-50">
        <i class="fas fa-print"></i>
                </span>
                <span class="text">Print</span>
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


   
