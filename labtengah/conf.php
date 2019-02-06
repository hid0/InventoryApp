<?php

require_once '../_config/config.php';
require '../_assets/libs/vendor/autoload.php';

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDepencyException;

if (isset($_POST['tambah'])) {
	$id = Uuid::uuid4()->toString();
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$jml = trim(mysqli_real_escape_string($con, $_POST['jml']));
	$b = trim(mysqli_real_escape_string($con, $_POST['baik']));
	$r = trim(mysqli_real_escape_string($con, $_POST['rusak']));
	$tgl = trim(mysqli_real_escape_string($con, $_POST['tgl']));
	$k = trim(mysqli_real_escape_string($con, $_POST['ket']));

	mysqli_query($con, "INSERT INTO tb_tengah (id_inv, nama, jumlah, baik, rusak, pengadaan, ket) VALUES ('$id', '$nama', '$jml', '$b', '$r', '$tgl', '$k')") or die(mysqli_error($con));
	echo "<script>window.location='index.php';</script>";
}
