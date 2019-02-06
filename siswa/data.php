<?php

include_once "../_config/config.php";

$sql = mysqli_query($con, "SELECT * FROM tb_siswa") or die(mysqli_error($con));
$no = 1;
?>
<link rel="stylesheet" href="<?=base_url('_assets/css/bootstrap.min.css');?>">
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>No.</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>JK</th>
            <th>Kelas</th>
        </tr>
    </thead>
<?php
while ($data = mysqli_fetch_array($sql)) {
    ?>
    <tbody>
        <tr>
            <td><?=$no++;?></td>
            <td><?=$data['nis'];?></td>
            <td><?=$data['nama'];?></td>
            <td><?=$data['jk'];?></td>
            <td><?=$data['kelas'];?></td>
        </tr>
    </tbody>
    <?php
}
?>
</table>
