<?php include_once '../_assets/_header.php'; ?>

<title>Data Alat & Bahan | SMK Walisongo Pecangaan</title>

<center>
    <h3 class="text-primary">Data Alat &amp; Bahan</h3>
    <div class="pull-left">
        <a href="" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-refresh"></span></a>
        <a href="add.php" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-plus"></span> Tambah Alat</a>
    </div>
</center>
<br /><br />

<div class="box">
    <div class="table-responsive">
        <form name="proses" method="post">
            <table id="alat" class="table table-striped table-bordered table-hover" style="border: auto;">
                <thead>
                    <tr>
                        <th class="table-bordered"><center><input type="checkbox" value="" id="select_all"></center></th>
                        <th>Nama Alat &amp; Bahan</th>
                        <th>Jml</th>
                        <th>Baik</th>
                        <th>Rusak</th>
                        <th>Jenis</th>
                        <th align="center">Pengadaan</th>
                        <th>Keterangan</th>
                        <th>
                            <center><i class="glyphicon glyphicon-cog"></i></center>
                        </th>
                    </tr>
                </thead>
                <?php
                $no = 1;
                $sql_ab = mysqli_query($con, "SELECT * FROM tb_alat_bahan")or die(mysqli_error($con));
                if(mysqli_num_rows($sql_ab) > 0) {
                        while ($ab = mysqli_fetch_array($sql_ab))
                         {?>
                <tbody>
                    <tr>
                        <td align="center">
                            <input type="checkbox" name="checked[]" class="check" value="<?=$ab['id'];?>">
                        </td>
                        <td><?=$ab['nama_alat_bahan'];?></td>
                        <td><?=$ab['jml'];?></td>
                        <td><?=$ab['baik'];?></td>
                        <td><?=$ab['rusak'];?></td>
                        <td><?=$ab['jenis'];?></td>
                        <td><?=localdate($ab['tgl_beli']);?></td>
                        <td><?=$ab['ket'];?></td>
                        <td>
                            <center>
                                <a href="edit.php?id=<?=$ab['id']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                            </center>
                        </td>
                    </tr>
                </tbody>
                <?php
                    }
                } else {
                    echo "<tr><td colspan=\"9\" align=\"center\">Data Tidak ditemukan</td></tr>";
                }?>
            </table>
        </form>
    </div>
    <button class="btn btn-danger btn-xs" onclick="del()"><i class="glyphicon glyphicon-trash"></i> Delete</button>
	<a href="import.php" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-cloud-upload"></i> Import</a>
	<button class="btn btn-success btn-xs"><i class="glyphicon glyphicon-download"></i> Export Excel</button>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		$('#alat').DataTable( {
			"orderable": false,
			"searchable": false,
			"lengthChange": false,
			"ordering": false,
            "scrollY": '250px',
            dom: 'Bfrtip'
			// "bFilter": false
			// "bPaginate": false
		} );
		$('#select_all').on('click', function () {
			if (this.checked) {
				$('.check').each(function () {
					this.checked = true;
				})
			} else {
				$('.check').each(function () {
					this.checked = false;
				})
			}
		});

		$('.check').on('click', function () {
			if ($('.check:checked').length == $('.check').length) {
				$('#select_all').prop('checked', true);
			} else {
				$('#select_all').prop('checked', false);
			}
		})

	})

	// function edit() {
	// 	document.proses.action = 'edit.php';
	// 	document.proses.submit();
	// }
	function del() {
		var conff = confirm('Yakin Ingin Hapus Data?');
		if (conff) {
			document.proses.action = 'del.php';
			document.proses.submit();
		}
	}

</script>
<?php include_once '../_assets/_footer.php';?>