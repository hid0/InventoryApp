<?php

require_once '../_config/config.php';

$chk = @$_POST['checked'];
if (!isset($chk)) {
	echo "<script>alert('Tidak Ada data yg dipilih!');window.location='index.php';</script>";
} else {
	foreach ($chk as $id) {
		$sql = mysqli_query($con, "DELETE FROM tb_alat_bahan WHERE id = '$id'") or die (mysqli_error($con));
		
		if ($sql) {
			echo "<script>alert('data berhasil di HAPUS!!'); window.location='index.php';</script>";
	  	} else {
	  		echo "<script>alert('GAGAL HAPUS data!!!! Coba Lagi :\"v');</script>";
	  	}
	}
}

?>