<?php include_once '../_assets/_header.php'; ?>

<title>Tambah Data Siswa</title>
<center>
    <h4 class="text-info">Tambah Data Siswa</h4>
    <div class="pull-left">
        <a href="index.php" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-chevron-left"></span> Back</a>
    </div>
</center>
<br />
<br />
<div class="box">
    <div class="col-lg-6 col-lg-offset-3">
    	<?php
    	$id = @$_GET['id'];
    	$sql = mysqli_query($con, "SELECT * FROM tb_siswa WHERE id = '$id'")or die(mysqli_error($con));
    	$sis = mysqli_fetch_array($sql);
    	?>
        <form action="conf.php" method="post" role="form" data-toggle="validator">
            <div class="form-group">
                <label for="nis">Nomer Induk Siswa</label>
                <input type="hidden" name="id" value="<?=$sis['id']?>">
                <input type="number" name="nis" id="nis" class="form-control" value="<?=$sis['nis']?>">
            </div>
            <div class="form-group">
                <label for="nama">Nama Siswa</label>
                <input type="text" name="nama" id="nama" class="form-control" value="<?=$sis['nama']?>">
            </div>
            <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select name="jk" id="jk" class="form-control" required>
                    <option value="">--Pilih--</option>
                    <option value="L"<?=$sis['jk'] == 'L' ? "selected" : null ?>>Laki-laki</option>
                    <option value="P"<?=$sis['jk'] == 'P' ? "selected" : null ?>>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <!-- <input type="text" name="kelas" id="kelas" class="form-control" required> -->
                <select name="kelas" id="kelas" class="form-control" required>
                    <option value="">-- Pilih Kelas --</option>
                    <option value="X TKJ A"<?=$sis['kelas'] == "X TKJ A" ? "selected" : null ?>>X TKJ A</option>
                    <option value="X TKJ B"<?=$sis['kelas'] == "X TKJ B" ? "selected" : null ?>>X TKJ B</option>
                    <option value="XI TKJ A"<?=$sis['kelas'] == "XI TKJ A" ? "selected" : null ?>>XI TKJ A</option>
                    <option value="XI TKJ B"<?=$sis['kelas'] == "XI TKJ B" ? "selected" : null ?>>XI TKJ B</option>
                    <option value="XII TKJ A"<?=$sis['kelas'] == "XII TKJ A" ? "selected" : null ?>>XII TKJ A</option>
                    <option value="XII TKJ B"<?=$sis['kelas'] == "XII TKJ B" ? "selected" : null ?>>XII TKJ B</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Save" name="edit" class="btn btn-success">
            </div>
        </form>
    </div>
</div>

<?php include_once '../_assets/_footer.php'; ?>