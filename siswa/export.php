<?php

// Fungsi header dengan mengirim raw data excel
header("Content-type: application/vnd-ms-excel");

// Mendefinisikan nama file eksport
header("Content-Disposition: attachment; filename=dataSiswa.xlsx");

// tambahkan table
include "data.php";

?>