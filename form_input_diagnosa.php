<?php 

    include 'header.php';
    $sql_penyakit = "SELECT * FROM tb_penyakit";
    $query_penyakit = mysqli_query($con,$sql_penyakit);

    $sql_gejala = "SELECT * FROM tb_gejala";
    $query_gejala = mysqli_query($con,$sql_gejala);

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
                                <h3>Tambah Diagnosa</h3>
                            </div>
                            <br>
                            <form action="simpan_diagnosa.php" method="post">
                                <select class="form-control" name="penyakit">
                                    <option selected disabled>-- Pilih Penyakit --</option>
                                    <?php while($data_penyakit=mysqli_fetch_array($query_penyakit)) : ?>
                                    <option values="<?= $data_penyakit['nama_penyakit'] ?>"><?= $data_penyakit['nama_penyakit'] ?></option>
                                    <?php endwhile; ?>
                                </select><br>
                                <select class="form-control" name="gejala">
                                    <option selected disabled>-- Pilih Gejala --</option>
                                    <?php while($data_gejala=mysqli_fetch_array($query_gejala)) : ?>
                                    <option values="<?= $data_gejala['gejala'] ?>"><?= $data_gejala['gejala'] ?></option>
                                    <?php endwhile; ?>
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