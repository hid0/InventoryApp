<?php
include_once "../_header.php";

// use Ramsey\Uuid\Uuid;
// use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
// $uuid4 = Uuid::uuid4();
// echo $uuid4->toString();
?>

    <div class="box">
        <h3><span class="text-info">Inventaris TKJ</span></h3>
        <h4>
        <small>Tambah Data Kantor</small>
            <div class="pull-right">
                <a href="data.php" title="Back" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali Data</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="_cfg.php" method="post">
                    <div class="form-group">
                        <label for="nama">Nama Barang</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Barang" required>
                    </div>
                    <div class="form-group">
                        <label for="jml">Jumlah</label>
                        <input type="number" name="jml" class="form-control" placeholder="Jumlah Barang" required>
                    </div>
                    <div class="form-group">
                        <label for="gud">Baik</label>
                        <input type="number" name="gud" class="form-control" placeholder="Jumlah Baik">
                    </div>
                    <div class="form-group">
                        <label for="rsk">Rusak</label>
                        <input type="number" name="rsk" class="form-control" placeholder="Jumlah Rusak">
                    </div>
                    <div class="form-group">
                        <label for="tgl_beli">Tanggal Beli</label>
                        <input type="date" name="tgl_beli" class="form-control" placeholder="Tanggal Beli">
                    </div>
                    <div class="form-group">
                        <label for="tmpt">Tempat</label>
                        <select class="form-control" name="tmpt">
                          <option value="">--Pilih Tempat--</option>
                          <option value="Gudang"></option>
                          <option value="Rak 1"></option>
                          <option value="Rak 2"></option>
                          <option value="Lemari"></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ket">Keterangan</label>
                        <textarea class="form-control" name="ket" required placeholder="Keterangan"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="add" value="Tambah" class="btn btn-danger btn-sm">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(function(){
            $(".datepicker").datepicker();
        });
    </script>
<?php
include_once '../_footer.php';
?>