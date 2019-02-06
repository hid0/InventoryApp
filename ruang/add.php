<?php include_once '../_assets/_header.php';?>
<title>Tambah Data Ruangan</title>
<h4>
    <small>Tambah Data Ruangan</small>
        <div class="pull-right">
        <a href="index.php" title="Back" class="btn btn-info btn-xs">Data</a>
        <a href="generate.php" title="Back" class="btn btn-primary btn-xs">Tambah Data Ulang</a>
    </div>
</h4>
<div class="box">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-3">
			<form action="conf.php" method="post">
				<input type="hidden" name="total" value="<?=@$_POST['count_add']?>">
				<table class="table table-responsive table-striped">
					<tr>
						<th>#</th>
						<th>Nama Ruang</th>
						<th>Letak</th>
					</tr>
					<?php
					for ($i=1; $i <= $_POST['count_add']; $i++) { ?>
					<tr>
						<td><?=$i?></td>
						<td>
							<input type="text" name="nama-<?=$i?>" class="form-control" required>
						</td>
						<td>
							<input type="text" name="letak-<?=$i?>" class="form-control" required>
						</td>
					</tr>
					<?php
					}
					?>
				</table>
				<div class="form-group pull-right">
					<input type="submit" value="Save All" class="btn btn-info" name="add">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once '../_assets/_footer.php';?>