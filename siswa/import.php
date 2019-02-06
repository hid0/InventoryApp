<?php include_once '../_assets/_header.php'; ?>

<title>Tambah / Import Data Excel</title>
<center>
    <h4 class="text-info">Import Data Siswa</h4>
    <div class="pull-left">
        <a href="index.php" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-chevron-left"></span> Back</a>
        <a href="../_files/sample/data_siswa.xlsx" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download Format Excel</a>
    </div>
</center>
<br />
<br />
<div class="box">
    <div class="col-lg-6 col-lg-offset-3">
        <form action="conf.php" method="post" role="form" enctype="multipart/form-data">
            <div class="form-group form-inline">
                <input type="file" name="file" id="file" class="form-control" required>
                <button type="submit" name="import" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-cloud-upload"></span>&nbsp;Upload</button>
            </div>
        </form>
    </div>
</div>

<?php include_once '../_assets/_footer.php'; ?>