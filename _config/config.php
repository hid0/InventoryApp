<?php
// setting default timezone
date_default_timezone_get('Asia/Jakarta');

session_start();

require_once 'conn.php';

//koneksi
$con = mysqli_connect($con['host'], $con['user'], $con['pass'], $con['db']);
if (mysqli_connect_errno()) {
	echo mysqli_connect_error();
}

//funsi base_url
function base_url($url = null)
{
	$base_url = "http://inv.workspace";
	if ($url != null) {
		return $base_url."/".$url;
	} else {
		return $base_url;
	}
}

function localdate($tgl)
{
	$date = substr($tgl, 8, 2);
	$month = substr($tgl, 5, 2);
	$years = substr($tgl, 0, 4);

	return $date."/".$month."/".$years;
}

function idr($rupiah)
{
  $rupiah = "Rp. ".number_format($rupiah,0,',','.');
  return $rupiah;
}

?>
