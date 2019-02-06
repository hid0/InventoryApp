<?php include_once '../_assets/_header.php'; ?>


<title>Data Ruang / Lab | SMK Walisongo Pecangaan</title>
<div class="box">
	<span class="text-primary"><h4>Data Ruang / Lab</h4></span>
	<form method="post" name="proses">
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th align="center" style="width: 2%;">
						<center>
							<input type="checkbox" id="select_all" value="">
						</center>
					</th>
					<th style="width: 2%;">No.</th>
					<th>Nama Ruangan</th>
					<th>Letak Ruangan</th>
				</tr>
			</thead>
		<?php
		$no = 1;
		$sql_r = mysqli_query($con, "SELECT * FROM tb_ruang ORDER BY letak ASC")or die(mysqli_error($con));
		if(mysqli_num_rows($sql_r) > 0) {
			while ($r = mysqli_fetch_array($sql_r)) {?>
			<tbody>
				<tr>
					<td align="center">
						<input type="checkbox" name="checked[]" class="check" value="<?=$r['id_ruang'];?>">
					</td>
					<td><?=$no++;?>.</td>
					<td><?=$r['nama_ruang'];?></td>
					<td><?=$r['letak'];?></td>
				</tr>
			</tbody>
			<?php
			}
		} else {
			echo "<tr><td colspan=\"4\" align=\"center\">Data Tidak ditemukan</td></tr>";
		}?>
		</table>
	</div>
	</form>
	<a href="generate.php" title="Add Data" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
	<button class="btn btn-warning btn-xs" onclick="edit()"><i class="glyphicon glyphicon-pencil"></i></button>
	<button class="btn btn-danger btn-xs" onclick="del()"><i class="glyphicon glyphicon-trash"></i></button>
</div>

<script type="text/javascript">
	$(document).ready(function () {
		$('#select_all').on('click', function () {
			if (this.checked) {
				$('.check').each(function () {
					this.checked = true;
				})
			} else {
				$('.check').each(function () {
					this.checked = false;
				})
			}
		});

		$('.check').on('click', function () {
			if ($('.check:checked').length == $('.check').length) {
				$('#select_all').prop('checked', true);
			} else {
				$('#select_all').prop('checked', false);
			}
		})

	})

	function edit() {
		document.proses.action = 'edit.php';
		document.proses.submit();
	}
	function del() {
		var conff = confirm('Yakin Ingin Hapus Data?');
		if (conff) {
			document.proses.action = 'del.php';
			document.proses.submit();
		}
	}

</script>
<?php include_once '../_assets/_footer.php';?>