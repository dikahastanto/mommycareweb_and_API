<?php 

    include 'header.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_penyakit";
    $query = mysqli_query($con,$sql);

    $sql1 = "SELECT * FROM tb_solusi WHERE id_solusi='$id'";
    $query1 = mysqli_query($con,$sql1);
    $data_solusi = mysqli_fetch_array($query1);

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
                                <h3>Edit Solusi Untuk Penyakit</h3>
                            </div>
                            <br>
                            <form action="update_solusi.php?id=<?= $id ?>" method="post">
                                <select name="penyakit" class="form-control">
                                    <option value="<?= $data_solusi['nama_penyakit'] ?>"><?= $data_solusi['nama_penyakit'] ?></option>
                                    <?php while($data = mysqli_fetch_array($query)): ?>
                                    <option value="<?= $data['nama_penyakit'] ?>"><?= $data['nama_penyakit'] ?></option>
                                    <?php endwhile; ?>
                                </select>
                                <br>
                                <input value="<?= $data_solusi['solusi'] ?>" type="text" name="solusi" placeholder="Solusi" class="form-control"><br>
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