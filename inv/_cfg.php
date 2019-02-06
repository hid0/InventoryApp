<?php

require_once '../_config/config.php';
require '../_assets/libs/vendor/autoload.php';

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDepencyException;

if (isset($_POST['add'])) {
  $uuid = Uuid::uuid4()->toString();
  $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
  $jumlah = trim(mysqli_real_escape_string($con, $_POST['jml']));
  $jumlahbaik = trim(mysqli_real_escape_string($con, $_POST['gud']));
  $jumlahrusak= trim(mysqli_real_escape_string($con, $_POST['rsk']));
  $tgl_pembelian = trim(mysqli_real_escape_string($con, $_POST['tgl_beli']));
  $tempat_barang = trim(mysqli_real_escape_string($con, $_POST['tmpt']));
  $keterangan = trim(mysqli_real_escape_string($con, $_POST['ket']));
  mysqli_query($con, "INSERT INTO items (id, nama_barang, jumlah, jumlahbaik, jumlahrusak, tgl_pembelian, tempat_barang, keterangan) VALUES ('$uuid', '$nama', '$jumlah', '$jumlahbaik', '$jumlahrusak', '$tgl_pembelian', '$tempat_barang', '$keterangan')") or die(mysqli_error($con));
  echo "<script>window.location='data.php'</script>";
} else if (isset($_POST['edit'])) {

}

?>
