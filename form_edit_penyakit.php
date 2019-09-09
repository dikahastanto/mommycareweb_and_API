<?php 

    include 'header.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_penyakit WHERE id_penyakit='$id'";
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
                                <h3>Edit Penyakit</h3>
                            </div>
                            <br>
                            <form action="update_penyakit.php?id=<?= $data['id_penyakit'] ?>" method="post">
                                <input value="<?= $data['nama_penyakit'] ?>" type="text" name="penyakit" placeholder="Penyakit" class="form-control"><br>
                                <input value="<?= $data['ket'] ?>" type="text" name="ket" placeholder="Keterangan" class="form-control"><br>
                                <select name="level" class="form-control">
                                    <option value="<?= $data['level_penyakit'] ?>">
                                        <?php 

                                            if ($data['level_penyakit'] == '1') {
                                                echo 'Cukup Berbahaya';
                                            } else if ($data['level_penyakit'] == '2') {
                                                echo 'Berbahaya';
                                            } else {
                                                echo 'Sangat Berbahaya';
                                            }
                                        
                                        ?>
                                    </option>
                                    <option value="1">Cukup Berbahaya</option>
                                    <option value="2">Berbahaya</option>
                                    <option value="3">Sangat Berbahaya</option>
                                </select><br>
                                <input type="submit" class="btn btn-success" value="Update">
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