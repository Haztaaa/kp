<?php
header("Content-type:application/octet-stream/");

header("Content-Disposition:attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");
?>

<table border="1" width="100">
<thead>
    <tr>
    <th >No</th>
    <th >Nik</th>
    <th >Kecamatan</th>
    <th>Kelurahan</th>
    <th >Jenis Bantuan</th>
    <th >Tahun</th>
    
    <th >Nama</th>
    <th >Alamat</th>
    <th >Pekejaan</th>
    <th >Nomor Handphone</th>
    <th>Penghasilan</th>
    </tr>
    </thead>
    <tbody>
    <?php $i=1; 
    foreach($semua as $s) : ?>
        <tr>
             <td><?= $i++; ?></td>
             <td><?= $s->nik; ?> </td>
             <td><?= $s->kecamatan; ?> </td>
             <td><?= $s->desa; ?> </td>
             <td><?= $s->jenis_bantuan; ?> </td>
             <td><?= $s->tahun; ?> </td>
             <td><?= $s->nama_usulan; ?> </td>
             <td><?= $s->alamat; ?> </td>
             <td><?= $s->pekerjaan; ?> </td>
             <td><?= $s->no_hp; ?> </td>
             <td><?= $s->penghasilan; ?> </td>
             
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>