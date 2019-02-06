<?php
$chk = $_POST['checked'];
if (!isset($chk)) {
	echo "<script>alert('Tidak Ada data yg dipilih!');window.location='index.php';</script>";
} else {
	include_once '../_assets/_header.php';?>
	<title>Edit Data Ruangan</title>
		<h4>
		    <small>Edit Data Ruangan</small>
		        <div class="pull-right">
		        <a href="index.php" title="Back" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		    </div>
		</h4>
		<div class="box">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<form action="conf.php" method="post">
						<input type="hidden" name="total" value="<?=@$_POST['count_add']?>">
						<table class="table table-responsive">
							<tr>
								<th style="width: 2%;">#</th>
								<th>Nama Ruang</th>
								<th>Letak</th>
							</tr>
							<?php
							$no = 1;
							foreach ($chk as $id) {
								$sql_r = mysqli_query($con, "SELECT * FROM tb_ruang WHERE id_ruang = '$id'") or die (mysqli_error($con));
								while ($ru = mysqli_fetch_array($sql_r)) { ?>
									<tr>
										<td><?=$no++?>.</td>
										<td>
											<input type="hidden" name="id[]" value="<?=$ru['id_ruang']?>">
											<input type="text" name="nama[]" value="<?=$ru['nama_ruang']?>" class="form-control" required>
										</td>
										<td>
											<input type="text" name="letak[]" value="<?=$ru['letak']?>" class="form-control" required>
										</td>
									</tr>
							<?php
								}
							}
							?>
						</table>
						<div class="form-group pull-right">
							<input type="submit" name="edit" value="Edit All" class="btn btn-info">
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php
	include_once '../_assets/_footer.php';
} ?>