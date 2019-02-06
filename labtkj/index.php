<?php include_once '../_assets/_header.php'; ?>


<title>Data Inventaris | SMK Walisongo Pecangaan</title>
<div class="box">
    <span class="text-primary"><h4><center>Data Inventaris Kantor TKJ</center></h4></span>
    <div class="pull-right">
        <a href="add.php" title="Add Data" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-plus"></span> Tambah Data Inventaris</a>
    </div>
</div>
<br />
<br />
<div class="box">
	<form method="post" name="proses">
	<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th style="width: 2%;">No.</th>
					<th>Nama Barang</th>
					<th style="width: 2%;">Jumlah</th>
					<th style="width: 2%;">Baik</th>
					<th style="width: 2%;">Rusak</th>
					<th style="width: 2%;">Jenis</th>
					<th style="width: 10%;"><center><span class="glyphicon glyphicon-calendar" title="Tgl Pengadaan"></span></center></th>
					<th style="width: 13%;">Ruang / Lab</th>
					<th>Keterangan</th>
                    <th>
                        <center><input type="checkbox" id="del"></center>
                    </th>
				</tr>
			</thead>
			<tbody>
				<?php

				$no = 1;
				$q = "SELECT * FROM tb_tkjl3
						INNER JOIN tb_alat_bahan ON tb_tkjl3.id_alat = tb_alat_bahan.id
				";
				$sql_l3 = mysqli_query($con, $q) or die(mysqli_error($con));
				while ($Nd = mysqli_fetch_array($sql_l3)) {
					?>
					<tr>
						<td><?=$no++?>.</td>
						<td><?=$Nd['nama_alat_bahan']?></td>
						<td><?=$Nd['jml']?></td>
						<td><?=$Nd['baik']?></td>
						<td><?=$Nd['rusak']?></td>
						<td><?=$Nd['jenis']?></td>
						<td><?=$Nd['tgl_beli']?></td>
						<td>Lab TKJ Lantai3</td>
						<td><?=$Nd['ket']?></td>
						<td>
							<center><input type="checkbox" class="del" name="del[]"></center>
						</td>
					</tr>
					<?php
				}

				?>
			</tbody>
		</table>
	</div>
	</form>
</div>
<div class="pull-right">
	<a href="javascript:;" onclick="del()" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a>
</div>

<script type="text/javascript">
	$(document).ready( function () {
		$("#del").on('click', function () {
			if (this.checked) {
				$('.del').each( function () {
					this.checked = true;
				})
			} else {
				$('.del').each( function () {
					this.checked = false;
				})
			}
		})
	})
</script>

<?php include_once '../_assets/_footer.php';?>