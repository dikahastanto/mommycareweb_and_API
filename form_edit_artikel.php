<?php 

    include 'header.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_artikel WHERE id_artikel='$id'";
    $query = mysqli_query($con,$sql);
    $data = mysqli_fetch_array($query);

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
                                <h3>Edit Artikel</h3>
                            </div>
                            <br>
                            <form action="update_artikel.php?id=<?= $data['id_artikel'] ?>" method="post" enctype="multipart/form-data">
                                <input value="<?= $data['judul']; ?>" name="judul" type="text" class="form-control" placeholder="Judul Artikel"><br>
                                <textarea name="isi" placeholder="Isi Artikel" cols="60" rows="10" class="form-control"><?= $data['isi'] ?></textarea><br>
                                <input name="image" type="file" class="form-control"><br>
                                Gambar Sekarang - upload gambar baru untuk merubah gambar
                                <img src="img/<?= $data['gambar'] ?>" alt="">
                                <br>
                                <input type="submit" class="btn btn-success" value="Simpan"><br>
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