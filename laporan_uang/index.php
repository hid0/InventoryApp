<?php
include_once '../_header.php';
?>

<title>Kas TKJ SMK Walisongo</title>
<div class="box">
	<span class="text-primary"><h4>Laporan Keuangan Kas TKJ</h4></span>
	<div class="pull-right">
        <a href="add.php" title="Back" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
  </div><br />
	<br />
	<table class="table table-bordered table-hover table-striped" id="money">
		<div class="table-responsive">
			<thead>
				<tr>
					<th>No.</th>
					<th>Total</th>
					<th>Jenis</th>
					<th>Paraf</th>
					<th>Tanggal</th>
					<th>Keterangan</th>
					<th>
						<center>
							<span class="glyphicon glyphicon-cog"></span>
						</center>
					</th>
				</tr>
			</thead>
			<?php
			$no = 1;
			$sql = mysqli_query($con, "SELECT * FROM kas_tkj") or die(mysqli_error($con));
			if (mysqli_num_rows($sql) > 0) {
				while ($data = mysqli_fetch_array($sql)) { ?>
				<tbody>
					<tr>
						<td style="width: 2%;"><?=$no++?>.</td>
						<td><?=idr($data['total_uang']);?></td>
						<td><?=$data['jenis'];?></td>
						<td><?=$data['paraf'];?></td>
						<td><?=localdate($data['tgl']);?></td>
						<td><?=$data['ket'];?></td>
						<td>
							<center>
								<a href="del.php?id=<?=$data['id_kas']?>" class="btn btn-xs btn-danger" onclick="return confirm('Yakin Ingin Menghapus?')"><i class="glyphicon glyphicon-trash"></i></a>
								<a href="edit.php?id=<?=$data['id_kas']?>" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>
							</center>
						</td>
					</tr>
				</tbody>
			<?php
				}
			} else {
				echo "<tr><td colspan=\"7\" align=\"center\">Data Tidak ditemukan</td></tr>";
			} ?>
		</div>
	</table>

<script stype="text/javascript">
  $(document).ready( function () {
    $("#money").DataTable({
      'orderable': false,
    });
  })
</script>

</div>
<?php
include_once '../_footer.php';
?>
