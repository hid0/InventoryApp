<?php include_once '../_assets/_header.php';?>
<title>Tambah Tempat | SMK Walisongo Pecangaan</title>
<link rel="stylesheet" href="<?=base_url('_assets/css/select2.min.css')?>">
<h3>
    <small>Tambah Data Inventaris</small>
        <div class="pull-right">
        <a href="index.php" title="Back" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
    </div>
</h3>
<div class="box">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<form action="conf.php" method="post" data-toggle="validator">
                <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <select name="nama" id="nama" class="form-control" required>
                    	<option value="">- Pilih Barang -</option>
                    	<?php
                    	// $sql_brg = mysqli_query($con, "SELECT * FROM tb_alat_bahan")or die(mysql_error($con));
                    	// while ($dataBrg = mysqli_fetch_array($sql_brg)) {
                    	// 	echo '<option value="'.$dataBrg['id'].'">'.$dataBrg['nama_alat_bahan'].'</option>';
                    	// }
                        $sql_brg = mysqli_query($con, "SELECT * FROM tb_alat_bahan") or die (mysqli_error($con));
                        while ($dT_brg = mysqli_fetch_array($sql_brg)) {
                            echo "<option value=\"".$dT_brg['id']."\">".$dT_brg['nama_alat_bahan']."</option>";
                        }
                    	?>
                    </select>
                </div>
                <!-- <div class="row">
                    <div class="col-sm-4 col-sm-offset-0">
                        <label for="jml">Jumlah</label>
                        <div class="input-group">
                            <input type="number" name="jml" id="jml" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-offset-0">
                        <label for="baik">Baik</label>
                        <div class="input-group">
                            <input type="number" name="baik" id="baik" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-offset-0">
                        <label for="rusak">Rusak</label>
                        <div class="input-group">
                            <input type="number" name="rusak" id="rusak" class="form-control" required>
                        </div>
                    </div>
                </div><br /> -->
                <!-- <div class="form-group">
                    <label for="tmpt">Tempat</label>
                    <select name="tempat" id="tmpt" class="form-control" required>
                    	<option value="">- Pilih Tempat -</option> -->
                    	<?php
                    	// $tmp = mysqli_query($con, "SELECT * FROM tb_tempat ORDER BY nama_tempat DESC")or die(mysqli_error($con));
                    	// while ($dT = mysqli_fetch_array($tmp)) {
                    	// 	echo '<option value="'.$dT['id'].'">'.$dT['nama_tempat'].'</option>';
                    	// }
                    	?>
                    <!-- </select>
                </div> -->
                <div class="form-group">
                    <label for="ruang">Ruang / Lab</label>
                    <select name="ruang" id="ruang" class="form-control" required>
                    	<option value="">- Pilih Tempat -</option>
                    	<?php
                    	$r = mysqli_query($con, "SELECT * FROM tb_ruang ORDER BY nama_ruang ASC")or die(mysqli_error($con));
                    	while ($dR = mysqli_fetch_array($r)) {
                    		echo '<option value="'.$dR['id_ruang'].'">'.$dR['nama_ruang'].'</option>';
                    	}
                    	?>
                    </select>
                </div>
                <!-- <div class="form-group">
                	<label for="tgl">Tanggal Pembelian</label>
            		<input type="date" name="tgl" id="tgl" class="form-control" value="<?=date('Y-m-d')?>">
                </div> -->
                <div class="form-group">
                	<label for="ket">Keterangan</label>
            		<textarea name="ket" id="ket" class="form-control"></textarea>
	            </div>
				<div class="form-group pull-right">
					<input type="submit" value="Save" class="btn btn-info" name="tambah">
				</div>
                <!-- <div class="form-group pull-left">
                    <input type="reset" value="Reset" class="btn btn-danger">
                </div> -->
			</form>
		</div>
	</div>
</div>

<script src="<?=base_url('_assets/js/select2.min.js')?>"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $("#nama").select2({
            'theme' : 'bootstrap'
        });
        $("#ruang").select2({
            'theme' : 'bootstrap'
        });
    })
</script>
<?php include_once '../_assets/_footer.php';?>