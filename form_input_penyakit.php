<?php 

    include 'header.php';

?>
<div class="analytics-sparkle-area">
</div>
<div class="product-sales-area mg-tb-30">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-sales-chart">
                <div class="portlet-title">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="caption pro-sl-hd">
                                <h3>Tambah Penyakit</h3>
                            </div>
                            <br>
                            <form action="simpan_penyakit.php" method="post">
                                <input type="text" name="penyakit" placeholder="Penyakit" class="form-control"><br>
                                <input type="text" name="ket" placeholder="Keterangan" class="form-control"><br>
                                <select name="level" class="form-control">
                                    <option value="1">Cukup Berbahaya</option>
                                    <option value="2">Berbahaya</option>
                                    <option value="3">Sangat Berbahaya</option>
                                </select><br>
                                <input type="submit" class="btn btn-success" value="Simpan">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include 'footer.php'; ?>