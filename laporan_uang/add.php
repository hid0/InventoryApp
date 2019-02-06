<?php
include '../_header.php';
?>

<title>Input KAS TKJ | SMK Walisongo Pecangaan</title>
<div class="box">
	<span class="text-primary"><h4>TKJ Printer</h4></span>
	<div class="pull-right">
        <a href="index.php" title="Back" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
    </div><br />

	<form action="conf.php" method="post">
		<div class="col-lg-6 col-lg-offset-3">
			<div class="row">
				<input-group class="input-group input-inline">
					<div class="input-group-addon"><i class="glyphicon glyphicon-console"></i></div>
					<input type="date" name="tgl" class="form-control" value="<?=date('Y-m-d')?>">
				</input-group>
			</div><br />
			<div class="row">
				<div class="input-group input-inline">
					<div class="input-group-addon">Rp</div>
					<input type="text" name="total_uang" id="total" class="form-control" placeholder="10.000,-" required>
				</div>
			</div><br />
			<div class="row">
				<div class="input-group input-inline">
					<div class="input-group-addon">@</div>
					<select name="jenis" id="jenis" class="form-control" required onchange="ct()">
						<option value="">-- Pilih --</option>
						<option value="Pemasukan">Pemasukan</option>
						<option value="Pengeluaran">Pengeluaran</option>
					</select>
				</div>
			</div><br />
			<div class="row">
				<div class="input-group input-inline">
					<div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
					<input type="text" class="form-control" name="paraf" placeholder="Paraf" required>
				</div>
			</div>
			<br /><div class="row" id="masuk" style="display: none;">
				<div class="input-group"><!-- jika terselect pemasukan maka div ini muncul -->
					<span class="input-group-addon" title="Kertas Tidak Berwarna"><i class="glyphicon glyphicon-adjust"></i></span>
					<input type="text" class="form-control" id="hitam" onkeyup="calc();" value="2">
					<span class="input-group-addon" title="Kertas Berwarna"><i class="glyphicon glyphicon-tint"></i></span>
					<input type="text" class="form-control" id="warna" onkeyup="calc();" value="2">
				</div>
				<br />
			</div>
			<div class="row">
				<input-group class="input-group input-inline">
					<textarea class="form-control" name="ket" cols="82" placeholder="Keterangan"></textarea>
				</input-group>
			</div><br />
			<div class="row">
				<div class="pull-right"><input type="reset" value="Reset" class="btn btn-danger"></div>
				<div class="pull-left"><input type="submit" name="save_it" value="Save" class="btn btn-success"></div>
			</div><br />
		</div>
	</form>

</div>
<script type="text/javascript">
	function calc() {
		var hitam = $("#hitam").val();
		var warna = $("#warna").val();
		a = hitam * 250;
		b = warna * 500;
		c = a + b;
		$("#total").val(c);
		// document.getElementById('total').html
	}

	function ct() {
		var p = $("#jenis").val();
		if (p == 'Pemasukan') {
			$("#masuk").show();
		} else {
			$("#masuk").hide();
		}
	}
	// function numberWithCommas(number) {
	// 	var parts = number.toString().split(".");
	// 	// parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
	// 	// return parts.join(".");
	// 	var parts = number.toString().split(".");
	//     parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	//     return parts.join(".");
	// }
	// $(document).ready( function () {
	// 	$("#total").each( function () {
	// 		var num = $(this).text();
	// 		var comma = rupiah(num);
	// 		$(this).text(comma);
	// 	})
	// });

</script>

<?php
include '../_footer.php';
?>