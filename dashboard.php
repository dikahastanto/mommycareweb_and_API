
<?php 

    include 'header.php';

    $sql_penyakit = "SELECT * FROM tb_penyakit";
    $query = mysqli_query($con,$sql_penyakit);
    $jumlah_penyakit = mysqli_num_rows($query);

    $sql_gejala = "SELECT * FROM tb_gejala";
    $query_gejala = mysqli_query($con,$sql_gejala);
    $jumlah_gejala = mysqli_num_rows($query_gejala);

    $sql_diagnosa = "SELECT * FROM tb_diagnosa";
    $query_diagnosa = mysqli_query($con,$sql_diagnosa);
    $jumlah_diagnosa = mysqli_num_rows($query_diagnosa);

    $sql_solusi = "SELECT * FROM tb_solusi";
    $query_solusi = mysqli_query($con,$sql_solusi);
    $jumlah_solusi = mysqli_num_rows($query_solusi);

    $sql_user = "SELECT * FROM tb_user";
    $query_user = mysqli_query($con,$sql_user);
    $jumlah_user = mysqli_num_rows($query_user);
?>
<div class="analytics-sparkle-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Data User</h5>
                        <h2><?= $jumlah_user ?> Data</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Data Penyakit</h5>
                        <h2><?= $jumlah_penyakit ?> Data</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Data Gejala</h5>
                        <h2><?= $jumlah_gejala ?> Data</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Data Diagnosa</h5>
                        <h2><?= $jumlah_diagnosa ?> Data</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Data Solusi</h5>
                        <h2><?= $jumlah_solusi ?> Data</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                    <span class="caption-subject"><b>Selemat Datang Di Halaman Admin</b></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <!-- <div class="actions graph-rp graph-rp-dl">
                                    <p>All Earnings are in million $</p>
                                </div> -->
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