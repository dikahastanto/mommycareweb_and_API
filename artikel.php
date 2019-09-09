<?php 

    include 'header.php';
    $sql = "SELECT * FROM tb_artikel";
    $query = mysqli_query($con,$sql);

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
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="caption pro-sl-hd">
                                <h3>Data Artikel</h3>
                            </div>
                            <a href="form_input_artikel.php">
                                <button class="btn btn-success">Tambah Data</button>
                            </a>
                            <br><br>
                            <table class="table table-responsive table-hover table-striped">
                                <tr>
                                    <td>Judul</td>
                                    <td>Isi</td>
                                    <td>Gambar</td>
                                    <td>Tanggal</td>
                                    <td>Aksi</td>
                                </tr>
                                <?php while($data = mysqli_fetch_array($query)) : ?>
                                    <tr>
                                        <td><?= $data['judul'] ?></td>
                                        <td><?= $data['isi'] ?></td>
                                        <td><?= $data['gambar'] ?></td>
                                        <td><?= $data['tanggal'] ?></td>
                                        <td>
                                            <a href="form_edit_artikel.php?id=<?= $data['id_artikel'] ?>">
                                                <button class="btn btn-primary">Edit</button>
                                            </a>
                                            <a href="delete_artikel.php?id=<?= $data['id_artikel'] ?>">
                                                <button onClick='return konfirmasi()' class="btn btn-danger">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include 'footer.php'; ?>