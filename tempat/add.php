<?php include_once '../_assets/_header.php';?>
<title>Tambah Tempat | SMK Walisongo Pecangaan</title>
<h3>
    <small>Tambah Data Tempat</small>
        <div class="pull-right">
        <a href="index.php" title="Back" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
    </div>
</h3>
<div class="box">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<form action="conf.php" method="post">
                <div class="form-group">
                    <label for="nama">Nama Tempat</label>
                    <input type="text" name="nama_tempat" id="nama" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="pj">Penanggung Jawab</label>
                    <input type="text" name="pj" id="pj" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="pj">Jabatan</label>
                    <input type="text" name="jabatan" id="jabatan" class="form-control" required>
                </div>
				<div class="form-group pull-right">
					<input type="submit" value="Save" class="btn btn-info" name="tambah">
				</div>
                <div class="form-group pull-left">
                    <input type="reset" value="Reset" class="btn btn-danger">
                </div>
			</form>
		</div>
	</div>
</div>

<?php include_once '../_assets/_footer.php';?>