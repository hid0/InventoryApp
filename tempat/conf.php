<?php

require_once '../_config/config.php';

if (isset($_POST['tambah'])) {
    // $nama = trim(mysql_real_escape($con, $_POST['nama_tempat']));
    // $pj = trim(mysqli_real_escape($con, $_POST['pj']));
    $nama = $_POST['nama_tempat'];
    $pj = $_POST['pj'];
    $jabatan = $_POST['jabatan'];
    mysqli_query($con, "INSERT INTO tb_tempat (id, nama_tempat, penanggung_jawab, jabatan) VALUES ('', '$nama', '$pj', '$jabatan')") or die (mysqli_error($con));
    echo "<script>window.location='index.php'</script>";
} else if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama_tempat'];
    $pj = $_POST['pj'];
    $jabatan = $_POST['jabatan'];
    mysqli_query($con, "UPDATE tb_tempat SET nama_tempat='$nama', penanggung_jawab='$pj', jabatan='$jabatan' WHERE id = '$id'") or die (mysqli_error($con));
    echo "<script>alert('Data berhasil di update!!!'); window.location='index.php'</script>";
}

?>