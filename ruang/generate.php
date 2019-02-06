<?php include_once '../_assets/_header.php';?>

<title>Tambah Data Ruangan</title>
<h4>
    <small>Tambah Data Ruangan</small>
    <div class="pull-right">
        <a href="index.php" title="Back" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Previous</a>
    </div>
</h4>
<div class="box">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-4">
			<form action="add.php" method="post">
				<div class="form-group">
					<label for="count_add">Jumlah Record yang akan ditambah</label>
					<input type="text" name="count_add" maxlength="2" id="count_add" pattern="[0-9]+" class="form-control" required>
				</div>
				<div class="form-group pull-right">
					<input type="submit" value="Generate" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once '../_assets/_footer.php';?>