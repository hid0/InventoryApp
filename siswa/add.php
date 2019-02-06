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
        <form action="conf.php" method="post" role="form" data-toggle="validator">
            <div class="form-group">
                <label for="nis">Nomer Induk Siswa</label>
                <input type="number" name="nis" id="nis" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Siswa</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select name="jk" id="jk" class="form-control" required>
                    <option value="">--Pilih--</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <!-- <input type="text" name="kelas" id="kelas" class="form-control" required> -->
                <select name="kelas" id="kelas" class="form-control" required>
                    <option value="">-- Pilih Kelas --</option>
                    <option value="X TKJ A">X TKJ A</option>
                    <option value="X TKJ B">X TKJ B</option>
                    <option value="XI TKJ A">XI TKJ A</option>
                    <option value="XI TKJ B">XI TKJ B</option>
                    <option value="XII TKJ A">XII TKJ A</option>
                    <option value="XII TKJ B">XII TKJ B</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Tambah" name="tambah" class="btn btn-info">
            </div>
        </form>
    </div>
</div>

<?php include_once '../_assets/_footer.php'; ?>