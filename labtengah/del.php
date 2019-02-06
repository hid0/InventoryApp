<?php

require_once '../_config/config.php';

$c = $_POST['checked'];
if (!isset($c)) {
	echo "<script>alert('Tidak Ada data yg dipilih!');window.location='index.php';</script>";
} else {
	foreach ($c as $d) {
		$s = mysqli_query($con, "DELETE FROM tb_tengah WHERE id_inv ='$d'") or die(mysqli_error($con));

		if ($s) {
			echo "
			<script>
				// alert('data berhasil di HAPUS!!');
				swal({
					title: 'Data Berhasil dihapus!!',
					type: 'success'
				}, function() {
					window.location='index.php';
				});
			</script>";
	  	} else {
	  		echo "<script>alert('GAGAL HAPUS data!!!! Coba Lagi :\"v');</script>";
	  	}
	}
}

?>