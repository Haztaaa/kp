<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Page Heading -->






    <h1 class="h3 mb-4 text-gray-800">Penerima Bantuan</h1>
    <?= $this->session->flashdata('message'); ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-gray">Berikut Penerima bantuan Yang Telah Diterima</h6>
        </div>
        <div class="card-body">
            <div class="row" id="result">
                <div class="col">
                    <form class="form-horizontal row" action="" method="POST" id="FormLaporan">
                        <div class="form-group col-md-3 col-sm-12">
                            <select class="form-control" name="kecamatan" id="kecamatan">

                                <option value="">Pilih Kecamatan</option>
                                <?php foreach ($kecamatan as $k) : ?>
                                    <option value="<?= $k['id']; ?>"><?= $k['kecamatan']; ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div class="form-group col-md-3 col-sm-12">
                            <select class="form-control" name="desa" id="desa">

                                <option value="">Pilih Kelurahan</option>


                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mb-4">Cari</button>
                    </form>
                </div>
                <div class="col-">
                    <a href="<?= base_url('user/penerima/tahun') ?>" class="btn btn-success">Unduh Excel</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="120%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kecamatan</th>
                                <th>Kelurahan</th>
                                <th>Jenis Bantuan</th>
                                <th>Tahun</th>
                                <th>Nik</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Pekejaan</th>
                                <th>Penghasilan</th>
                                <th>Status</th>
                                <th>Nomor Handphone</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($total as $b) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $b->kecamatan; ?></td>
                                    <td><?= $b->desa; ?></td>
                                    <td><?= $b->jenis_bantuan; ?></td>
                                    <td><?= $b->tahun; ?></td>
                                    <td><?= $b->nik; ?></td>
                                    <td><?= $b->nama_usulan; ?></td>
                                    <td><?= $b->alamat; ?></td>
                                    <td><?= $b->pekerjaan; ?></td>
                                    <td><?= $b->penghasilan; ?></td>
                                    <td>

                                        <?php
                                        if ($b->status == 0) {
                                        ?>
                                            <span class="badge badge-warning">pending</span>
                                        <?php
                                        } else if ($b->status == 1) {
                                        ?>
                                            <span class="badge badge-success">Diterima</span>
                                        <?php

                                        } else {
                                        ?>
                                            <span class="badge badge-danger">Ditolak</span>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td><?= $b->no_hp; ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>user/penerima/detail/<?= $b->id; ?>" class="btn btn-success"><i class="fas fa-info"></i></a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>






    </div>


</div>