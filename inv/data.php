<?php include_once('../_header.php'); ?>

	<div class="box">
	<span class="text-danger"><h3>Inventaris TKJ SMK Walisongo</h3></span>
	  <h4>
		<small>Data Kantor</small>
		<div class="pull-right">
			<button title="Refresh" onclick="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></button>
			<a href="add.php" title="Add Data" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
		</div>
	  </h4>
		<div style="margin-bottom: 10px;">
			<form class="form-inline" action="" method="post">
				<div class="form-group">
					<input type="text" name="pencarian" class="form-control" placeholder="Search Somethings" />
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				</div>
			</form>
		</div>
		<div class="table-responsive">
			<table class="table table-striped table-bordered tabel-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Barang</th>
						<th>Jumlah</th>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Tanggal Beli</th>
						<th>Tempat</th>
						<th>Keterangan</th>
						<th><i class="glyphicon glyphicon-cog"></i></th>
					</tr>
				</thead>
				<tbody>
				<?php
				$batas = 4;
				$hal = @$_GET['hal'];
				if (empty($hal)) {
					$posisi = 0;
					$hal = 1;
				} else {
					$posisi = ($hal - 1) * $batas;
				}
				$no = 1;
				if($_SERVER['REQUEST_METHOD'] == "POST") {
					$pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
					if($pencarian != '') {
						$sql = "SELECT * FROM items WHERE nama_barang LIKE '%$pencarian%'";
						$query = $sql;
						$queryJml = $sql;
					} else {
						$query = "SELECT * FROM items LIMIT $posisi, $batas";
						$queryJml = "SELECT * FROM items";
						$no = $posisi + 1;
					}
				} else {
					$query = "SELECT * FROM items LIMIT $posisi, $batas";
					$queryJml = "SELECT * FROM items";
					$no = $posisi + 1;
				}

				$sql_inv = mysqli_query($con, $query) or die(mysqli_error($con));
				if(mysqli_num_rows($sql_inv) > 0) {
					while ($data = mysqli_fetch_array($sql_inv)) { ?>
						<tr>
							<td><?=$no++?>.</td>
							<td><?=$data['nama_barang']?></td>
							<td><?=$data['jumlah']?></td>
							<td><?=$data['jumlahbaik']?></td>
							<td><?=$data['jumlahrusak']?></td>
							<td><?=$data['tgl_pembelian']?></td>
							<td><?=$data['tempat_barang']?></td>
							<td><?=$data['keterangan']?></td>
							<td class="text-center">
								<a href="edit.php?id=<?=$data['id']?>" class="btn btn-info btn-xs" title="Edit Data"><span class="glyphicon glyphicon-edit"></span></a>
								<a href="del.php?id=<?=$data['id']?>" onclick="return confirm('Are You Sure to delete?');" class="btn btn-warning btn-xs" title="Delete Data"><span class="glyphicon glyphicon-trash"></span></a>
							</td>
						</tr>
					<?php
					}
				} else {
					echo "<tr><td colspan=\"4\" align=\"center\"><td>data not found</td></td>";
				}
				?>
				</tbody>
			</table>
		</div>
		<?php  
		if(@$_POST['pencarian'] == '') { ?>
			<div style="float: left;">
				<?php 
				$jml = mysqli_num_rows(mysqli_query($con, $queryJml));
				echo "<small>Jumlah Data : <b>$jml</b></small>";
				?>
			</div>
			<div style="float: right;">
				<ul class="pagination pagination-sm" style="margin: 0;">
					<?php
					$jml_hal = ceil($jml / $batas);
					for ($i=1; $i <= $jml_hal ; $i++) { 
						if ($i != $hal) {
							echo "<li><a href=\"?hal=$i\">$i</a></li>";
						} else {
							echo "<li class=\"active\"><a>$i</a></li>";
						}
					}
					?>
				</ul>
			</div>
			<?php	
		} else { 
			echo "<div style=\"float: left\">";
			$jml = mysqli_num_rows(mysqli_query($con, $queryJml));
			echo "<small>Data Hasil Pencarian : <b>$jml</b></small>";
			echo "</div>";
		}
		?>
	</div>

<?php include_once('../_footer.php');?>