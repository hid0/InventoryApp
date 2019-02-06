<?php

require_once '../_config/config.php';
require '../_assets/libs/vendor/autoload.php';

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDepencyException;

if (isset($_POST['tambah'])) {
	$uuid = Uuid::uuid4()->toString();
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$ruang = trim(mysqli_real_escape_string($con, $_POST['ruang']));
	$ket = trim(mysqli_real_escape_string($con, $_POST['ket']));
	// mysqli_query($con, "INSERT INTO tb_tkjl3 (id_inv, id_alat, id_ruang, ket) VALUES ('$uuid', '$nama', '$ruang', '$ket'") or die(mysqli_error($con)); 
	mysqli_query($con, "INSERT INTO tb_tkjl3 (id_inv, id_alat, id_ruang, ket) VALUES ('$uuid', '$nama', '$ruang', '$ket')") or die(mysqli_error($con));
	echo "<script>window.location='index.php'</script>";
}

?>