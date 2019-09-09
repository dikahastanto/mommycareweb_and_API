
<?php 

include 'header_dokter.php';
$username = $_GET['username'];
$sql_user = "SELECT * FROM tb_user";
$query_user = mysqli_query($con,$sql_user);
$data = mysqli_fetch_array($query_user);
date_default_timezone_set("Asia/Jakarta");
$hpht = $data['hpht'];
$date = time();
$dateawal = strtotime(date("Y-m-d G:i:s",strtotime($hpht)));
$trimester = floor(($date - $dateawal) / (60 * 60 * 24)/30);
$tampil = 0;

$perkiraan = date("Y-m-d",strtotime('+9 month',strtotime($hpht)));
$total = date("Y-m-d",strtotime('+10 days',strtotime($perkiraan)));
if ($trimester <= 3) {
    $tampil = 1;
} else if ($trimester <=6) {
    $tampil = 2;
} else {
    $tampil = 3;
}
$sql_kel = "SELECT * FROM tb_riwayat_penyakit WHERE username = '$username'";
$query_kel = mysqli_query($con,$sql_kel);
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
                                <span class="caption-subject"><b>Detail Pasien</b></span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h4>
                                <table>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td>= <?= $data['nama_lengkap'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Umur</td>
                                        <td>= <?= $data['umur'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kehamilan Ke</td>
                                        <td>= <?= $data['kehamilanke'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Berat Badan</td>
                                        <td>= <?= $data['beratbadan'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Golongan Darah</td>
                                        <td>= <?= $data['golongandarah'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Riwayat Penyakit</td>
                                        <td>= <?= $data['riwayatpenyakit'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>HPHT</td>
                                        <td>= <?= $data['hpht'] ?></td>
                                    </tr>
                                </table><br>
                                Saat ini pasien memasuki Trimester ke - <?= $tampil ?><br>
                                Perkiraan Hari kelahiran <?= $total ?>
                                <br>
                                <h3>Keluhan Selama Kehamilan</h3>
                                <?php while($kel = mysqli_fetch_array($query_kel)): ?>
                                    <h4><?= $kel['penyakit'] ?></h4>
                                <?php endwhile; ?>
                            </h4>
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