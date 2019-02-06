<?php

require_once '../_config/config.php';
require '../_assets/libs/vendor/autoload.php';

// use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDepencyException;
if(isset($_POST['tambah'])) {
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $jml = $_POST['jml'];
    $baik = $_POST['baik'];
    $rusak = $_POST['rusak'];
    $jenis = $_POST['jenis'];
    $tgl = $_POST['tgl'];
    $ket = trim(mysqli_real_escape_string($con, $_POST['ket']));
    mysqli_query($con, "INSERT INTO tb_alat_bahan (nama_alat_bahan, jml, baik, rusak, jenis, tgl_beli, ket) VALUES ('$nama', '$jml', '$baik', '$rusak', '$jenis', '$tgl', '$ket')") or die (mysqli_error($con));
    echo "<script>window.location='index.php';</script>";
} else if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $jml = $_POST['jml'];
    $baik = $_POST['baik'];
    $rusak = $_POST['rusak'];
    $jenis = $_POST['jenis'];
    $tgl = $_POST['tgl'];
    $ket = trim(mysqli_real_escape_string($con, $_POST['ket']));
    // mysqli_query($con, "UPDATE tb_alat_bahan SET nama_alat_bahan='$nama', jml='$jml', baik='$baik', rusak='$rusak', jenis='$jenis', ket='$ket' WHERE id = '$id'") or die (mysqli_error($con));
    mysqli_query($con, "UPDATE tb_alat_bahan SET nama_alat_bahan='$nama', jml='$jml', baik='$baik', rusak='$rusak', jenis='$jenis', tgl_beli='$tgl', ket='$ket' WHERE id='$id'") or die(mysqli_error($con));
    echo "<script>alert('Data Berhasil di Update');window.location='index.php';</script>";
} else if (isset($_POST['import'])) {
    $file = $_FILES['file']['name'];
	$ext = explode(".", $file);
    $file_name = "data_barang-".round(microtime(true)).".".end($ekstensi);
    $src = $_FILES['file']['tmp_name'];
	$target_dir = "../_files/";
	$target = $target_dir.$file_name;
	move_uploaded_file($src, $target);

    // if ($upload) {
    //     echo "Berhasil Terupload";
    //     unlink($src);
    // } else {
    //     echo "Gagal cuk!!!";
    // }

    $obj = PHPExcel_IOFactory::load($target);
    $data = $obj->getActiveSheet()->toArray(null, true, true, true);
    $sql = "INSERT INTO tb_alat_bahan (id, nama_alat_bahan, jml, baik, rusak, jenis, tgl_beli, ket) VALUES";
    for ($i=2; $i <= count($data); $i++) {
        $uuid = Uuid::uuid4()->toString();
        $nama = trim(mysqli_real_escape_string($con, $data[$i]['A']));
        $jml = trim(mysqli_real_escape_string($con, $data[$i]['B']));
        $baik = trim(mysqli_real_escape_string($con, $data[$i]['C']));
        $rusak = trim(mysqli_real_escape_string($con, $data[$i]['D']));
        $jenis = trim(mysqli_real_escape_string($con, $data[$i]['E']));
        $tgl = trim(mysqli_real_escape_string($con, $data[$i]['F']));//disesuaikan dengan format YYYY-MM-dd
        $ket = trim(mysqli_real_escape_string($con, $data[$i]['G']));
        $sql .= " ('$uuid', '$nama', '$jml', '$baik', '$rusak', '$jenis', '$tgl', '$ket'),";
    }
    $sql = substr($sql, 0, -1);
    mysqli_query($con, $sql) or die (mysqli_error($con));
    // echo $sql;
    unlink($target);
    echo "<script>window.location='index.php';</script>";

}

?>