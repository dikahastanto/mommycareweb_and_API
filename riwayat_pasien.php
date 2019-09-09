
<?php 

include 'header_dokter.php';

$sql_user = "SELECT * FROM tb_riwayat_penyakit INNER JOIN tb_user ON tb_riwayat_penyakit.username=tb_user.username";
$query_user = mysqli_query($con,$sql_user);
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
                                <span class="caption-subject"><b>Riwayat Pengecekan Pasien</b></span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="caption pro-sl-hd">
                                <span class="caption-subject">Berikut Data Pasien</span>
                            </div>
                            <br>
                            <table class="table table-hover table-striped">
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>Umur</td>
                                    <td>Diagnosa</td>
                                    <td>Tanggal Cek</td>
                                </tr>
                                <?php while($data = mysqli_fetch_array($query_user)): ?>
                                <tr>
                                    <td><?= $data['nama_lengkap'] ?></td>
                                    <td><?= $data['umur'] ?></td>
                                    <td><?= $data['penyakit'] ?></td>
                                    <td><?= $data['tgl'] ?></td>
                                </tr>
                                <?php endwhile; ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="extra-area-chart" style="height: 356px;"></div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include 'footer.php'; ?>