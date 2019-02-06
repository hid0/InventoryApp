<?php include_once('../_assets/_header.php'); ?>
<title>Dashboard Page | SMK Walisongo Pecangaan</title>
<section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
			<a href="<?=base_url('siswa/');?>">
				<span class="info-box-icon bg-aqua"><i class="fa fa-user-circle"></i></span>
			</a>
			<?php
			$sql = mysqli_query($con, "SELECT nama FROM tb_siswa") or die(mysqli_error($con));
			$jmlS = mysqli_num_rows($sql);
			?>
            <div class="info-box-content">
              <span class="info-box-text">Jumlah Siswa</span>
              <span class="info-box-number"><?=$jmlS?> <small>Siswa</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
			<a href="<?=base_url('alat_bahan/');?>">
				<span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
			</a>
			<?php
			$sql_ = mysqli_query($con, "SELECT * FROM tb_alat_bahan") or die(mysqli_error($con));
			$jml_ = mysqli_num_rows($sql_);
			?>
            <div class="info-box-content">
              <span class="info-box-text">Jumlah Data</span>
              <span class="info-box-number"><?=$jml_?> Data</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
			<a href="<?=base_url('ruang/');?>">
				<span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
			</a>
			<?php
			$sqlR = mysqli_query($con, "SELECT * FROM tb_ruang") or die(mysqli_error($con));
			$jml = mysqli_num_rows($sqlR);
			?>
            <div class="info-box-content">
              <span class="info-box-text">Jumlah Ruang</span>
              <span class="info-box-number"><?=$jml?> Ruang</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Data DNA</span>
              <span class="info-box-number">41 Barang</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

<?php include_once('../_assets/_footer.php');?>