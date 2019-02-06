<?php
require_once "_config/config.php";
require '_assets/libs/vendor/autoload.php';

if (!isset($_SESSION['user'])) {
  echo "<script>window.location='".base_url()."/auth/login.php';</script>";
    // header('location:'.base_url().'/auth/login.php');
} ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="msapplication-starturl" content="/">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?=base_url();?>/_assets/DataTables/Bootstrap-3.3.7/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="<?=base_url();?>/_assets/DataTables/datatables.min.css"> -->
        <link rel="stylesheet" href="<?=base_url();?>/_assets/DataTables/DataTables-1.10.16/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url();?>/_assets/css/style.css">
        <link rel="icon" href="<?=base_url();?>/_assets/tkj.png">

        <script src="<?=base_url();?>/_assets/DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
        <script src="<?=base_url();?>/_assets/DataTables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="<?=base_url();?>/_assets/DataTables/DataTables-1.10.16/js/dataTables.bootstrap.min.js"></script>
        <script src="<?=base_url();?>/_assets/js/validator.min.js"></script>
        <!-- <script src="https://vuejs.org/js/vue.min.js"></script> -->
    </head>
    <body>

 	<div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Inventory <span>TKJ</span> Apps <span style="font-size: 8px;">refV1.2</span></h3>
                </div>

                <ul class="list-unstyled components">
                    <li><a href="<?=base_url('dashboard');?>"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Dashboard</a></li>
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"><span class="glyphicon glyphicon-stats"></span> Data</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="<?=base_url('ruang/');?>" title="Daftar Ruangan">Data Ruangan</a></li>
                            <li><a href="<?=base_url('tempat/');?>" title="Daftar Tempat">Data Tempat</a></li>
                            <li><a href="<?=base_url('alat_bahan/');?>" title="Daftar Alat Bahan">Data Alat & Bahan</a></li>
                            <li><a href="<?=base_url('siswa/');?>" title="Daftar Siswa">Data Siswa</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Invent</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="<?=base_url('inv/data.php');?>">Kantor TKJ</a></li>
                            <li><a href="<?=base_url('labtkj/');?>">Lab TKJ</a></li>
                            <li><a href="<?=base_url('labtengah/')?>">Lab Tengah</a></li>
                            <li><a href="<?=base_url('dna/');?>">Lab DNA Evercoss</a></li>
                        </ul>
                    </li>
                    <li><a href="<?=base_url('auth/logout.php');?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content" style="width: 100%;min-width: min-width: 1061px;max-width: 1311px;">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="navbar-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#" data-toggle="modal" data-target="#modalUser" title="Users"><span class="glyphicon glyphicon-user"></span></a></li>
                                <li><a href="#" title="Settings"><span class="glyphicon glyphicon-cog"></span></a></li>
                                <li><a href="<?=base_url('auth/logout.php');?>" title="Logout"><span class="glyphicon glyphicon-log-out"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
<!--         berisi dengan navigasi / dropdown dari setting dan user -->

        <!-- Ini isi dari halaman -->
                <div class="container-fluid" style="margin-top: -35px;">
