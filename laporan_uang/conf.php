<?php

include_once '../_config/config.php';
require '../_assets/libs/vendor/autoload.php';

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDepencyException;

if (isset($_POST['save_it'])) {
	$uuid = UUid::uuid4()->toString();
	$total = $_POST['total_uang'];
	$jenis = $_POST['jenis'];
	$paraf = trim(mysqli_real_escape_string($con, $_POST['paraf']));
	$tgl = $_POST['tgl'];
	$ket = trim(mysqli_real_escape_string($con, $_POST['ket']));

	mysqli_query($con, "INSERT INTO kas_tkj (id_kas, total_uang, jenis, paraf, tgl, ket) VALUES ('$uuid', '$total', '$jenis', '$paraf', '$tgl', '$ket')") or die(mysqli_error($con));
	echo "<script>alert('berhasil tambah Data!!');window.location='index.php';</script>";
}elseif (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$total = $_POST['total_uang'];
	$jenis = $_POST['jenis'];
	$paraf = trim(mysqli_real_escape_string($con, $_POST['paraf']));
	$tgl = $_POST['tgl'];
	$ket = trim(mysqli_real_escape_string($con, $_POST['ket']));

	mysqli_query($con, "UPDATE kas_tkj SET total_uang='$total', jenis='$jenis', paraf='$paraf', tgl='$tgl', ket='$ket' WHERE id_kas ='$id'") or die(mysqli_error($con));
	echo "<script>alert('Berhasil Di Update!!!');window.location='index.php';</script>";
}

?>