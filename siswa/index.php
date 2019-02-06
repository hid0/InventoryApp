<?php require_once '../_assets/_header.php'; ?>

<title>Data Siswa</title>
<center>
	<h4 class="text-info">Data Siswa</h4>
	<div class="pull-left">
		<a href="" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-refresh"></span></a>
		<a href="import.php" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Import Data</a>
		<a href="export.php" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-export"></span> Export Excel</a>
		<a href="add.php" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
	</div>
</center>
<br />
<br />
<div class="box">
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover" id="siswa">
			<thead>
				<tr>
					<th>NIS</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Kelas</th>
					<th>
						<center>
							<i class="glyphicon glyphicon-cog"></i>
						</center>
					</th>
				</tr>
			</thead>
		</table>
	</div>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#siswa').DataTable({
				"processing": true,
				"serverSide": true,
				"ajax": "siswa_data.php",
				"scrollY": '250px',
				"searchable": false,
				"lengthChange": false,
				"ordering": false,
				dom: 'Bfrtip',
				"columnDefs": [
					{
						"orderable": false,
						"targets": 4,
						"render": function (data, type, row) {
							var btn = "<center><a href=\"edit.php?id=" + data + "\" class=\"btn btn-warning btn-xs\"><i class=\"glyphicon glyphicon-edit\"></i></a> <a href=\"del.php?id=" + data + "\" onclick=\"return confirm('Yakin akan menghapus data ini?')\" class=\"btn btn-danger btn-xs\"><i class=\"glyphicon glyphicon-trash\"></i></a></center>";
							return btn;
						}
					}
				]
			});
		});
		</script>
</div>

<script src="<?=base_url();?>/_assets/DataTables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>/_assets/DataTables/DataTables-1.10.16/js/dataTables.bootstrap.min.js"></script>

<?php
require_once '../_assets/_footer.php';
?>