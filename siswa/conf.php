<?php

require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

// use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDepencyException;

if (isset($_POST['tambah'])) {
	$uuid = Uuid::uuid4()->toString();
	$nis = $_POST['nis'];
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$jk = $_POST['jk'];
	$kelas = $_POST['kelas'];
	$check_id = mysqli_query($con, "SELECT * FROM tb_siswa WHERE nis = '$nis'")or die(mysqli_error($con));
	if (mysqli_num_rows($check_id) > 0) {
		echo "<script>alert('Nomor NIS pernah terinput');window.location='add.php';</script>";
	} else {
	mysqli_query($con, "INSERT INTO tb_siswa (id, nis, nama, jk, kelas) VALUES ('$uuid', '$nis', '$nama', '$jk', '$kelas')") or die(mysqli_error($con));
	echo "<script>window.location='index.php';</script>";
	}
} else if (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$nis = $_POST['nis'];
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$jk = $_POST['jk'];
	$kelas = $_POST['kelas'];
	$checkID = mysqli_query($con, "SELECT * FROM tb_siswa WHERE nis = '$nis' AND id != '$id'") or die(mysqli_error($con));
	if (mysqli_num_rows($checkID) > 0) {
		echo "<script>alert('Nomor NIS pernah terinput');window.location='add.php';</script>";
	} else {
		mysqli_query($con, "UPDATE tb_siswa SET nis='$nis', nama='$nama', jk='$jk', kelas='$kelas' WHERE id = '$id'") or die(mysqli_error($con));
		echo "<script>window.location='index.php';</script>";
	}
} else if (isset($_POST['import'])) {
	$file = $_FILES['file']['name'];
	$ext = explode(".", $file);
	$file_name = "file-".round(microtime(true)).".".end($ext);
	$src = $_FILES['file']['tmp_name'];
	$target_dir = "../_files/";
	$target_file = $target_dir.$file_name;
	move_uploaded_file($src, $target_file);

	// if ($upload) {
	// 	echo "berhasil diupload";
	// } else {
	// 	echo "gagal terupload";
	// }
	// $sql = "INSERT INTO tb_siswa (id, nis, nama, jk, kelas) VALUES";
	// for ($i=3; $i <= count($all_data); $i++) {
		// 	$id = Uuid::uuid4()->toString();
		// 	$nis = $all_data[$i]['A'];
		// 	$nama = trim(mysqli_real_escape_string($con, $all_data[$i]['B']));
		// 	$jk = $all_data[$i]['C'];
		// 	$kelas = $all_data[$i]['D'];
		// 	$sql .= " ('$id', $nis', '$nama', '$jk', '$kelas'),";
		// }

		$obj = PHPExcel_IOFactory::load($target_file);
		$all_data = $obj->getActiveSheet()->toArray(null, true, true, true);
		$q = "INSERT INTO tb_siswa (id, nis, nama, jk, kelas) VALUES";
		for ($i=3; $i <= count($all_data); $i++) {
			$uuid = Uuid::uuid4()->toString();
			$nis = $all_data[$i]['A'];
			$nama = trim(mysqli_real_escape_string($con, $all_data[$i]['B']));
			$jk = $all_data[$i]['C'];
			$kelas = $all_data[$i]['D'];
			$q .= " ('$uuid', '$nis', '$nama', '$jk', '$kelas'),";
		}
		$q = substr($q, 0, -1);
		mysqli_query($con, $q) or die (mysqli_error($con));
		// echo $sql;
		unlink($target_file);
		echo "<script>window.location='index.php';</script>";



	// https://youtu.be/eaf-5gxf1HE?list=PLTagRbmJ8ettXwsd6QJ2D7SO_QV3GSBC8&t=651
	// https://youtu.be/vUJBLc1G-zA?t=1668 -------> Ust Adi Hidayat
}

?>