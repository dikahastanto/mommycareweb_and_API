<?php

    include  "../koneksi.php";

    $nama_penyakit = $_GET['nama_penyakit'];

    $sql = "SELECT level_penyakit FROM tb_penyakit WHERE nama_penyakit = '$nama_penyakit'";
    $query = mysqli_query($con,$sql);
    $data = mysqli_fetch_array($query);

    $response['level'] = (int)$data['level_penyakit'];
    $json = json_encode($response);
    print($json);

?>