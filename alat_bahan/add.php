<?php include_once '../_assets/_header.php';?>
<title>Tambah Alat & Bahan | SMK Walisongo Pecangaan</title>
<h3>
    <small><center class="text-info">Tambah Data Alat & Bahan</center></small>
        <div class="pull-right">
        <a href="index.php" title="Back" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
    </div>
</h3>
<div class="box">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
            <form action="conf.php" method="post" data-toggle="validator">
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
                <div class="form-group">
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
                </div>
                <div class="form-group">
                    <label for="tgl">Tanggal Pembelian</label>
                    <input type="date" class="form-control" name="tgl" id="tgl" value="<?=date('Y-m-d');?>">
                </div>
                <div class="form-group">
                    <label for="ket">Keterangan</label>
                    <textarea class="form-control" name="ket" required></textarea>
                </div>
                <div class="form-group">
                    <div class="pull-left">
                        <input type="submit" value="Tambah" name="tambah" class="btn btn-success">
                    </div>
                    <div class="pull-right">
                        <input type="reset" value="Reset" class="btn btn-warning">
                    </div>
                </div>
            </form>
        </div>
	</div>
</div>

<?php include_once '../_assets/_footer.php';?>