<?php

require_once '../_config/config.php';

$id = $_GET['id'];
$sql = mysqli_query($con, "DELETE FROM tb_siswa WHERE id = '$id'") or die (mysqli_error($con));

if ($sql) {
	echo "<script>alert('Berhasil Terhapus');window.location='index.php';</script>";
} else {
	echo "<script>alert('Gagal Menghapus Data!!!');window.location='index.php';</script>";
}

?>