<?php
include_once '../_assets/_header.php';
?>

<title>Inventaris Lab TKJ Lantai 2 | SMK Walisongo Pecangaan</title>
<div class="box">
	<span class="text-primary"><h3><center>Data Inventaris</center></h3></span>
	<a data-toggle="modal" data-target="#add" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Tambah Inv</a>
	<a class="btn btn-success btn-xs pull-right" data-toggle="modal" data-target="#pcModal"><span class="glyphicon glyphicon-zoom-in"></span> Data Komputer</a>
	<a onclick="del()" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
</div><br><br>

<div class="box">
	<form action="" method="post" name="proses">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th style="width: 2%;">No.</th>
						<th>Nama Barang</th>
						<th style="width: 2%;">Jml</th>
						<th style="width: 2%;">Baik</th>
						<th style="width: 2%;">Rusak</th>
						<th style="width: 10%;"><center><span class="glyphicon glyphicon-calendar" title="Tgl Pengadaan"></span></center></th>
						<th>Keterangan</th>
						<th style="width: 2%;">
							<input type="checkbox" id="del">
						</th>
					</tr>
				</thead>
				<?php
				$n = 1;
				$q = mysqli_query($con, "SELECT * FROM tb_tengah") or die(mysqli_error($con));
				if (mysqli_num_rows($q) > 0) {
					while ($d = mysqli_fetch_array($q)) {
				?>
				<tbody>
					<tr>
						<td><?=$n++;?></td>
						<td><?=$d['nama']?></td>
						<td><?=$d['jumlah']?></td>
						<td><?=$d['baik']?></td>
						<td><?=$d['rusak']?></td>
						<td><?=$d['pengadaan']?></td>
						<td><?=$d['ket']?></td>
						<td>
							<input type="checkbox" name="checked[]" class="del" value="<?=$d['id_inv']?>">
						</td>
					</tr>
				<?php }
				} else {
					echo "<tr><td colspan=\"6\" align=\"center\">Data Not Found</td></tr>";
				}
				?>
				</tbody>
			</table>
		</div>
	</form>
</div>
<!-- Modal -->
<div class="modal fade" id="pcModal" role="dialog" data-backdrop="false" tabindex="-1" aria-labelled="modalTitle" style="background-color: rgba(0,0,0, 0.5);">
	<div class="modal-dialog modal-lg">
		<!-- modal content -->
		<div class="modal-content">
			<div class="modal-header">
				<button class="close pull-left" data-dismiss="modal">&times;</button>
				<h4 class="modal-title text-primary" id="modalTitle"><center>Data PC Lab TKJ Tengah Lantai 2</center></h4>
			</div>
			<div class="modal-body">
				<!-- berisi Data berupa table -->
				<form action="delModal.php" method="post" name="modalM">
				<div class="table-resposive">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th style="width: 1%;">#</th>
								<th style="width: 13%;">Kode PC</th>
								<th>Prosesor</th>
								<th>RAM</th>
								<th>HDD</th>
								<th>MOBO</th>
								<th style="width: 2%;">
									<input type="checkbox" id="pcCheck"><!-- ada value id nanti -->
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1.</td>
								<td>121212</td>
								<td>Core 2 Duo</td>
								<td>2 GB</td>
								<td>250GB</td>
								<td>Asus</td>
								<td>
									<center><input type="checkbox" id="modC"></center>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				</form>
			</div>
			<div class="modal-footer">
				<div class="pull-left">
					<a onclick="delModal()" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-trash"></span></a>
					<a onclick="delModal()" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
				</div>
				<p style="font-size: 12px !important;">Copyright &copy; 2018</p>
			</div>
		</div>
	</div>
</div>

<!-- Modal Tambah Data -->

<div class="modal fade" id="add" role="dialog" data-backdrop="false" tabindex="-1" aria-labelled="modalTitle" style="background-color: rgba(0,0,0, 0.5);">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" data-dismiss=modal>&times;</button>
				<h4 class="modal-title" id="modalTitle">
					<center>Tambah Data</center>
				</h4>
			</div>
			<form action="conf.php" method="post" data-toggle="validator">
			<div class="modal-body">
                <div class="form-group">
                    <label for="nama">Nama Alat &amp; Barang</label>
                    <input type="text" name="nama" id="nama" class="form-control" required autofocus>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-0">
                        <label for="jml">Jumlah</label>
                        <div class="input-group">
                            <input type="number" name="jml" id="jml" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-offset-0">
                        <label for="baik">Jumlah Baik</label>
                        <div class="input-group">
                            <input type="number" name="baik" id="baik" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-offset-0">
                        <label for="rusak">Jumlah Rusak</label>
                        <div class="input-group">
                            <input type="number" name="rusak" id="rusak" class="form-control" required>
                        </div>
                    </div>
                </div><br />
                <!-- <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <select name="jenis" id="jenis" class="form-control" required>
                        <option value="">--Pilih Satu--</option>
                        <option value="barang">Barang</option>
                        <option value="sekali_pakai">Sekali Pakai</option>
                        <option value="alat">Alat</option>
                        <option value="bahan">Bahan</option>
                        <option value="sparepart">Spare Part</option>
                        <option value="dll">DLL</option>
                    </select>
                </div> -->
                <div class="form-group">
                    <label for="tgl">Tanggal Pengadaan</label>
                    <input type="date" class="form-control" name="tgl" id="tgl" value="<?=date('Y-m-d');?>">
                </div>
                <div class="form-group">
                    <label for="ket">Keterangan</label>
                    <textarea class="form-control" name="ket" required></textarea>
                </div>
			</div>
			<div class="modal-footer">
                <div class="form-group">
                    <div class="pull-left">
                        <input type="submit" value="Tambah" name="tambah" class="btn btn-success">
                    </div>
                    <div class="pull-right">
                        <input type="reset" value="Reset" class="btn btn-warning">
                    </div>
                </div>
			</div>
            </form>
		</div>
	</div>
</div>

<script>
	$(document).ready( function () {
		$('#del').on('click', function () {
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
		$('.del').on('click', function () {
			if ($('.del:checked').length == $('.del').length) {
				$('#del').prop('checked', true);
			} else {
				$('#del').prop('checked', false);
			}
		})
	})

	function del() {
		// var c = confirm('Are You Sure?');
		// if (c) {
		// 	document.proses.action = 'del.php';
		// 	document.proses.submit();
		// }
		var c = swal({
			title: 'Are You Sure?',
			text: 'Anda Akan Menghapus Data!',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!',
			allowEscapeKey: true
		}).then((result) => {
			if (c) {
				document.proses.action = 'del.php';
				document.proses.submit();
			}
		})
	}
</script>

<?php
include_once '../_assets/_footer.php';
?>