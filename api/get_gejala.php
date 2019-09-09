<?php

    include "../koneksi.php";

    $nama_penyakit = $_GET['penyakit'];

    $sql = "SELECT * FROM tb_diagnosa WHERE penyakit = '$nama_penyakit'";
    $query = mysqli_query($con,$sql);

    $gejalas = array();
    while ($data = mysqli_fetch_array($query)) {
        $gejala = array();
        $gejala['gejala'] = $data['gejala'];
        array_push($gejalas,$gejala);

    }
    $response = $gejalas;
        $json = json_encode($response);
            print($json);

?>