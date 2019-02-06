<?php include_once '../_assets/_header.php';?>

<title>Edit Data Alat &amp; Barang | SMK Walisongo Pecangaan</title>

<h3>
    <small>Edit Data Alat &amp; Barang</small>
        <div class="pull-right">
        <a href="index.php" title="Back" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
    </div>
</h3>
<div class="box">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
            <?php
            $id = @$_GET['id'];
            $sql_ab = mysqli_query($con, "SELECT * FROM tb_alat_bahan WHERE id = '$id'") or die(mysqli_error($con));
            $ab = mysqli_fetch_array($sql_ab);
            ?>
            <form action="conf.php" method="post">
                <div class="form-group">
                    <label for="nama">Nama Alat &amp; Barang</label>
                    <input type="hidden" name="id" value="<?=$ab['id']?>">
                    <input type="text" name="nama" id="nama" class="form-control" value="<?=$ab['nama_alat_bahan']?>">
                </div>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-0">
                        <label for="jml">Jumlah</label>
                        <div class="input-group">
                            <input type="number" name="jml" id="jml" class="form-control" value="<?=$ab['jml']?>">
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-offset-0">
                        <label for="baik">Jumlah Baik</label>
                        <div class="input-group">
                            <input type="number" name="baik" id="baik" class="form-control" value="<?=$ab['baik']?>">
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-offset-0">
                        <label for="rusak">Jumlah Rusak</label>
                        <div class="input-group">
                            <input type="number" name="rusak" id="rusak" class="form-control" value="<?=$ab['rusak']?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <select name="jenis" id="jenis" class="form-control">
                        <!-- <?php
                        $opsi1 = $ab['jenis'] == 'sekali_pakai' ? ' selected="selected"' : '';
                        $opsi2 = $ab['jenis'] == 'alat' ? ' selected="selected"' : '';
                        $opsi3 = $ab['jenis'] == 'bahan' ? ' selected="selected"' : '';
                        $opsi4 = $ab['jenis'] == 'sparepart' ? ' selected="selected"' : '';
                        $opsi5 = $ab['jenis'] == 'dll' ? ' selected="selected"' : '';
                        ?>
                        <option value="">--Pilih Satu--</option>
                        <option value="sekali_pakai"<?=$opsi1?>>Sekali Pakai</option>
                        <option value="alat"<?=$opsi2?>>Alat</option>
                        <option value="bahan"<?=$opsi3?>>Bahan</option>
                        <option value="sparepart"<?=$opsi4?>>Spare Part</option>
                        <option value="dll"<?=$opsi5?>>DLL</option> -->
                        <option value="">--Pilih Satu--</option>
                        <option value="Barang"<?=$ab['jenis'] == "Barang" ? "selected" : null ?>>Barang</option>
                        <option value="Sekali Pakai"<?=$ab['jenis'] == "Sekali Pakai" ? "selected" : null ?>>Sekali Pakai</option>
                        <option value="Alat"<?=$ab['jenis'] == "Alat" ? "selected" : null ?>>Alat</option>
                        <option value="Bahan"<?=$ab['jenis'] == "Bahan" ? "selected" : null ?>>Bahan</option>
                        <option value="Sparepart"<?=$ab['jenis'] == "Sparepart" ? "selected" : null ?>>Spare Part</option>
                        <option value="DLL"<?=$ab['jenis'] == "DLL" ? "selected" : null ?>>DLL</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tgl">Tanggal Pengadaan</label>
                    <input type="date" name="tgl" id="tgl" class="form-control" value="<?=$ab['tgl_beli'];?>">
                </div>
                <div class="form-group">
                    <label for="ket">Keterangan</label>
                    <textarea class="form-control" name="ket" rows="5" style="resize: none;"><?=$ab['ket']?></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Edit"class="btn btn-info" name="edit">
                </div>
            </form>
        </div>
	</div>
</div>
<?php include_once('../_assets/_footer.php'); ?>