<?php
include_once '../_assets/_header.php';
?>
<title>Import Data Alat &amp; Bahan</title>
<div class="box">
	<h3><center>Import Data Alat &amp; Barang</center></h3>
        <div class="pull-left">
        <a href="index.php" title="Back" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
    </div>
</div><br /><br />
<div class="box">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-3">
			<div class="form-group form-inline">
				<form action="conf.php" method="post" enctype="multipart/form-data">
					<label for="file">File Excel</label>
					<input type="file" name="file" id="file" class="form-control" required>
					<button class="btn btn-success" name="import"><span class="glyphicon glyphicon-cloud-upload"></span>&nbsp;Upload</button>
				</form>
			</div>
		</div>
	</div>
</div>

<?php
include_once '../_assets/_footer.php';
?>