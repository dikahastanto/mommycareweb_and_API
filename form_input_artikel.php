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
                                <h3>Tambah Artikel</h3>
                            </div>
                            <br>
                            <form action="simpan_artikel.php" method="post" enctype="multipart/form-data">
                                <input name="judul" type="text" class="form-control" placeholder="Judul Artikel"><br>
                                <textarea name="isi" placeholder="Isi Artikel" cols="60" rows="10" class="form-control"></textarea><br>
                                <input name="image" type="file" class="form-control" placeholder="Judul Artikel"><br>
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