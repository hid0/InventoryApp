<?php
require_once "_config/config.php";
if (isset($_SESSION['user'])) {
  	echo "<script>window.location='".base_url('dashboard')."';</script>";
} else {
	echo "<script>window.location='".base_url('auth/login.php')."';</script>";
}
?>

<!-- https://youtu.be/4nwoh0zzlf8?t=1345 -->