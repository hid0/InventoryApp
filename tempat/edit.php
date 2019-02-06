<?php include_once '../_assets/_header.php';?>

<title>Edit Tempat | SMK Walisongo Pecangaan</title>

<h3>
    <small>Edit Data Tempat</small>
        <div class="pull-right">
        <a href="index.php" title="Back" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
    </div>
</h3>
<div class="box">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
        <?php
        $id = @$_GET['id'];
        $sql_t = mysqli_query($con, "SELECT * FROM tb_tempat WHERE id = '$id'") or die (mysqli_error($con));
        $t = mysqli_fetch_array($sql_t);
        ?>
			<form action="conf.php" method="post">
                <div class="form-group">
                    <label for="nama">Nama Tempat</label>
                    <input type="hidden" name="id" value="<?=$t['id']?>">
                    <input type="text" name="nama_tempat" id="nama" class="form-control" value="<?=$t['nama_tempat']?>">
                </div>
                <div class="form-group">
                    <label for="pj">Penanggung Jawab</label>
                    <input type="text" name="pj" id="pj" class="form-control" value="<?=$t['penanggung_jawab']?>">
                </div>
                <div class="form-group">
                    <label for="pj">Jabatan</label>
                    <input type="text" name="jabatan" id="jabatan" class="form-control" value="<?=$t['jabatan']?>">
                </div>
				<div class="form-group pull-right">
					<input type="submit" value="Edit All" class="btn btn-success" name="edit">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once '../_assets/_footer.php';?>