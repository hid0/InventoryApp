<?php

require_once '../_config/config.php';
require '../_assets/libs/vendor/autoload.php';

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDepencyException;

if (isset($_POST['add'])) {
  
  $total = $_POST['total'];
  for ($i=1; $i <= $total; $i++) { 
	  $uuid = Uuid::uuid4()->toString();
	  $nama = trim(mysqli_real_escape_string($con, $_POST['nama-'.$i]));
	  $letak = trim(mysqli_real_escape_string($con, $_POST['letak-'.$i]));
	  $sql = mysqli_query($con, "INSERT INTO tb_ruang (id_ruang, nama_ruang, letak) VALUES ('$uuid', '$nama', '$letak')") or die(mysqli_error($con));  	
  }

  if ($sql) {
  	echo "<script>alert('".$total." data berhasil ditambah'); window.location='index.php';</script>";
  } else {

  echo "<script>alert('".$total." data GAGAL ditambah!!!!');window.location='generate.php';</script>";
  	
  }

} else if (isset($_POST['edit'])) {
	for ($i=0; $i < count($_POST['id']); $i++) {
	  $id = $_POST['id'][$i];
	  $nama = $_POST['nama'][$i];
	  $letak = $_POST['letak'][$i];
	  $sql = mysqli_query($con, "UPDATE tb_ruang SET nama_ruang = '$nama', letak = '$letak' WHERE id_ruang ='$id'") or die (mysqli_error($con));
  }
  echo "<script>alert('Data berhasil di update'); window.location='index.php';</script>";
}

?>
